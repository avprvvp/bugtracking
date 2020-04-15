<?php

namespace App\Controller;

use App\Entity\Ticket;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


class StuffController extends AbstractController
{
/**
 * @IsGranted("ROLE_USER")
 * @Route("/stuff", name="my_stuff")
 */
    public function show()
    {
        $user = $this->getUser()->getId();

        $repository = $this->getDoctrine()->getRepository(Ticket::class);
        $tickets = $repository->getMyTasks($user);
        
        return $this->render('stuff.html.twig', [
            'tickets' => $tickets
        ]);
    }
}
