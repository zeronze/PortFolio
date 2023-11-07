<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'label_attr' => [
                    'style' => 'color: white;', // Texte de l'étiquette en blanc
                ],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'label_attr' => [
                    'style' => 'color: white;', // Texte de l'étiquette en blanc
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Votre adresse mail',
                'label_attr' => [
                    'style' => 'color: white;', // Texte de l'étiquette en blanc
                ],
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Choisir votre type',
                'choices' => [
                    'Entreprise' => 'entreprise',
                    'Particulier' => 'particulier',
                    'Autres' => 'autres',
                ],
                'label_attr' => [
                    'style' => 'color: white;', // Texte de l'étiquette en blanc
                ],
                'attr' => [
                    'class' => 'custom-select', // Ajoutez une classe CSS si nécessaire
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Votre message',
                'label_attr' => [
                    'style' => 'color: white;', // Texte de l'étiquette en blanc
                ],
            ])
            ->add('envoyer', SubmitType::class);

        // Sous-formulaire pour le champ "Autres" (affiché conditionnellement)
        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            $data = $event->getData();

            if ($data['type'] === 'autres') {
                $form->add('autres', TextType::class, [
                    'label' => 'Autres',
                    'label_attr' => [
                        'style' => 'color: white;', // Texte de l'étiquette en blanc
                    ],
                ]);
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
