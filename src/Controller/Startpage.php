<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\SuperFormType;
use App\Model\SuperModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class Startpage extends Controller
{
    /**
     * @Route("", name="app_index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $model = new SuperModel();
        $form = $this->createForm(SuperFormType::class, $model);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            return $this->redirect($this->generateUrl('app_thank_you'));
        }

        return $this->render('index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/thank-you", name="app_thank_you")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function thankYou()
    {
        return $this->render('thank-you.html.twig');
    }
}