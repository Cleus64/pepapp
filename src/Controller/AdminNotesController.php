<?php

namespace App\Controller;

use App\Entity\Notes;
use App\Form\NotesType;
use App\Repository\NotesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/notes')]
class AdminNotesController extends AbstractController
{
    #[Route('/', name: 'app_admin_notes_index', methods: ['GET'])]
    public function index(NotesRepository $notesRepository): Response
    {
        return $this->render('admin_notes/index.html.twig', [
            'notes' => $notesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_notes_new', methods: ['GET', 'POST'])]
    public function new(Request $request, NotesRepository $notesRepository): Response
    {
        $note = new Notes();
        $form = $this->createForm(NotesType::class, $note);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $notesRepository->save($note, true);

            return $this->redirectToRoute('app_admin_notes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_notes/new.html.twig', [
            'note' => $note,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_notes_show', methods: ['GET'])]
    public function show(Notes $note): Response
    {
        return $this->render('admin_notes/show.html.twig', [
            'note' => $note,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_notes_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Notes $note, NotesRepository $notesRepository): Response
    {
        $form = $this->createForm(NotesType::class, $note);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $notesRepository->save($note, true);

            return $this->redirectToRoute('app_admin_notes_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_notes/edit.html.twig', [
            'note' => $note,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_notes_delete', methods: ['POST'])]
    public function delete(Request $request, Notes $note, NotesRepository $notesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$note->getId(), $request->request->get('_token'))) {
            $notesRepository->remove($note, true);
        }

        return $this->redirectToRoute('app_admin_notes_index', [], Response::HTTP_SEE_OTHER);
    }
}
