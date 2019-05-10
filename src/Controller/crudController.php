<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Form\MovieType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/crud")
 */
class crudController extends AbstractController{

    /**
     * @Route("/",name="crud_list")
     *
     */
    public function index(){
        return $this->render('crud/index.html.twig');
    }

    /**
     * @Route("/new",name="crud_new")
     *
     */
    public function new(){
        $movie = new Movie();
        $form = $this->createForm(MovieType::class, $movie);
        return $this->render('crud/new.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="crud_edit")
     */
    public function edit($id): Response
    {
        $movie = new Movie();
        $form = $this->createForm(MovieType::class, $movie);
        return $this->render('crud/edit.html.twig', [
            'form' => $form->createView(),
            'id'   => $id
        ]);
    }

    /**
     * @Route("/{id}", name="crud_edit")
     */
    public function delete($id): Response
    {
        $movie = new Movie();
        $form = $this->createForm(MovieType::class, $movie);
        return $this->render('crud/edit.html.twig', [
            'form' => $form->createView(),
            'id'   => $id
        ]);
    }
}