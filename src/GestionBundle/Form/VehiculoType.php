<?php
namespace GestionBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class VehiculoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('propietario','entity',array('class'=>'GestionBundle:Propietario',
                'query_builder' => function(EntityRepository $er){
                    return $er->createQueryBuilder('p')
                        ->where('p.isActive = :propietario')
                        ->setParameter('propietario','1')
                        ->orderBy('p.id','ASC');
                },
                'choice_label' => 'getFullName'
            ))
            ->add('tipo','choice',array('choices'=>array('Automovil'=>'Automovil',
                'Motocicleta'=>'Motocicleta')))
            ->add('marca')
            ->add('modelo')
            ->add('placa')
            ->add('color')
            ->add('save','submit',array('label'=> 'crear vehiculo'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestionBundle\Entity\Vehiculos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestionbundle_gestion';
    }



}