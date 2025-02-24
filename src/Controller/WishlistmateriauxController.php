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

    // Récupérer l'utilisateur (id_user)
    $user = $em->getRepository(User::class)->find($userId);

    if (!$user) {
        throw $this->createNotFoundException('Utilisateur non trouvé');
    }

    // Vérifier si le produit est déjà dans la wishlist de l'utilisateur (userId statique)
    $existingWishlistItem = $em->getRepository(Wishlistmateriaux::class)
    ->createQueryBuilder('w')
    ->innerJoin('w.id_materiel', 'm')
    ->where('w.user = :user')  // Changer id_user par user
    ->andWhere('m.id = :materiel')
    ->setParameter('user', $user->getId())
    ->setParameter('materiel', $materiel->getId())
    ->getQuery()
    ->getOneOrNullResult();



    if (!$existingWishlistItem) {
        // Ajouter à la wishlist
        $wishlist = new Wishlistmateriaux();
        $wishlist->setUser($user);  // Associer l'utilisateur
        $wishlist->addIdMateriel($materiel);  // Ajouter le matériel à la wishlist
        $wishlist->setDateAjout(new \DateTime());  // Ajouter la date

        $em->persist($wishlist);
        $em->flush();

        $this->addFlash('success', 'Produit ajouté à votre wishlist.');
    } else {
        $this->addFlash('info', 'Ce produit est déjà dans votre wishlist.');
    }

    return $this->redirectToRoute('app_wishlistmateriaux');
}
}
