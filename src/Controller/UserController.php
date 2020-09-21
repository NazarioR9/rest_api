<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;


class UserController extends AbstractController{

	/**
	 *  @Route("/api/user", methods={"POST"}, name="register")
	 */
	public function new(Request $request){
		$content = $request->getContent();

		$user = new User();
		$user->setFirstName($request->get('fname'));
		$user->setLastName($request->get('lname'));
		$user->setEmail($request->get('email'));
		$user->setPassword($request->get('password'));
		$user->setTitle($request->get('title'));


		$manager = $this->getDoctrine()->getManager();
		$manager->persist($user);
		$manager->flush();

		return new JsonResponse(["Status" => "New user created"]);
	}

}

?>