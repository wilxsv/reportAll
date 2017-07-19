<?php

namespace Minsal\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ReporteExistenciaController extends Controller
{
	public function formularioExistenciaAction()
	{
		$em = $this->getDoctrine()->getManager();
		$medicamentos = $em->getRepository('MinsalCoreBundle:CtlInsumo')->findAll();
		return $this->render('MinsalPlantillaBundle:Reporte:reporteExistencia.html.twig', array(
			'medicamentos'=>$medicamentos
			));
	}
}
