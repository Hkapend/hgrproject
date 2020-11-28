<?php

namespace App\Controller;

use App\Entity\Materiels;
use App\Entity\PvReception;
use App\Form\MaterielsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UpdateController extends AbstractController
{

    /**
     * @Route("/mariels/{id}", name="materiels_edit")
     * @param Materiels|null $_materiels
     * @param Request $_request
     * @param EntityManagerInterface $_manager
     * @return Response
     */
    public function materiels(Materiels $_materiels = null, Request $_request, EntityManagerInterface $_manager)
    {
        if(!$_materiels)
        {
            $_materiels = new Materiels();
        }
        $_affichemoi = $this->getDoctrine()->getRepository(Materiels::class)->findAll();
        $_formMateriels = $this->createForm(MaterielsType::class, $_materiels);
        $_formMateriels->handleRequest($_request);
        if($_formMateriels->isSubmitted() && $_formMateriels->isValid())
        {
            $_manager->persist($_materiels);
            $_manager->flush();
            return $this->redirectToRoute('materiels');
        }
        return $this->render('logistique/materiels_edit.html.twig',[
            'page_name' => 'Materiels',
            'form' => $_formMateriels->createView(),
            'Affiche' => $_affichemoi,
            'editmat' =>$_materiels->getId()!==null,
        ]);
    }


    /**
     * @Route("/proces/{id}" , name="proces_edit")
     * @param PvReception $_proces
     * @param Request $_request
     * @param EntityManagerInterface $_manager
     * @return RedirectResponse|Response
     */
    public  function editProces(PvReception $_proces, Request $_request, EntityManagerInterface $_manager)
    {
        $_form = $this->createForm(ProcesType::class,$_proces);
        $_form->handleRequest($_request);
        if ($_form->isSubmitted() && $_form->isValid())
        {
            $_manager->persist($_proces);
            $_manager->flush();
            return $this->redirectToRoute('afficheProces');
        }
        return  $this->render('logistique/proces.html.twig',[
            'page_name' => 'pv de réception',
            'form_pv'=>$_form,
            'editPv'=>$_proces->getId() !== null
        ]);
    }
}
