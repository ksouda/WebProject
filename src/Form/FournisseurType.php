<?php

namespace App\Form;

use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FournisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom_fournisseur', TextType::class, [
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le nom du fournisseur est obligatoire.']),
                new Assert\Length([
                    'max' => '10',
                    'maxMessage' => 'Le nom du fournisseur ne doit pas dépasser 10 caractères.'
                ]),
            ],
        ])
        ->add('adresse', TextType::class, [
            'constraints' => [
                new Assert\NotBlank(['message' => 'L\'adresse est obligatoire.']),
                new Assert\Regex([
                    'pattern' => '/^[^\d]+$/',
                    'message' => 'L\'adresse ne doit pas contenir de chiffres.'
                ]),
            ],
        ])
        ->add('contact', TextType::class, [
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le contact est obligatoire.']),
                new Assert\Regex([
                    'pattern' => '/^\d{8}$/',
                    'message' => 'Le contact doit être un numéro de téléphone valide de exactement 8 chiffres.'
                ]),
            ],
        ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fournisseur::class,
        ]);
    }
}
