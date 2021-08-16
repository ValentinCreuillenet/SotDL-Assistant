<?php

namespace App\Controller;

use App\Form\SpellFormType;
use App\Form\SpellSearchFormType;
use App\Form\TagFormType;
use App\Entity\Spell;
use App\Entity\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SpellController extends AbstractController
{

    /**
     * Shows the list of all the spells curently in the Database
     */
    #[Route('/spells', name: 'showSpells')]
    public function showSpells(Request $request): Response
    {

        $spells = $this->getDoctrine()
        ->getRepository(Spell::class)
        ->findBy([], ['rank' => 'ASC']);


        return $this->render('spells/spelllist.html.twig', [
            "spells" => $spells
        ]);

    }


    /**
     * Show a form the user can fill to create a spell, on a POST request we save the spell in the database
     */
    #[Route('/spells/create', name: 'createSpell')]
    public function createSpell(Request $request): Response
    {
        $spell = new Spell();

        $form = $this->createForm(SpellFormType::class, $spell);

        $form->handleRequest($request);

        //If it's a POST request we create aspell form the form and persist it
        if ($form->isSubmitted() && $form->isValid())$this->persistSpell($form);

        return $this->render('form/spell.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Deletes the spell with id given from the database then redirects to the list of spells
     */
    #[Route('/spells/{id}/delete', name: 'deleteSpell')]
    public function deleteSpell(int $id){
        $entityManager = $this->getDoctrine()->getManager();
        $spell = $entityManager->getRepository(Spell::class)->find($id);

        $entityManager->remove($spell);
        $entityManager->flush();    

        return $this->redirectToRoute('showSpells');
    }

    /**
     * Loads a form with data from a spell, on a POST request updates the spell with the new info from the form
     */
    #[Route('/spells/{id}/edit', name: 'editSpell')]
    public function editSpell(Request $request, int $id){

        $entityManager = $this->getDoctrine()->getManager();
        $spell = $entityManager->getRepository(Spell::class)->find($id);

        $form = $this->createForm(SpellFormType::class, $spell);

        $form->handleRequest($request);

        //On a POST request we update the spell
        if ($form->isSubmitted() && $form->isValid())$this->persistSpell($form);

        return $this->render('form/spell.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Shows a form to filter spell to make a search
    */
    #[Route('/spells/search', name: 'searchSpell', methods: ['GET'])]
    public function searchSpell(Request $request){

        $form = $this->createForm(SpellSearchFormType::class);


        return $this->render('form/spell.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * Shows a list of spell that fits the filters from the form
     */
    #[Route('/spells/search', name: 'showSearchSpell', methods: ['POST'])]
    public function showSearchResults(Request $request){
        $form = $this->createForm(SpellSearchFormType::class);
        $form->handleRequest($request);
        $spells = $this->getFilteredSpells($form->getData());
        $spells = $this->filterTags($spells,$form->getData()["tags"]);

        return $this->render('spells/spelllist.html.twig', [
            "spells" => $spells
        ]);
    }

    /**
     * Creates a spell from a form and saves it in the DB
     */
    private function persistSpell($form){

        $entityManager = $this->getDoctrine()->getManager();
        $spell = $form->getData();
        $entityManager->persist($spell);
        $entityManager->flush();

    }
    
    /**
     * Returns a list of spells that have been filtered by
     */
    private function getFilteredSpells($filters){
        
        $qb = $this->getDoctrine()->getManager()->createQueryBuilder();
        $qb->select('s')
            ->from('App\Entity\Spell', 's');

        foreach($filters as $key => $values){
            $query = "";
            if(is_array($values) && count($values)>0){
                    foreach($values as $id => $value){

                        if($id != 0) $query.=' OR ';
                        $query.='s.'.$key.' LIKE '."'%".$value."%'";

                    }
            $qb->andWhere($query);    
            }
        }
        return $qb->getQuery()->getResult();
    }

    /**
     * Filters a list a spells with a list of tags so that only
     * the spells that have all the tag remains
     */
    private function filterTags($spells,$tags){

        $newArr = [];

        foreach ($spells as $spell) {
            $spellTags = $spell->getTags()->getValues();
            $isValid = true;

            foreach ($tags as $tag){
                if(!in_array($tag,$spellTags))$isValid=false;
            }

            if($isValid)array_push($newArr,$spell);
        }

        return $newArr;
    }

}
