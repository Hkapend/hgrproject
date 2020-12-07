<?php

namespace App\Controller;

use App\Entity\Fournisseur;
use App\Entity\Materiels;
use App\Entity\PvReception;
use App\Form\FournisseurType;
use App\Form\MaterielsType;
use App\Form\ProcesType;
use App\Repository\FournisseurRepository;
use App\Repository\PvReceptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LogistiqueController extends AbstractController
{
    /**
     * @Route("/logistique", name="logistique")
     */
    public function index()
    {
        return $this->render('logistique/index.html.twig', [
            'page_name' => 'Logistique',
        ]);
    }

    /**
     * @Route("/fournisseur", name="fournisseurs")
     * @Route("/fournisseur/{id}", name="fournisseurs_edit")
     * @param Fournisseur|null $_fournisseur
     * @param Request $_request
     * @param EntityManagerInterface $_manager
     * @return Response
     */
    public function fournisseurs(Fournisseur $_fournisseur = null, Request $_request , EntityManagerInterface $_manager)
    {
        if(!$_fournisseur)
        {
            $_fournisseur = new Fournisseur();
        }
        $_form = $this->createForm(FournisseurType::class, $_fournisseur);
        $_form->handleRequest($_request);
        if ($_form->isSubmitted() && $_form->isValid())
        {
            $_manager->persist($_fournisseur);
            $_manager->flush();
            unset($_form, $_fournisseur);
            $_fournisseur = new Fournisseur();
            $_form = $this->createForm(FournisseurType::class, $_fournisseur);
        }
        $_afficher = $this->getDoctrine()->getRepository(Fournisseur::class)->findAll();
        return $this->render('logistique/fournisseurs.html.twig',[
            'page_name' => 'Gestion des fournisseurs',
            'fournisseur'=>$_form->createView(),
            'afficher'=>$_afficher,
            'editfour' =>$_fournisseur->getId()!==null,
        ]);
    }

    /**
     * @Route("/materiels", name="materiels")
     * @param Request $_request
     * @param EntityManagerInterface $_manager
     * @return Response
     */
    public function materiels(Request $_request, EntityManagerInterface $_manager)
    {
        $_materiels = new Materiels();
        $_affichemoi = $this->getDoctrine()->getRepository(Materiels::class)->findAll();
        $_formMateriels = $this->createForm(MaterielsType::class, $_materiels);
        $_formMateriels->handleRequest($_request);
        if($_formMateriels->isSubmitted() && $_formMateriels->isValid())
        {
            $_manager->persist($_materiels);
            $_manager->flush();
            unset($_materiels, $_formMateriels);
            $_materiels = new Materiels();
            $_formMateriels = $this->createForm(MaterielsType::class, $_materiels);
        }
        return $this->render('logistique/materiels.html.twig',[
           'page_name' => 'Materiels',
            'form' => $_formMateriels->createView(),
            'Affiche' => $_affichemoi,
            'editmat' =>$_materiels->getId()!==null,
        ]);
    }


    /**
     * @Route("/proces/affiche", name="afficheProces")
     * @return RedirectResponse|Response
     */
    public function affichePV()
    {
        $_repo = $this->getDoctrine()->getRepository(PvReception::class)->findnumpv();
        return $this->render('logistique/afficheProces.html.twig',[
            'page_name' => 'pv de réception',
           'affichePV'=>$_repo
        ]);
    }


    public function detail_PV(Request $_request)
    {

        $_valeur = $this->getDoctrine()->getRepository(PvReception::class)->findnumpv();
        $_verif = $_valeur[1]['valeur'];
        $_val = $_request->get('_route_params');
        $_repo = $this->getDoctrine()->getRepository(PvReception::class)->find_detail($_val['valeur']);
        $_numero_pv = $_repo[0]['numpv'];
        $_date = $_repo[0]['created_at'];
        dump($_repo, $_numero_pv);
        //$_fourbymater = $this->getDoctrine()->getRepository(PvReception::class)->findBy(array(distinct=>true));
        $_fourbymater = $this->getDoctrine()->getRepository(PvReception::class)->findAll();

        return $this->render('logistique/detail_pv.html.twig',[
            'page_name' => 'pv de réception',
            'affichePV'=>$_repo,
            'affiche_num'=>$_numero_pv,
            'affiche_date'=>$_date,
            'fournisseurs'=>$_fourbymater
        ]);
    }

    /**
     * @Route("/stock", name="stock")
     **/
    public function stock()
    {
        return $this->render('logistique/storage.html.twig',[
            'page_name' => 'stockage',
        ]);
    }
    /**
     * @Route("/globale", name="globale")
     **/
    public function requisition_globale()
    {
        return $this->render('logistique/requiglobale.html.twig',[
            'page_name' => 'Globale requisition',
        ]);
    }
    /**
     * @Route("/partielle", name="partielle")
     **/
    public function requisition_partielle()
    {
        return $this->render('logistique/requipartielle.html.twig',[
            'page_name' => 'Etat de besoin',
        ]);
    }
    /**
     * @Route("/affectation", name="affectation")
     **/
    public function affectation_materiels()
    {
        return $this->render('logistique/affectation.html.twig',[
            'page_name' => 'Affecter materiels',
        ]);
    }

    /**
     * @Route("/inventaire_global", name="inventaire_global")
     **/
    public function inventaire_global()
    {
        return $this->render('logistique/inventaire_global.html.twig',[
            'page_name' => 'Global Inventaire',
        ]);
    }
    /**
     * @Route("inventaire_partiel", name="inventaire_partiel")
     **/
    public function inventaire_partiel()
    {
        return $this->render('logistique/inventaire_partiel.html.twig',[
            'page_name' => 'Inventaire partiel',
        ]);
    }
}
