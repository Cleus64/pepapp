<?php

namespace App\Controller;

use App\Entity\Periodicite;
use App\Form\PeriodiciteType;
use App\Repository\PeriodiciteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/periodicite')]
class AdminPeriodiciteController extends AbstractController
{
    #[Route('/', name: 'app_admin_periodicite_index', methods: ['GET'])]
    public function index(PeriodiciteRepository $periodiciteRepository): Response
    {
        return $this->render('admin_periodicite/index.html.twig', [
            'periodicites' => $periodiciteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_periodicite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PeriodiciteRepository $periodiciteRepository): Response
    {
        $periodicite = new Periodicite();
        $form = $this->createForm(PeriodiciteType::class, $periodicite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $periodiciteRepository->save($periodicite, true);

            return $this->redirectToRoute('app_admin_periodicite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_periodicite/new.html.twig', [
            'periodicite' => $periodicite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_periodicite_show', methods: ['GET'])]
    public function show(Periodicite $periodicite): Response
    {
        return $this->render('admin_periodicite/show.html.twig', [
            'periodicite' => $periodicite,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_periodicite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Periodicite $periodicite, PeriodiciteRepository $periodiciteRepository): Response
    {
        $form = $this->createForm(PeriodiciteType::class, $periodicite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $periodiciteRepository->save($periodicite, true);

            return $this->redirectToRoute('app_admin_periodicite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_periodicite/edit.html.twig', [
            'periodicite' => $periodicite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_periodicite_delete', methods: ['POST'])]
    public function delete(Request $request, Periodicite $periodicite, PeriodiciteRepository $periodiciteRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$periodicite->getId(), $request->request->get('_token'))) {
            $periodiciteRepository->remove($periodicite, true);
        }

        return $this->redirectToRoute('app_admin_periodicite_index', [], Response::HTTP_SEE_OTHER);
    }
}
