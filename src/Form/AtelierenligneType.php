<?php

namespace App\Form;

use App\Entity\Atelierenligne;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class AtelierenligneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le titre est obligatoire.']),
                    new Assert\Length(['max' => 255, 'maxMessage' => 'Le titre ne peut pas dépasser 255 caractères.']),
                ],
            ])
            ->add('categorie', ChoiceType::class, [
                'choices' => [
                    'Poterie' => 'poterie',
                    'Peinture' => 'peinture',
                    'Broderie' => 'broderie',
                    'Tricot' => 'tricot',
                    'Couture' => 'couture',
                    'Bijoux faits main' => 'bijoux',
                ],
                'placeholder' => 'Choisissez une catégorie',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La catégorie est obligatoire.']),
                ],
            ])
            ->add('description', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La description est obligatoire.']),
                    new Assert\Length(['min' => 10, 'minMessage' => 'La description doit contenir au moins 10 caractères.']),
                ],
            ])
            ->add('niveau_diff', ChoiceType::class, [
                'choices' => [
                    'Débutant' => 'débutant',
                    'Intermédiaire' => 'intermédiaire',
                    'Avancé' => 'avancé',
                ],
                'placeholder' => 'Choisissez un niveau de difficulté',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le niveau de difficulté est obligatoire.']),
                ],
            ])
            ->add('prix', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le prix est obligatoire.']),
                    new Assert\Positive(['message' => 'Le prix doit être un nombre positif.']),
                ],
            ])
            ->add('datecours', null, [
                'widget' => 'single_text',
                'constraints' => [
                new Assert\NotBlank(['message' => 'La date du cours est obligatoire.']),
                new Assert\GreaterThan([
                    'value' => 'today',
                    'message' => 'La date doit être supérieure à aujourd\'hui.',
                ]),
            ],
            ])
            ->add('duree', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La durée est obligatoire.']),
                    new Assert\Type([
                        'type' => 'numeric', // Permet à la fois les entiers et les décimaux
                        'message' => 'La durée doit être un nombre valide.',
                    ]),
                    new Assert\Positive(['message' => 'La durée doit être un nombre positif.']),
                ],
                
            ])
            ->add('lien', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le lien est obligatoire.']),
                    new Assert\Url([
                        'message' => 'Veuillez entrer un lien valide (ex: https://meet.google.com/xxx).',
                    ]),
                ],
                'attr' => [
                    'placeholder' => 'https://meet.google.com/xxx', // Indication pour l'utilisateur
                ]
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Atelierenligne::class,
        ]);
    }
}
