<?php

namespace App\Form;

use App\Entity\Date;
use App\Entity\Employee;
use App\Entity\Tache;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EntryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libDate', DateType::class, ["format"=>"dd-MM-y", "label"=>"Date", "required"=>true])
            ->add('employee', EntityType::class, ["class"=>Employee::class, "label"=>"Par"])
            ->add('tache', EntityType::class, ["class"=>Tache::class, "multiple"=>false, "required"=>true, "attr"=>["class"=>"select2"]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Date::class,
        ]);
    }
}
