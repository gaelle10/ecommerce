<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class GaelleBoutiqueController extends AbstractController
{
    #[Route('/', name: 'boutique')]
    public function index(): JsonResponse
    {
        $user="alain";
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/GaelleBoutiqueController.php',
            'user'=> $user
        ]);
    }
}
