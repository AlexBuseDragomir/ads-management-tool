<?php

namespace App\Form;

use App\Entity\Announcement;
use App\Entity\User;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormTemplate extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user', EntityType::class, array(
                'class' => User::class, 'choice_label' => 'email', 'disabled' => true
            ))
            ->add('title', TextType::class)
            ->add('description', TextareaType::class)
            ->add('price', NumberType::class)
            ->add('start_date', DateType::class, array('disabled' => true))
            ->add('expiry_date', DateType::class)
            ->add('category', EntityType::class,
                array('class' => Category::class, 'choice_label' => 'name'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Announcement::class,
        ));
    }
}
