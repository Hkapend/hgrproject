<?php

namespace App\Controller;

use App\Entity\Fournisseur;
use App\Entity\Materiels;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface as manager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeleteController extends AbstractController
{
    /**
     * @Route("/delete_fournisseur/{id}", name="fournisseurs_delete")
     * @param Fournisseur $_fournisseur
     * @param manager $manager
     * @return Response
     */
    public function delete_fournisseur(Fournisseur $_fournisseur, manager $manager)
    {
        $manager->remove($_fournisseur);
        $manager->flush();
        return $this->redirectToRoute('fournisseurs');
    }

    /**
     * @Route("/delete_materiel/{id}", name="materiels_delete")
     * @param Materiels $_materiels
     * @param manager $manager
     * @return Response
     */
    public function delete_materiel(Materiels $_materiels, manager $manager)
    {
        $manager->remove($_materiels);
        $manager->flush();
        return $this->redirectToRoute('materiels');
    }
}
