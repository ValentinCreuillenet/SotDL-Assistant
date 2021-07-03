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

class FormController extends AbstractController
{
    #[Route('/spells/create', name: 'createSpell')]
    public function createSpell(): Response
    {
        $spell = new Spell();

        $form = $this->createForm(SpellFormType::class, $spell);

        return $this->render('form/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/tags/create', name: 'createTag')]
    public function createTag(Request $request): Response
    {
        $tag = new Tag();

        $form = $this->createForm(TagFormType::class, $tag);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $tag = $form->getData();


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tag);
            $entityManager->flush();

        }

        return $this->render('form/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
