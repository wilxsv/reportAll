<?php

namespace Minsal\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConsumoMensualController extends Controller
{
	public function formularioConsumoMensualAction()
	{
		$establecimientoReposistorio = $this->getDoctrine()->getRepository('MinsalCoreBundle:CtlEstablecimiento');
		$query = $establecimientoReposistorio->createQueryBuilder('e')
		->select('e.id, e.nombre')
		->where('e.nombre LIKE :sibasi')
		->setParameter('sibasi','%Sibasi%')
		->getQuery();
		$sibasis =  $query->getResult();

		$query = $establecimientoReposistorio->createQueryBuilder('r')
		->select('r.id, r.nombre')
		->where('r.nombre LIKE :region')
		->setParameter('region','%Región%')
		->getQuery();
		$regiones =  $query->getResult();



		return $this->render('MinsalPlantillaBundle:Reporte:reporteConsumoMensual.html.twig',array(
			'sibasis' => $sibasis, 'regiones' => $regiones
			));
	}
}
