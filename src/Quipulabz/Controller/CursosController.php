<?php
namespace Quipulabz\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class CursosController
{
    public function index(Application $app, Request $request)
    {
    	$data['title'] = "Cursos";
    	return $app['twig']->render('index.html', $data);
    }

    // public function show(Application $app, Request $request, $curso_id)
    // {
    // 	$data['title'] = "Cursos";
    // 	return $app['twig']->render('index.html', $data);
    // }
}