<?php

namespace App\Controller;

use App\Entity\Affectation;
use App\Entity\Materiels;
use App\Entity\PvReception;
use App\Entity\Service;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;


class name extends AbstractController
{
    public function reception(PvReception $_proces = null, Request $_request, EntityManagerInterface $_manager)
    {
        if(!$_proces)
        {
            $_proces = new PvReception();
        }
        if(isset($_POST["valider"]))
        {
            $_number = $_POST["description"];
            //for ($_i = 0; $_i < $_number; $_i++)
            $_i = 0;
            foreach ($_number as $_i => $value)
            {
                $_date = \DateTime::createFromFormat('Y-m-d', $_POST["date"]);
                $_foreign = $this->getDoctrine()->getRepository(Materiels::class)->find($_POST["description"][$_i]);
                $_proces->setCreatedAt($_date)->setDescription($_foreign)
                    ->setMarque($_POST["marque"][$_i])->setObservation($_POST["observation"][$_i])
                    ->setNumpv($_POST["numero"])->setQteRecu($_POST["quantite"][$_i])->setValeur($_POST["valeur"]);
                $_manager->persist($_proces);
                $_manager->flush();
                //$_i++;
                unset($_proces);
                $_proces = new PvReception();
            }
            return $this->redirectToRoute('afficheProces');
            dump($_proces);
        }

        $_afficheMateriels = $this->getDoctrine()->getRepository(Materiels::class)->findAll();
        return $this->render('logistique/test/test.html.twig',[
            'page_name' => 'pv de réception',
            'affiche'=>$_afficheMateriels,
            'editPv'=>$_proces->getId() !== null
            ]);
    }


    public function affectation_materiels(Affectation $_affectation = null, Request $_request, EntityManagerInterface $_manager )
    {
        if(!$_affectation)
        {
            $_affectation= new Affectation();
        }
        if(isset($_POST["valider"]))
        {
            $_number = $_POST["description"];
            $_i = 0;
            foreach ($_number as $_i => $value)
            {
                $_date = \DateTime::createFromFormat('Y-m-d', $_POST["date"]);
                $_foreign = $this->getDoctrine()->getRepository(Materiels::class)->find($_POST["description"][$_i]);
                $_foreignServices = $this->getDoctrine()->getRepository(Service::class)->find($_POST["service"]);
                $_affectation->setCreatedAt($_date)->setMateriel($_foreign)
                    ->setService($_foreignServices)->setObservation($_POST["observation"][$_i])
                    ->setNumAffectation($_POST["numero"])->setQte($_POST["quantite"][$_i])->setValeur($_POST["valeur"]);
                $_manager->persist($_affectation);
                $_manager->flush();
                unset($_affectation);
                $_affectation= new Affectation();
            }
            dump($_affectation);
        }
        $_affectation = $this->getDoctrine()->getRepository(Affectation::class)->findnumaffect();
        $_afficheServ = $this->getDoctrine()->getRepository(Service::class)->findAll();
        $_afficheMat = $this->getDoctrine()->getRepository(Materiels::class)->findAll();
        return $this->render('logistique/affectation.html.twig',[
            'page_name' => 'Affecter materiels',
            'afficheAffect' => $_affectation,
            'affiche' => $_afficheMat,
            'selectServices'=>$_afficheServ,
        ]);
    }


}