<?php

namespace App\Controller;

use App\Form\SpellFormType;
use App\Form\TagFormType;
use App\Entity\Spell;
use App\Entity\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SpellController extends AbstractController
{
    #[Route('/spells', name: 'showSpells')]
    public function createSpell(Request $request): Response
    {

        $spells = $this->getDoctrine()
        ->getRepository(Spell::class)
        ->findAll();


        return $this->render('spells/spelllist.html.twig', [
            "spells" => $spells
        ]);

    }

}
