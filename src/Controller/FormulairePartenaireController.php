<?php

namespace App\Controller;


use App\Entity\Pin;
use App\Repository\PinRepository;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Messenger\DoctrinePingConnectionMiddleware;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulairePartenaireController extends AbstractController
{
    #[Route('/partenaire', name: 'app_formulaire_partenaire')]
    public function index(): Response
    {
        return $this->render('formulaire_partenaire/index.html.twig', [
            'controller_name' => 'FormulairePartenaireController',
        ]);
    }

    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createFormBuilder()
            ->add('Nom du Partenaire', TextType::class)
            ->add('Secteur', TextType::class)
            ->add('Date darriver', DateType::class)
            ->add('Ajouter', SubmitType::class)
            ->getForm()
        ;
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();
            $partenaire = new Pin;
            $partenaire->setTitle($data['Nom du partenaire']);
            $partenaire->setTitle($data['Secteur']);
            $em->persist($partenaire);
            $em->flush();

            return $this->redirectToRoute('accueil');

        }
        return $this->render('accueil/partenaire.html.twig', [
            'monFormulaire' => $form->createView()
        ]);
    }
}
