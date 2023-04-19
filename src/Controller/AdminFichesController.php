<?php

namespace App\Controller;

use App\Entity\Fiches;
use App\Form\FichesType;
use App\Repository\FichesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/fiches')]
class AdminFichesController extends AbstractController
{
    #[Route('/', name: 'app_admin_fiches_index', methods: ['GET'])]
    public function index(FichesRepository $fichesRepository): Response
    {
        return $this->render('admin_fiches/index.html.twig', [
            'fiches' => $fichesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_fiches_new', methods: ['GET', 'POST'])]
    public function new(Request $request, FichesRepository $fichesRepository): Response
    {
        $fich = new Fiches();
        $form = $this->createForm(FichesType::class, $fich);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fichesRepository->save($fich, true);

            return $this->redirectToRoute('app_admin_fiches_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_fiches/new.html.twig', [
            'fich' => $fich,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_fiches_show', methods: ['GET'])]
    public function show(Fiches $fich): Response
    {
        return $this->render('admin_fiches/show.html.twig', [
            'fich' => $fich,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_fiches_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Fiches $fich, FichesRepository $fichesRepository): Response
    {
        $form = $this->createForm(FichesType::class, $fich);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fichesRepository->save($fich, true);

            return $this->redirectToRoute('app_admin_fiches_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_fiches/edit.html.twig', [
            'fich' => $fich,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_fiches_delete', methods: ['POST'])]
    public function delete(Request $request, Fiches $fich, FichesRepository $fichesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fich->getId(), $request->request->get('_token'))) {
            $fichesRepository->remove($fich, true);
        }

        return $this->redirectToRoute('app_admin_fiches_index', [], Response::HTTP_SEE_OTHER);
    }
}
