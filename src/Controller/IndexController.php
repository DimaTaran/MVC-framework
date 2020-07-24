<?php


namespace Taran\Controller;

//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;


class IndexController
{
    /**
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */

    public function run(ServerRequestInterface $request): ResponseInterface
    {
        return new Response(200, [], "Index Page", 1.1);
    }

}