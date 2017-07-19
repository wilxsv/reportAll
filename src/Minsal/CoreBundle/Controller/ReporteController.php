<?php

namespace Minsal\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ReporteController extends Controller
{
	public function indexAction()
	{
		return $this->render('MinsalPlantillaBundle:Reporte:inicio.html.twig');
	}
}
