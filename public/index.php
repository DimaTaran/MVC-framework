<?php

declare(strict_types = 1);
use Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . 'vendor/autoload.php';

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();


//if (isset($_GET['page']) && $_GET['page'] === 'foo' ) {
//   echo "FOO page";
//} else echo "Index page";
