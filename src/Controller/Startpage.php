<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\SuperFormType;
use App\Model\SuperModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class Startpage extends Controller
{
    /**
     * @Route("/thank-you", name="app_thank_you")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function thankYou()
    {
        return $this->render('thank-you.html.twig');
    }

    /**
     * @Route("/{theme}", name="app_index", defaults={"theme": "bootstrap4"})
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request, $theme)
    {
        $themeTemplate = $this->selectTheme($theme);
        $model = new SuperModel();
        $form = $this->createForm(SuperFormType::class, $model);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            return $this->redirect($this->generateUrl('app_thank_you'));
        }

        return $this->render('index.html.twig', [
            'form' => $form->createView(),
            'themeTemplate' => $themeTemplate,
        ]);
    }

    private function selectTheme($input)
    {
        switch ($input) {
            case 'bootstrap4':
                return 'bootstrap_4_layout.html.twig';
            case 'bootstrap4-horizontal':
                return 'bootstrap_4_horizontal_layout.html.twig';
            case 'bootstrap3':
                return 'bootstrap_3_layout.html.twig';
            case 'bootstrap3-horizontal':
                return 'bootstrap_3_horizontal_layout.html.twig';
            case 'table':
                return 'form_table_layout.html.twig';
            case 'div':
                return 'form_div_layout.html.twig';
            case 'foundation':
                return 'foundation_5_layout.html.twig';

            default:
                throw new NotFoundHttpException('Could not find template');
        }
    }
}
