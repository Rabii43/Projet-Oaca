<?php

namespace App\Form;

use App\Entity\Marche;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MarcheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('MN')
            ->add('annee')
            ->add('nAO')
            ->add('date_CME')
            ->add('date_CA')
            ->add('date_NPV')
            ->add('date_CPV')
            ->add('date_CDF')
            ->add('objet')
            ->add('nt_devise')
            ->add('nt_dt')
            ->add('min_max_mt')
            ->add('n_ord_SV')
            ->add('date_acc')
            ->add('date_LC')
            ->add('delair')
            ->add('dellai_achev')
            ->add('date_ord_SV')
            ->add('observation')
            ->add('date')
            ->add('garentie')
            ->add('date_recp_DF')
            ->add('nReg_DF')
            ->add('date_dot')
            ->add('titre')
            ->add('date_AL_PV')
            ->add('date_fax_CDF')
            ->add('dtSUPDF1')
            ->add('dtSupDB1')
            ->add('dtSupDF2')
            ->add('dtSupDB2')
            ->add('dtSupDF3')
            ->add('dtSupDB3')
            ->add('dtSupDF')
            ->add('dtSupDB4')
            ->add('dtSupDF5')
            ->add('dtSupDB5')
            ->add('NBTSup')
            ->add('situation')
            ->add('direct')
            ->add('fournisseur')
            ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Marche::class,
        ]);
    }
}
