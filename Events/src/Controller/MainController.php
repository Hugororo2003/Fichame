<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\TaskRepository;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_main")
     */

    // public function index(): Response
    // {
    //     return $this->render('main/index.html.twig') ([
    //         'controller_name' => 'MainController',
    //     ]);
    // }

    public function index(TaskRepository $taskRepository): Response
    {
        $user = $this->getUser();
        $date= new \DateTime();
        $now=$date->format('Y-m-d'); 

        if ($user)
        {
            return $this->render('main/index.html.twig', [

                'tasks' => $taskRepository->showPendingTasksByUser($user),
                'taskAsignments' => $taskRepository->showAsignByUserUncompleted($user),
                'now' => $now,

            ]);


        }
        else
        {


            return $this->render('main/index.html.twig', [
                'controller_name' => 'MainController',
            ]);

        }


    }
}