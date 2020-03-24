<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Project;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class ProjectsController extends AbstractController
{
     /**
      * @Route("/projects", name="show_projects")
      */
    public function ShowProjects()
    {
        $projects = $this->getDoctrine()
            ->getRepository(Project::class)
            ->findAll();

        return $this->render('projects.html.twig', [
            'projects' => $projects
        ]);
    }
}
