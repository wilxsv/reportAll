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

		$query = $establecimientoReposistorio->createQueryBuilder('es')
		->select('es.id, es.nombre')
		->where('es.nombre NOT LIKE :region AND es.nombre NOT LIKE :sibasi' )
		->setParameter('region','%Región%')
		->setParameter('sibasi','%Sibasi%')
		->getQuery();
		$establecimientos =  $query->getResult();

		return $this->render('MinsalPlantillaBundle:Reporte:reporteExistencia.html.twig', array(
			'medicamentos'=>$medicamentos,
			'sibasis' => $sibasis,
			'regiones' => $regiones,
			'establecimientos'=>$establecimientos,
			));
	}
}
