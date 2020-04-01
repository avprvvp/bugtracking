<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Ticket;
use App\Form\CommentType;
use App\Repository\TicketRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Comment;

/**
* @Route("/ticket")
*/

class CommentController extends AbstractController
{
/**
     * @Route("/{id}/comment", name="create_comment", methods={"GET", "POST"})
     */

    public function new_comment(Request $request, $id): Response
    {
        $comment = new Comment();

        $form1 = $this->createFormBuilder($comment)
            ->add('text', TextType::class)     
            ->add('save', SubmitType::class, ['label' => 'Add'])
            ->getForm();

        $form1->handleRequest($request);

        if ($form1->isSubmitted() && $form1->isValid()) {
            $comment = $form1->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $ticket = $entityManager->getRepository(Ticket::class)->find($id);

            $comment->setTicket($ticket);

            $entityManager->persist($ticket);
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('ticket_show', ['id' => $id]);
        }

        return $this->render('comment/index.html.twig', [
            'form1' => $form1->createView(),
        ]);
    }
}
