<?php

namespace App\Controller;

use App\Entity\Ticket;
use App\Entity\Project;
use App\Form\TicketType;
use App\Repository\TicketRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Comment;

/**
* @Route("/ticket")
*/

class TicketController extends AbstractController
{
    /**
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

            return $this->redirectToRoute('show_project', ['id' => $projectId]);
        }

        return $this->render('ticket/new.html.twig', [
            'ticket' => $ticket,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ticket_show", methods={"GET", "POST"})
     */
    public function show(Request $request, Ticket $ticket): Response
    {
        $comment = new Comment();

        $commentForm = $this->createFormBuilder($comment)
            ->add('text', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Add'])
            ->getForm();

        $commentForm->handleRequest($request);

        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $comment = $commentForm->getData();
            $entityManager = $this->getDoctrine()->getManager();

            $comment->setTicket($ticket);

            $entityManager->persist($ticket);
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('ticket_show', ['id' => $ticket->getId()]);
        }

        return $this->render('ticket/show.html.twig', [
            'ticket' => $ticket,
            'comment_form' => $commentForm->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="ticket_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Ticket $ticket): Response
    {
        $projectId = $request->query->get('project_id');
        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('show_project', ['id' => $projectId]);
        }

        return $this->render('ticket/edit.html.twig', [
            'ticket' => $ticket,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/delete", name="ticket_delete")
     */

    public function delete(Request $request, $id): Response
    {
        $projectId = $request->query->get('project_id');
        $entityManager = $this->getDoctrine()->getManager();
        $ticket = $entityManager->getRepository(Ticket::class)->find($id);

        if (!$ticket) {
            throw $this->createNotFoundException(
                'No ticket found for id '.$id
            );
        }

        $entityManager->remove($ticket);
        $entityManager->flush();

        return $this->redirectToRoute('show_project', ['id' => $projectId]);
    }

    public function show_сomments()
    {
        $comments = $this->getDoctrine()
            ->getRepository(Comment::class)
            ->findAll();

        return $this->render('ticket/show.html.twig', [
            'comments' => $comments,
        ]);
    }

}
