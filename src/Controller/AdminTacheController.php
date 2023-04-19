<?php

namespace App\Controller;

use App\Entity\Tache;
use App\Form\TacheType;
use App\Repository\TacheRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/tache')]
class AdminTacheController extends AbstractController
{
    #[Route('/', name: 'app_admin_tache_index', methods: ['GET'])]
    public function index(TacheRepository $tacheRepository): Response
    {
        return $this->render('admin_tache/index.html.twig', [
            'taches' => $tacheRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_tache_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TacheRepository $tacheRepository): Response
    {
        $tache = new Tache();
        $form = $this->createForm(TacheType::class, $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tacheRepository->save($tache, true);

            return $this->redirectToRoute('app_admin_tache_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_tache/new.html.twig', [
            'tache' => $tache,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_tache_show', methods: ['GET'])]
    public function show(Tache $tache): Response
    {
        return $this->render('admin_tache/show.html.twig', [
            'tache' => $tache,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_tache_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tache $tache, TacheRepository $tacheRepository): Response
    {
        $form = $this->createForm(TacheType::class, $tache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tacheRepository->save($tache, true);

            return $this->redirectToRoute('app_admin_tache_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_tache/edit.html.twig', [
            'tache' => $tache,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_tache_delete', methods: ['POST'])]
    public function delete(Request $request, Tache $tache, TacheRepository $tacheRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tache->getId(), $request->request->get('_token'))) {
            $tacheRepository->remove($tache, true);
        }

        return $this->redirectToRoute('app_admin_tache_index', [], Response::HTTP_SEE_OTHER);
    }
}
