<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
    #[Route('/info_jnm', name: 'app_info_jnm')]
    public function info_jnm(): Response
    {
        return $this->render('accueil/info_jnm.html.twig');

    }
    #[Route('/info_campus', name: 'app_info_campus')]
    public function info_campus(): Response
    {
        return $this->render('accueil/info_campus.html.twig');
    }
    #[Route('/inscription', name: 'app_incrisption')]
    public function inscription(): Response
    {
        return $this->render('accueil/inscription.html.twig');
    }
    #[Route('/connexion', name: 'app_connexion')]
    public function connexion(): Response
    {
        return $this->render('accueil/connexion.html.twig');
    }
    #[Route('/deconnexion', name: 'app_deconnexion')]
    public function deconnexion(): Response
    {
        return $this->render('accueil/deconnexion.html.twig');
    }
    #[Route('/logement', name: 'app_logement')]
    public function logement(): Response
    {
        return $this->render('accueil/logement.html.twig');
    }
    #[Route('/transport', name: 'app_transport')]
    public function transport(): Response
    {
        return $this->render('accueil/transport.html.twig');
    }
    #[Route('/liste_activite', name: 'app_liste_activite')]
    public function liste_activite(): Response
    {
        return $this->render('accueil/liste_activite.html.twig');
    }
    #[Route('/activite', name: 'app_activite')]
    public function activite(): Response
    {
        return $this->render('accueil/activite.html.twig');
    }
    #[Route('/stats', name: 'app_stats')]
    public function stats(): Response
    {
        return $this->render('accueil/stats.html.twig');
    }
    #[Route('/liste_partenaire', name: 'app_liste_partenaire')]
    public function liste_partenaire(): Response
    {
        return $this->render('accueil/liste_partenaire.html.twig');
    }
    #[Route('/new_partenaire', name: 'app_new_partenaire')]
    public function new_partenaire(): Response
    {
        return $this->render('accueil/new_partenaire.html.twig');
    }
    #[Route('/delete_partenaire', name: 'app_delete_partenaire')]
    public function delete_partenaire(): Response
    {
        return $this->render('accueil/delete_partenaire.html.twig');
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('accueil/contact.html.twig');
    }
}
