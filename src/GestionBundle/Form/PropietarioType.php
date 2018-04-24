<?php
/**
 * Created by PhpStorm.
 * User: davidjp
 * Date: 29/11/17
 * Time: 10:31 AM
 */

namespace GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PropietarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username')
                ->add('documento')
                ->add('nombres')
                ->add('apellidos')
                ->add('email')
                ->add('password','password',array('required' => false))
                ->add('role','choice',array('choices'=>array('ROLE_ADMIN'=>'Administrador',
                      'ROLE_USER'=>'usuario'),'placeholder'=>'Seleccione un rol'))
                ->add('telefono')
                ->add('is_Active','checkbox',array('label'=>'activo','required' => false))
                ->add('save','submit',array('label'=>'Crear Propietario'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestionBundle\Entity\Propietario'
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