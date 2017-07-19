<?php

namespace Minsal\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConsumoMensualController extends Controller
{
	public function FormularioConsumoMensualAction()
	{
		return $this->render('MinsalPlantillaBundle:Reporte:reporteConsumoMensual.html.twig');
	}
}
