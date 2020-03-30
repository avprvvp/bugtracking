<?php

namespace App\Controller;

use App\Entity\Ticket;
use App\Entity\Project;
use App\Form\TicketType;
<<<<<<< HEAD
use App\Form\AddNewCommentType;
=======
>>>>>>> e6ebb3acc92cbcbd50a1b811ae6b8f2a025d24fd
use App\Repository\TicketRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< HEAD
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Comment;

/**
* @Route("/ticket")
*/

class TicketController extends AbstractController
{
    /**
=======

/**
 * @Route("/ticket")
 */
class TicketController extends AbstractController
{
    /**
     * @Route("/", name="ticket_index", methods={"GET"})
     */
    public function index(TicketRepository $ticketRepository): Response
    {
        return $this->render('ticket/index.html.twig', [
            'tickets' => $ticketRepository->findAll(),
        ]);
    }

    /**
>>>>>>> e6ebb3acc92cbcbd50a1b811ae6b8f2a025d24fd
     * @Route("/new", name="ticket_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $projectId = $request->query->get('project_id');
        $ticket = new Ticket();
        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $project = $entityManager->getRepository(Project::class)->find($projectId);

            $ticket->setProject($project);

            $entityManager->persist($project);
            $entityManager->persist($ticket);
            $entityManager->flush();

<<<<<<< HEAD
            return $this->redirectToRoute('show_project', ['id' => $projectId]);
=======
            return $this->redirectToRoute('ticket_index');
>>>>>>> e6ebb3acc92cbcbd50a1b811ae6b8f2a025d24fd
        }

        return $this->render('ticket/new.html.twig', [
            'ticket' => $ticket,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ticket_show", methods={"GET"})
     */
    public function show(Ticket $ticket): Response
    {
        return $this->render('ticket/show.html.twig', [
            'ticket' => $ticket,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="ticket_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Ticket $ticket): Response
    {
        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

<<<<<<< HEAD
            return $this->redirectToRoute('show_projects');
=======
            return $this->redirectToRoute('ticket_index');
>>>>>>> e6ebb3acc92cbcbd50a1b811ae6b8f2a025d24fd
        }

        return $this->render('ticket/edit.html.twig', [
            'ticket' => $ticket,
            'form' => $form->createView(),
        ]);
    }

    /**
<<<<<<< HEAD
     * @Route("/{id}/delete", name="ticket_delete")
     */
    public function delete($id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $ticket = $entityManager->getRepository(Ticket::class)->find($id);

        if (!$ticket) {
            throw $this->createNotFoundException(
                'No ticket found for id '.$id
            );
        }

        $entityManager->remove($ticket);
        $entityManager->flush();

        return $this->redirectToRoute('show_projects');
    }

    /**
     * @Route(methods={"GET","POST"})
     */

    public function new_comment(Request $request)
    {
        $ticketId = $request->query->get('id');
        $comment = new Comment();
        $$form = $this->createForm(AddNewCommentType::class, $ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $ticket = $entityManager->getRepository(Ticket::class)->find($ticketId);

            $comment->setProject($ticket);

            $entityManager->persist($ticket);
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('show_project', ['id' => $ticketId]);
        }

        return $this->render('ticket/show.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
    }

    // public function show_comments()
    // {
    //     $comments = $this->getDoctrine()
    //         ->getRepository(Comment::class)
    //         ->findAll();

    //         return $this->render('ticket/show.html.twig', [
    //         'comments' => $comments,
    //     ]);
    // }
    
=======
     * @Route("/{id}", name="ticket_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Ticket $ticket): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ticket->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ticket);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ticket_index');
    }
>>>>>>> e6ebb3acc92cbcbd50a1b811ae6b8f2a025d24fd
}
