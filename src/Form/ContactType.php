<?php

namespace App\Form;

use App\DTO\ContactDTO;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, ['required' => true])
            ->add('prenom', TextType::class, ['required' => true])
            ->add('telephone', TextType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new Regex([
                        'pattern' => '/^\+?[0-9\s-]+$/',
                        'message' => 'Veuillez entrer un numéro de téléphone valide.',
                    ]),
                ],
            ])
            ->add('email', TextType::class, [
                'required' => true,
                'constraints' => [
                    new Email([
                        'message' => 'Veuillez entrer une adresse email valide.',
                    ]),
                ],
            ])
            ->add('message', TextareaType::class,  ['required'=> true])  
            ->add('submit', SubmitType::class, ['label'=>'Envoyer'])
        ;
        $builder->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'preSubmit']);
    }
    public function preSubmit(FormEvent $event) 
    {
        $contact = $event->getData();
        $event->setData($contact);

    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContactDTO::class,
        ]);
    }
}
