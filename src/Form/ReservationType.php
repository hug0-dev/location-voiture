<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\User;
use App\Entity\Vehicules;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_debut', null, [
                'widget' => 'single_text'
            ])
            ->add('date_fin', null, [
                'widget' => 'single_text'
            ])
            ->add('prix_total')
            ->add('vehicule_reserver', EntityType::class, [
                'class' => Vehicules::class,
'choice_label' => 'marque',
            ])
            ->add('users', EntityType::class, [
                'class' => User::class,
'choice_label' => 'email',
'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
