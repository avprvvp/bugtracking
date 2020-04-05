<?php

namespace App\Form;

use App\Entity\Ticket;
use App\Entity\Tag;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('name')
            ->add('type', ChoiceType::class, [
                'choices' => [
                        'Task' => 'task',
                        'Bug' => 'bug',
                ],
                'expanded' => true,
                'multiple' => false
            ])
            ->add('status', ChoiceType::class, [
                'choices' => [
                        'New' => 'new',
                        'In progress' => 'in progress',
                        'Testing' => 'testing',
                        'Done' => 'done',
                ],
                'expanded' => true,
                'multiple' => false
            ])
            ->add('description')
            ->add('assign', EntityType::class, [ 
                'class' => User::class,
                'choice_label' => 'name',

            ])
            ->add('tags', TextType::class, ['mapped'=>false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }
}
