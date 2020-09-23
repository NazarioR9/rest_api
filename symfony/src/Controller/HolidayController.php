<?php 

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use App\Events\HolidayAdded;
use App\Entity\Holiday;

class HolidayController extends AbstractController
{
	/**
	 *  @Route("/api/hr", methods={"GET"}, name="show_all_holidays")
	 *  @Route("/api/employee/{eid}", methods={"GET"}, name="show_holiday")
	 */
	public function show(int $eid=-1): Response
	{
		$repo = $this->getDoctrine()->getRepository(Holiday::class);

		if ($eid == -1) {
			$this->denyAccessUnlessGranted('ROLE_HR');
			$holidays = $repo->findAll();
		} else {
			$holidays = $repo->findBy(["eid" => $eid], ["id" => "ASC"]);
		}
		

		$arr = array();
		foreach ($holidays as $holiday) {
			$arr[] = $holiday->to_array();
		}

		$response = new JsonResponse($arr);
		$response->setEncodingOptions($response->getEncodingOptions() | JSON_PRETTY_PRINT);
		return $response;
	}

	/**
	 *  @Route("/api/employee/{eid}/holiday", methods={"POST"}, name="add_holiday")
	 */
	public function add(int $eid, Request $request): Response
	{
		$holiday = new Holiday();
		$holiday->setStartDate(\DateTime::createFromFormat("Y-m-d"));
		$holiday->setEndDate(\DateTime::createFromFormat("Y-m-d"));

		$manager = $this->getDoctrine()->getManager();
		$manager->persist($holiday);
		$manager->flush();

		return new JsonResponse(["Status" => "Holiday added"]);
	}

	/**
	 * 	
	 *  @Route("/api/employee/{eid}/holiday/{id}", methods={"DELETE"}, name="delete_holiday")
	 */
	public function delete(int $eid, int $id): Response
	{
		$manager = $this->getDoctrine()->getManager();
		$holiday = $manager->getRepository(Holiday::class)->findOneBy(["eid" => $eid, "id" => $id]);
		$manager->delete($holiday);
		$manager->flush();
		
		return new JsonResponse(["Status" => "Holiday ".$id." deleted"]);
	}


	/**
	 *  @IsGranted("ROLE_HR")
	 *  @Route("/api/hr/{eid}/holiday/{id}", methods={"PUT"}, name="validate_holiday")
	 */
	public function validate(int $eid, int $id, Request $request):Response
	{
		$manager = $this->getDoctrine()->getManager();

		$holiday = $manager->getRepository(Holiday::class)->findOneBy(["eid" => $eid, "id" => $id]);
		$holiday->setApprooved($request->get('appr'));
		
		$manager->flush();

		return new JsonResponse(["Status" => "Holiday updated by a HR"]);
	}

}