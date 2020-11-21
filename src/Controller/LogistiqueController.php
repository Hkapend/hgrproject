<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
     * @Route("/materiels", name="materiels")
     **/
    public function materiels()
    {
        return $this->render('logistique/materiels.html.twig',[
           'page_name' => 'Materiels',
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
     * @Route("/proces", name="proces")
     **/
    public function proces()
    {
        return $this->render('logistique/proces.html.twig',[
            'page_name' => 'pv de réception',
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
     * @Route("/fournisseur", name="fournisseurs")
     **/
    public function fournisseurs()
    {
        return $this->render('logistique/fournisseurs.html.twig',[
            'page_name' => 'Gestion des fournisseurs',
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
