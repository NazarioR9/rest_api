<?php 

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends AbstractController{
	
	/**
	 *  @IsGranted("ROLE_USER")
	 *  @Route("/api/home", methods={"GET"}, name="app_homepage")
	 */
	public function home(){

		$user = $this->getUser();

		$response = new JsonResponse($user->getRoles());
		$response->setEncodingOptions($response->getEncodingOptions() | JSON_PRETTY_PRINT);
		return $response;
	}

}

?>