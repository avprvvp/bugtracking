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
     * @Route("/{id}", methods={"GET"})
     */
    public function show()
    {
        $comments = $this->getDoctrine()
            ->getRepository(Comment::class)
            ->findAll();

        return $this->render('ticket/show.html.twig', [
            'comments' => $comments,
        ]);
    }

    public function new(Request $request): Response
    {

        /**
         * @Route("/{id}", methods={"GET","POST"})
         */

        $ticketId = $request->query->get('id');
        $projectId = $request->query->get('project_id');
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $ticket = $entityManager->getRepository(Ticket::class)->find($ticketId);

            $comment->setProject($ticket);

            $entityManager->persist($ticket);
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('show_project', ['id' => $projectId]);
        }

        return $this->render('ticket/show.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
    }
}
