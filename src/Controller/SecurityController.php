<?php

namespace App\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{

	/**
     * @Route("/api/register", name="app_register")
     */
    public function register(AuthenticationUtils $authenticationUtils)
    {

        $error = $authenticationUtils->getLastAuthenticationError();

        return $this->render('security/register.html.twig', [
            'error' => $error,
            ]
        );
    }


    /**
     * @Route("/api/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {

        $error = $authenticationUtils->getLastAuthenticationError();

        return $this->render('security/login.html.twig', [
            'error' => $error,
            ]
        );
    }

    /**
     * @Route("/api/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \Exception("Guess who's got some Hack' skills :)");
    }
}
