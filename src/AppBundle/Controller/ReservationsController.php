<?php
// src/AppBundle/Controller/ReservationsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Reservation;
use AppBundle\Entity\Client;
use AppBundle\Entity\Room;

class ReservationsController extends Controller
{
    
    /**
    * @Route("/reservations", name="reservations")
    **/
    public function showIndex()
    {

        return $this->render("reservations/index.html.twig");
        
    }

    /**
    * @Route("/reservation/{id_client}", name="booking")
    **/
    public function book(Request $request, $id_client)
    {
        $data = [];
    	$data['id_client'] = $id_client;
   	 
   	 
    	$data['rooms'] = null;
    	$data['dates']['from'] = '';
    	$data['dates']['to'] = '';
    	$form = $this   ->createFormBuilder()
                    	->add('dateFrom')
                    	->add('dateTo')
                    	->getForm();
   	 
    	$form->handleRequest($request);

    	if ($form->isSubmitted()) {
        	$form_data = $form->getData();

        	$data['dates']['from'] = $form_data['dateFrom'];
        	$data['dates']['to'] = $form_data['dateTo'];

        	$em = $this->getDoctrine()->getManager();
        	$rooms = $em->getRepository('AppBundle:Room')
            	->getAvailableRooms($form_data['dateFrom'], $form_data['dateTo']);   

        	$data['rooms'] = $rooms;

    	}
   	 
    	$client = $this
                    	->getDoctrine()
                    	->getRepository('AppBundle:Client')
                    	->find($id_client);

   	 

   	 
    	$data['client'] = $client;

    	return $this->render("reservations/book.html.twig", $data);
    }

    /**
 	* @Route("/book_room/{id_client}/{id_room}/{date_in}/{date_out}", name="book_room")
 	**/
	public function bookRoom($id_client, $id_room, $date_in, $date_out)
	{
	
        $reservation = new Reservation();
		$date_start = new \DateTime( $date_in );
		$date_end = new \DateTime($date_out);
		$reservation->setDateIn( $date_start );
		$reservation->setDateOut( $date_end );

		$client = $this
					->getDoctrine()
					->getRepository('AppBundle:Client')
					->find($id_client);
		$room = $this
					->getDoctrine()
					->getRepository('AppBundle:Room')
					->find($id_room);

		$em = $this->getDoctrine()
				->getManager();

		$reservation->setClient( $client );
		$reservation->setRoom($room);

		$em->persist($reservation);
		$em->flush();

		//$data['debug']['client'] = $client;
		//return $this->render('debug.html.twig', $data);

		return $this->redirectToRoute('index_clients');

    }

    

}