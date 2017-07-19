<?php

namespace Minsal\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConsumoMensualController extends Controller
{
	public function formularioConsumoMensualAction()
	{
		$repositorio = $this->getDoctrine()->getRepository('MinsalCoreBundle:CtlEstablecimiento');
		$query = $repositorio->createQueryBuilder('e')
		->select('e.id, e.nombre')
		->where('e.nombre LIKE :sibasi')
		->setParameter('sibasi','%Sibasi%')
		->getQuery();
		$regiones =  $query->getResult();
		return $this->render('MinsalPlantillaBundle:Reporte:reporteConsumoMensual.html.twig',array(
			'regiones' => $regiones
			));
	}
}
