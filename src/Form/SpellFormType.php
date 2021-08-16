<?php

namespace App\Form;

use App\Entity\Spell;
use App\Entity\Tag;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpellFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tradition',ChoiceType::class, [
                'choices' => [
                    'AIR' => 'AIR',
                    'ALCHEMY' => 'ALCHEMY',
                    'ALTERATION' => 'ALTERATION',
                    'ARCANA' => 'ARCANA',
                    'BATTLE' => 'BATTLE',
                    'CELESTIAL' => 'CELESTIAL',
                    'CHAOS' => 'CHAOS',
                    'CONJURATION' => 'CONJURATION',
                    'CURSE' => 'CURSE',
                    'DEATH' => 'DEATH',
                    'DEMONOLOGY' => 'DEMONOLOGY',
                    'DESTRUCTION' => 'DESTRUCTION',
                    'DIVINIATION' => 'DIVINIATION',
                    'EARTH' => 'EARTH',
                    'ENCHANTMENT' => 'ENCHANTMENT',
                    'FEY' => 'FEY',
                    'FIRE' => 'FIRE',
                    'FORBIDDEN' => 'FORBIDDEN',
                    'ILLUSION' => 'ILLUSION',
                    'INVOCATION' => 'INVOCATION',
                    'LIFE' => 'LIFE',
                    'MADNESS' => 'MADNESS',
                    'METAL' => 'METAL',
                    'NATURE' => 'NATURE',
                    'NECROMANCY' => 'NECROMANCY',
                    'ORDER' => 'ORDER',
                    'PRIMAL' => 'PRIMAL',
                    'PROTECTION' => 'PROTECTION',
                    'RUNE' => 'RUNE',
                    'SHADOW' => 'SHADOW',
                    'SONG' => 'SONG',
                    'SOUL' => 'SOUL',
                    'SPIRITUALISM' => 'SPIRITUALISM',
                    'STORM' => 'STORM',
                    'TECHNOMANCY' => 'TECHNOMANCY',
                    'TELEKINESIS' => 'TELEKINESIS',
                    'TELEPATHY' => 'TELEPATHY',
                    'TELEPORTATION' => 'TELEPORTATION',
                    'THEURGY' => 'THEURGY',
                    'TIME' => 'TIME',
                    'TRANSFORMATION' => 'TRANSFORMATION',
                    'WATER' => 'WATER'
                ],
            ])
            ->add('rank', ChoiceType::class, [
                'choices' => [
                    0=>0,
                    1=>1,
                    2=>2,
                    3=>3,
                    4=>4,
                    5=>5,
                    6=>6,
                    7=>7,
                    8=>8,
                    9=>9,
                    10=>10
                ],
            ])
            ->add('name', TextType::class)
            ->add('label', ChoiceType::class, [
                'choices' => [
                    "ATTACK" => "ATTACK",
                    "UTILITY" => "UTILITY"
                ],
            ])
            ->add('area', TextType::class, [
                'required' => false,
            ])
            ->add('duration', TextType::class, [
                'required' => false,
            ])
            ->add('target', TextType::class, [
                'required' => false,
            ])
            ->add('requirement', TextType::class, [
                'required' => false,
            ])
            ->add('damage', TextType::class, [
                'required' => false,
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
            ])
            ->add('twentyPlus', TextareaType::class, [
                'required' => false,
            ])
            ->add('triggered', TextareaType::class, [
                'required' => false,
            ])
            ->add('sacrifice', TextareaType::class, [
                'required' => false,
            ])
            ->add('aftereffect', TextareaType::class, [
                'required' => false,
            ])
            ->add('permanance', TextareaType::class, [
                'required' => false,
            ])
            ->add('tags',  EntityType::class, [
                'class' => Tag::class,
                'choice_label' => 'short',
                'expanded'=>true,
                'multiple'=>true,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('t')
                        ->orderBy('t.short', 'ASC');
                },
            ])
            ->add('Validate', SubmitType::class)
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Spell::class,
        ]);
    }
}
