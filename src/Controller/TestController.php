<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MessageGenerator;
use App\Updates\SiteUpdateManager;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_route")
     */
    public function index(SiteUpdateManager $siteUpdateManager)
    {
        $siteUpdateManager->notifyOfSiteUpdate();
        return $this->render('test/index.html.twig', [
            'controller_name' => 'Test controller',
            'error' => 'error',
        ]);
    }
}