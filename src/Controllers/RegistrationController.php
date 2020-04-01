<?php


namespace Zanin\Controllers;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController
{
    public function registerAction(Request $request): Response
    {
        $data = $request->request->get('registration');

        return new JsonResponse(['status' => 'ok', 'data' => $data]);
    }
}