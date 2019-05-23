<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Bundle\FrameworkBundle\Controller\WebtestCase; 
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

 /**
    * @Route("/", name="home")
    */
	public function display()
	{
		return new Response(
			'<html><body>Apache for jaz</body></html>'
		);
	}
}

 
