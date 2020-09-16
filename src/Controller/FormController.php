<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/form", name="form")
     */
    public function index()
    {
        $post=new Post();

        $post->setTitle("Welcome");
        $post->setDescription('Descrption section');


        $form=$this->createForm(PostType::class,$post);
        return $this->render('form/index.html.twig', [
            'post_form'=>$form->createView()
        ]);
    }
}
