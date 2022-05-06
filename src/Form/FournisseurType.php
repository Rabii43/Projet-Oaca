<?php

namespace App\Form;

use App\Entity\Fournisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FournisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('societe')
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('add_msg')
            ->add('tel_prof')
            ->add('tel_per')
            ->add('tel_mobil')
            ->add('num_telecopier')
            ->add('page_web')
            ->add('ville')
            ->add('pays_region')
            ->add('code_postal')
            ->add('remarque')
            ->add('fournisseur_user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fournisseur::class,
        ]);
    }
}
