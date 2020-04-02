<?php


namespace Zanin;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zanin\Controllers\RegistrationController;

class SimpleRouter
{
    private const ROUTES = [
        '/registration' => [
            'controller' => RegistrationController::class,
            'action' => 'registerAction'
        ]
    ];

    public static function route(Request $request): Response
    {
        $route = self::ROUTES[$request->getPathInfo()] ?? null;
        if (null === $route) {
            return new JsonResponse(['status' => 'error']);
        }

        $controller = new $route['controller']();
        $action = $route['action'];

        return $controller->$action($request);
    }
}