<?php

namespace App\Controller;

use App\Entity\Wishlistmateriaux;
use App\Repository\MateriauxRepository;
use App\Repository\WishlistmateriauxRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;



final class WishlistmateriauxController extends AbstractController
{
    #[Route('/wishlistmateriaux', name: 'app_wishlistmateriaux')]
    public function wishlist(WishlistmateriauxRepository $wishlistRepository): Response
    {
        // Utiliser un ID statique pour l'utilisateur (par exemple user_id = 1)
        $userId = 1;
        //$user = $security->getUser();

    //if (!$user) {
     //   return $this->redirectToRoute('app_login'); // Rediriger vers la connexion si l'utilisateur n'est pas connecté
    //}
        // Récupérer la wishlist de l'utilisateur avec un ID statique
        $wishlist = $wishlistRepository->findOneBy(['user' => $userId]);  // Utilise 'user' au lieu de 'id_user'
        
        // Passer la wishlist à la vue
        return $this->render('wishlistmateriaux/wishlist.html.twig', [
            'wishlist' => $wishlist,
        ]);
    }


    #[Route('/wishlist/add/{id}', name: 'wishlist_add')]
    public function addToWishlist(int $id, MateriauxRepository $materiauxRepository, EntityManagerInterface $em): Response
    {
        // Utilisation d'un user_id statique, ici 1
        $userId = 1;
    
        // Récupérer le matériel
        $materiel = $materiauxRepository->find($id);
    
        if (!$materiel) {
            throw $this->createNotFoundException('Produit non trouvé');
        }
    
        // Récupérer l'utilisateur
        $user = $em->getRepository(User::class)->find($userId);
    
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }
    
        // Vérifier si l'utilisateur a déjà une wishlist
        $existingWishlist = $em->getRepository(Wishlistmateriaux::class)
            ->findOneBy(['user' => $user]);  // Chercher la wishlist par utilisateur
    
        if (!$existingWishlist) {
            // Si la wishlist n'existe pas, créer une nouvelle wishlist
            $existingWishlist = new Wishlistmateriaux();
            $existingWishlist->setUser($user);  // Associer l'utilisateur
            $existingWishlist->setDateAjout(new \DateTime());  // Ajouter la date d'ajout
            $em->persist($existingWishlist);
            $em->flush();
        }
    
        // Vérifier si le produit est déjà dans la wishlist de l'utilisateur
        $existingWishlistItem = $em->getRepository(Wishlistmateriaux::class)
            ->createQueryBuilder('w')
            ->innerJoin('w.id_materiel', 'm')
            ->where('w.user = :user') 
            ->andWhere('m.id = :materiel')
            ->setParameter('user', $user->getId())
            ->setParameter('materiel', $materiel->getId())
            ->getQuery()
            ->getOneOrNullResult();
    
        if (!$existingWishlistItem) {
            // Ajouter le matériel à la wishlist
            $existingWishlist->addIdMateriel($materiel);
            $em->persist($existingWishlist);
            $em->flush();
    
            $this->addFlash('success', 'Produit ajouté à votre wishlist.');
        } else {
            $this->addFlash('info', 'Ce produit est déjà dans votre wishlist.');
        }
    
        return $this->redirectToRoute('app_wishlistmateriaux');
    }
    
    #[Route("/wishlist/remove/{id}", name:"wishlist_remove")]
public function removeFromWishlist(int $id, EntityManagerInterface $entityManager, WishlistmateriauxRepository $wishlistRepository, MateriauxRepository $materiauxRepository): Response
{
    // Utilisation d'un user_id statique, ici 1 (à modifier plus tard avec l'authentification)
    $userId = 1;

    // Récupérer l'utilisateur
    $user = $entityManager->getRepository(User::class)->find($userId);
    if (!$user) {
        throw $this->createNotFoundException('Utilisateur non trouvé.');
    }

    // Récupérer le matériel
    $materiel = $materiauxRepository->find($id);
    if (!$materiel) {
        throw $this->createNotFoundException('Matériel non trouvé.');
    }

    // Récupérer la wishlist de l'utilisateur
    $wishlist = $wishlistRepository->findOneBy(['user' => $user]);
    if (!$wishlist) {
        throw $this->createNotFoundException('Wishlist introuvable.');
    }

    // Vérifier si le matériel est bien dans la wishlist
    if ($wishlist->getIdMateriel()->contains($materiel)) {
        $wishlist->removeIdMateriel($materiel);
        $entityManager->persist($wishlist);
        $entityManager->flush();

        $this->addFlash('success', 'Produit supprimé de votre wishlist.');
    } else {
        $this->addFlash('warning', 'Ce produit ne figure pas dans votre wishlist.');
    }

    return $this->redirectToRoute('app_wishlistmateriaux');
}


}
