<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Projects;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class EditProjectController extends AbstractController
{
    /**
     * @Route("/project/edit/{id}", name="edit_project")
     */

        public function update($id)
        {
            $entityManager = $this->getDoctrine()->getManager();
            $project = $entityManager->getRepository(Projects::class)->find($id);

            if (!$project) {
                throw $this->createNotFoundException(
                    'No project found for id '.$id
                );
            }

            $form = $this->createFormBuilder($project)
            ->add('project_name', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Edit Project'])
            ->getForm();

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $project = $form->getData();

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($project);
                $entityManager->flush();

                return $this->redirectToRoute('show_projects', ['id' =>$project->getId()]);
            }
                
            return $this->render('create_project.html.twig', [
                'form' => $form->createView(),
            ]);
        }
}