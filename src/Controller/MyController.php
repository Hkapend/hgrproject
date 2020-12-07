<?php

namespace App\Controller;

use App\Entity\Materiels;
use App\Entity\PvReception;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    /**
     * @Route("/my", name="my")
     */
    public function index()
    {
        return $this->render('my/index.html.twig', [
            'controller_name' => 'MyController',
        ]);
    }
    /**
     * @Route("/proces_crud", name="crud")
     * @param EntityManagerInterface $_manager
     * @return RedirectResponse|Response
     */
    public function add_update(EntityManagerInterface $_manager)
    {
        $_number = count($_POST["description"]);

        $_proces = new PvReception();
        if ($_number > 1)
        {
            for ($_i = 0; $_i < $_number; $_i++)
            {
                if (trim($_POST["description"][$_i]) != '' && trim($_POST["marque"][$_i]) != '' && trim($_POST["observation"][$_i]) != '' && trim($_POST["demande"][$_i]) != '' && trim($_POST["recu"][$_i]) != ''&& trim($_POST["date"][$_i]) != '')
                {
                    $_date = \DateTime::createFromFormat('Y-m-d', $_POST["date"][$_i]);
                    $_foreign = $this->getDoctrine()->getRepository(Materiels::class)->find($_POST["description"][$_i]);
                    $_proces->setCreatedAt($_date)
                        ->setDescription($_foreign)->setMarque($_POST["marque"][$_i])->setObservation($_POST["observation"][$_i])
                        ->setQteDemande($_POST["demande"][$_i])->setQteRecu($_POST["recu"][$_i]);
                    $_manager->persist($_proces);
                    $_manager->flush();
                    return $this->redirectToRoute('afficheProces');
                }
            }
        }
        $_afficheMateriels = $this->getDoctrine()->getRepository(Materiels::class)->findAll();
        return $this->render('logistique/test.html.twig',[
            'page_name' => 'pv de réception',
            'affiche'=>$_afficheMateriels,
            'editPv'=>$_proces->getId() !== null
        ]);
    }
}
