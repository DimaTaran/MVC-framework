<?php


namespace Taran\Controller;

//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;

use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

class FooController
{
    /**
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */
    public function run(ServerRequestInterface $request, array $arg): ResponseInterface
    {
        return new Response(200, [], "FOO page ". htmlspecialchars($arg['name']), 1.1);
    }

}