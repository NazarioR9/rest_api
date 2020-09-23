<?php 

namespace App\Controller;

use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeController extends AbstractController
{
	/**
	 *  @IsGranted("ROLE_USER")
	 *  @Route("/api/home", methods={"GET"}, name="app_homepage")
	 */
	public function home(): Response
	{
		$user = $this->getUser();

		if ($this->isGranted("ROLE_HR")) {
			return new RedirectResponse($this->generateUrl('show_all_holidays'));
		}

		return new RedirectResponse($this->generateUrl('show_holiday', ['eid' => $user->getId()]));
	}

}
