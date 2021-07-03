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
    public function createSpell(Request $request): Response
    {
        $spell = new Spell();

        $form = $this->createForm(SpellFormType::class, $spell);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $spell = $form->getData();


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($spell);
            $entityManager->flush();

        }

        return $this->render('form/spell.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/tags', name: 'getTags', methods: ['GET'])]
    public function getTags(Request $request): Response
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

        $tags = $this->getDoctrine()
        ->getRepository(Tag::class)
        ->findAll();

        return $this->render('form/tag.html.twig', [
            'form' => $form->createView(),
            'tags' => $tags,
        ]);
    }

    #[Route('/tags', name: 'createTag', methods: ['POST'])]
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

        return $this->redirectToRoute('getTags');
    }

    #[Route('/tags/delete/{id}', name: 'deleteTag')]
    public function deleteTag(int $id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $tag = $entityManager->getRepository(Tag::class)->find($id);

        $entityManager->remove($tag);
        $entityManager->flush();    

        return $this->redirectToRoute('getTags');
    }
}
