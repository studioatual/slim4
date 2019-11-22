<?php

namespace StudioAtual\Controllers\Web;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use StudioAtual\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request, Response $response)
    {
        /* Logs with Error */
        $this->container->get('logger')->error(json_encode(['message' => 'Error 123']));
        
        /* Logs with Warning */
        $this->container->get('logger')->warning(json_encode(['message' => 'Alert 123']));

        return $this->view->render($response, 'home.twig', ['title' => 'Hello World!']);
        //$response->getBody()->write('Hello world!');
        //return $response;
    }
}