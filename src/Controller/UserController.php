<?php 
// src/Controller/UserController.php
// backoffice user
namespace App\Controller;

use App\Entity\User;
use App\Form\EditUserType;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    #[Route('/users', name: 'app_users')]
    public function index(
        UserRepository $userRepository, 
        PaginatorInterface $paginator, 
        Request $request
    ): Response
    {
        // Récupérer tous les utilisateurs
        $query = $userRepository->createQueryBuilder('u')->getQuery();

        // Paginer les résultats (5 utilisateurs par page)
        $users = $paginator->paginate(
            $query, // Requête à paginer
            $request->query->getInt('page', 1), // Numéro de page par défaut
            5 // Nombre d'éléments par page
        );

        // Créer un formulaire vide pour éviter l'erreur Twig
        $editForm = $this->createForm(EditUserType::class, new User());

        return $this->render('user/index.html.twig', [
            'users' => $users,
            
        ]);
    }
  
    #[Route('/edituser/{id}', name: 'edit_user', methods: ['POST'])]
    public function editUser(
        int $id, 
        Request $request, 
        UserRepository $userRepository, 
        EntityManagerInterface $entityManager, 
        UserPasswordHasherInterface $passwordHasher
    ): Response 
    {
        $user = $userRepository->find($id);
    
        if (!$user) {
            return $this->json(['success' => false, 'message' => 'Utilisateur non trouvé.'], 404);
        }
    
        // Mise à jour des informations utilisateur
        $user->setNom($request->request->get('nom'));
        $user->setPrenom($request->request->get('prenom'));
        $user->setEmail($request->request->get('email'));
        $user->setAdresse($request->request->get('adresse'));
        $user->setNumTel($request->request->get('numTel'));
        $user->setPhoto($request->request->get('photo'));
        // Mise à jour du rôle
        $newRole = $request->request->get('role');
        if (in_array($newRole, ['ROLE_CLIENT', 'ROLE_ADMIN', 'ROLE_ARTISAN'])) {
            $user->setRoles([$newRole]);
        }
        // Gestion du mot de passe
        $currentPassword = $request->request->get('currentPassword');
        $newPassword = $request->request->get('newPassword');
    
        if (!empty($currentPassword) && !empty($newPassword)) {
            // Vérifier que le mot de passe actuel est correct
            if (!$passwordHasher->isPasswordValid($user, $currentPassword)) {
                return $this->json(['success' => false, 'message' => 'Mot de passe actuel incorrect.'], 400);
            }
    
            // Hacher le nouveau mot de passe et l'enregistrer
            $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
            $user->setPassword($hashedPassword);
        }
    
        // Sauvegarde des modifications
        $entityManager->flush();
    
        return $this->json(['success' => true, 'message' => 'Utilisateur mis à jour avec succès !']);
    }
    

    #[Route('/deleteuser/{id}', name: 'deleteuser')]
    public function deleteauth(ManagerRegistry $doctrine, $id): Response
    {
        $userRepository = $doctrine->getRepository(User::class);
        $user = $userRepository->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Author not found');
        }

        $em = $doctrine->getManager();
        $em->remove($user);
        $em->flush();

        $this->addFlash('success', 'User deleted successfully!');

        return $this->redirectToRoute('app_users');
    }   


}
