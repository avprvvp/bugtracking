<?php

namespace App\Controller;

use App\Entity\Ticket;
use App\Entity\Tag;
use App\Entity\User;
use App\Entity\Project;
use App\Form\TicketType;
use App\Repository\TicketRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EntityType;
use App\Entity\Comment;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\String\Slugger\SluggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @IsGranted("ROLE_USER")
 * @Route("/ticket")
 */

class TicketController extends AbstractController
{
    /**
     *  
     * @Route("/new", name="ticket_new", methods={"GET","POST"})
     */
    public function new(Request $request, AuthenticationUtils $authenticationUtils, SluggerInterface $slugger): Response
    {
        $users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();

        $projectId = $request->query->get('project_id');
        $ticket = new Ticket();
        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $project = $entityManager->getRepository(Project::class)->find($projectId);
            $creator = $entityManager->getRepository(User::class)->find($this->getUser()->getId());

            $ticket->setProject($project);
            $ticket->setCreator($creator);

            $entityManager->persist($project);
            $entityManager->persist($ticket);
            $entityManager->persist($creator);

            $tags_string = $request->request->get('ticket')['tags'];
            $tags = array_map(function ($value) {
                return trim($value);
            }, explode(',', $tags_string));
            foreach ($tags as $tagName) {
                $tag = new Tag();
                $has_tag = $entityManager->getRepository(Tag::class)->findOneBy(
                    ['name' => $tagName]
                );
                if ($has_tag) {
                    $ticket->addTag($has_tag);
                } else {

                    $tag->setName($tagName);
                    $entityManager->persist($tag);
                    $ticket->addTag($tag);
                }
            }

            /** @var UploadedFile $brochureFile */

            $brochureFile = $form->get('file')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();

                try {
                    $brochureFile->move(
                        $this->getParameter('files_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw $this->createNotFoundException(
                        'File does not upload' . $e
                    );
                }

                $ticket->setBrochureFilename($newFilename);
            }

            $entityManager->flush();
            return $this->redirectToRoute('show_project', ['id' => $projectId]);
        }

        return $this->render('ticket/new.html.twig', [
            'ticket' => $ticket,
            'users' => $users,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ticket_show", methods={"GET", "POST"})
     */
    public function show(Request $request, Ticket $ticket): Response
    {
        $comment = new Comment();
        $creator = $this->getUser()->getId();

        $commentForm = $this->createFormBuilder($comment)
            ->add('text', TextareaType::class, ['label' => 'New Comment'])
            ->getForm();

        $commentForm->handleRequest($request);

        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $comment = $commentForm->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $user = $entityManager->getRepository(User::class)->find($creator);

            $comment->setTicket($ticket);
            $comment->setCreator($user);

            $entityManager->persist($ticket);
            $entityManager->persist($comment);
            $entityManager->persist($user);
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
        $tags_string = $request->request->get('ticket')['tags'];
        $tags = array_map(function ($value) {
            return trim($value);
        }, explode(',', $tags_string));

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            foreach($ticket->getTags() as $tag) {
                $ticket->removeTag($tag);
            }
            foreach ($tags as $tagName) {
                
                $tag = new Tag();
                $has_tag = $entityManager->getRepository(Tag::class)->findOneBy(
                    ['name' => $tagName]
                );
                if ($has_tag) {
                    $ticket->addTag($has_tag);
                } else {

                    $tag->setName($tagName);
                    $entityManager->persist($tag);
                    $ticket->addTag($tag);
                }
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ticket_show', ['id' => $ticket->getId()]);
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
                'No ticket found for id ' . $id
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

    /**
     * @Route("/{id}/delete_comment", name="comment_delete")
     */
    public function delete_comment(Request $request, $id): Response
    {
        $ticketId = $request->query->get('ticket_id');
        $entityManager = $this->getDoctrine()->getManager();
        $comment = $entityManager->getRepository(Comment::class)->find($id);

        if (!$comment) {
            throw $this->createNotFoundException(
                'No comment found for id ' . $id
            );
        }

        $entityManager->remove($comment);
        $entityManager->flush();

        return $this->redirectToRoute('ticket_show', ['id' => $ticketId]);
    }
}
