<?php
namespace App\Form;

use App\Entity\Calendar;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalendarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('start', DateTimeType::class, [
                'label' => 'Date de début',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('end', DateTimeType::class, [
                'label' => 'Date de fin',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('all_day', CheckboxType::class, [
                'label' => 'Toute la journée',
                'required' => false,
                'attr' => ['class' => 'form-check-input'],
            ])
            ->add('background_color', ColorType::class, [
                'label' => 'Couleur de fond',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('border_color', ColorType::class, [
                'label' => 'Couleur de la bordure',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('text_color', ColorType::class, [
                'label' => 'Couleur du texte',
                'attr' => ['class' => 'form-control'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Calendar::class,
        ]);
    }
}
