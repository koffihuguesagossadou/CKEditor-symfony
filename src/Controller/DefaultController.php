<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessageFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {

        $form = $this->createForm(MessageFormType::class);

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'formMessage' => $form->createView(),
        ]);
    }
}
