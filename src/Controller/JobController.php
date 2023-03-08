<?php

namespace App\Controller;

use App\Entity\Job;
use App\Form\JobType;
use App\Repository\JobRepository;
use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/job')]
// Este IsGranted impedirá que usuarios que no sean de almacén entren en jobs
#[IsGranted('ROLE_ALMACEN')]
class JobController extends AbstractController
{
    #[Route('/', name: 'app_job_index', methods: ['GET'])]
    public function index(JobRepository $jobRepository): Response
    {
        return $this->render('job/index.html.twig', [
            'jobs' => $jobRepository->findAll(),
        ]);
    }
    //Esta ruta servirá para añadirle al job una task, ya que por defecto se asignaba a la task 1 y por eso no se mostraba
    #[Route('/{idtask}/new', name: 'app_job_new', methods: ['GET', 'POST'])]
    public function new(Request $request, JobRepository $jobRepository, TaskRepository $taskRepository, $idtask): Response
    {
        $job = new Job();
        $form = $this->createForm(JobType::class, $job);
        $form->handleRequest($request);

        $job->setTaskId($taskRepository->findOneById(1));
        
        if ($form->isSubmitted() && $form->isValid()) {
            //Esta linea seteará la task que queremos en su job
            $job->setTask($taskRepository->findOneById($idtask));
            $jobRepository->save($job, true);

            return $this->redirectToRoute('app_warehouse', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('job/new.html.twig', [
            'job' => $job,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_job_show', methods: ['GET'])]
    public function show(Job $job): Response
    {
        return $this->render('job/show.html.twig', [
            'job' => $job,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_job_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Job $job, JobRepository $jobRepository): Response
    {
        $form = $this->createForm(JobType::class, $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $jobRepository->save($job, true);

            return $this->redirectToRoute('app_job_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('job/edit.html.twig', [
            'job' => $job,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_job_delete', methods: ['POST'])]
    public function delete(Request $request, Job $job, JobRepository $jobRepository, TaskRepository $taskRepository): Response
    {

        $task = $job->getTaskId();
        if ($this->isCsrfTokenValid('delete'.$job->getId(), $request->request->get('_token'))) {
            $jobRepository->remove($job, true);
        }
        return $this->redirectToRoute('app_task_show', ['id' => $task,], Response::HTTP_SEE_OTHER);
    }
}
