<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Project;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class NewProjectController extends AbstractController
{
    /**
      * @Route("/projects/create", name="create_project")
      */

    public function new(Request $request)
    {
        $project = new Project();

        $form = $this->createFormBuilder($project)
            ->add('project_name', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Create Project'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $project = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($project);
            $entityManager->flush();

            return $this->redirectToRoute('show_projects');
        }

        return $this->render('create_project.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
