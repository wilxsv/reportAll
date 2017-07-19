<?php

namespace Minsal\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;




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

		$query = $establecimientoReposistorio->createQueryBuilder('es')
		->select('es.id, es.nombre')
		->where('es.nombre NOT LIKE :region AND es.nombre NOT LIKE :sibasi' )
		->setParameter('region','%Región%')
		->setParameter('sibasi','%Sibasi%')
		->getQuery();
		$establecimientos =  $query->getResult();	


		return $this->render('MinsalPlantillaBundle:Reporte:reporteConsumoMensual.html.twig',array(
			'sibasis' => $sibasis, 'regiones' => $regiones, 'establecimientos' => $establecimientos
			));
	}
	public function ajaxconsumomensualAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$region = $request->get('region');
		$sibasi = $request->get('sibasi');
		$estab = $request->get('estab');
		if ($region and $sibasi and $estab) {
			$sql = "SELECT region.id,sibasi.id,estab.id FROM ctl_establecimiento AS estab JOIN ctl_establecimiento AS sibasi ON estab.id_establecimiento_padre = sibasi.id JOIN ctl_establecimiento AS region ON sibasi.id_establecimiento_padre = region.id WHERE region.id = ".$region." and sibasi.id = ".$sibasi." and estab.id = ".$estab;
			$rsm = new ResultSetMapping;
			$rsm->addEntityResult('MinsalCoreBundle:CtlEstablecimiento', 'estab');
			$rsm->addEntityResult('MinsalCoreBundle:CtlEstablecimiento', 'sibasi');
			$rsm->addEntityResult('MinsalCoreBundle:CtlEstablecimiento', 'region');
			$rsm->addFieldResult('region','id','id');
			$rsm->addFieldResult('sibasi','id','id');
			$rsm->addFieldResult('estab','id','id');

			$nq = $this->getDoctrine()->getManager()->createNativeQuery($sql, $rsm);
			$ctlEstablecimientos = $nq->getArrayResult();
			$encoders = array(new XmlEncoder(), new JsonEncoder());
			$normalizers = array(new ObjectNormalizer());

			$serializer = new Serializer($normalizers, $encoders);
			$jsonContent = $serializer->serialize($ctlEstablecimientos, 'json');
			return new Response($jsonContent);
		}




		/*$region = $request->get('region');
		$sibasi = $request->get('sibasi');
		$estab = $request->get('estab');
		$rsm = new ResultSetMapping();
		$em = $this->getDoctrine()->getManager();
		
		$query = $em->createNativeQuery('SELECT region.id,sibasi.id,estab.id FROM ctl_establecimiento AS estab JOIN ctl_establecimiento AS sibasi ON estab.id_establecimiento_padre = sibasi.id JOIN ctl_establecimiento AS region ON sibasi.id_establecimiento_padre = region.id WHERE region.id = ? and sibasi.id = ? and estab.id = ?',$rsm);
		$query->setParameter(1,$region);
		$query->setParameter(2,$sibasi);
		$query->setParameter(3,$estab);
		$resultado = $query->getResult();

		$encoders = array(new XmlEncoder(), new JsonEncoder());
		$normalizers = array(new ObjectNormalizer());

		$serializer = new Serializer($normalizers, $encoders);
		$jsonContent = $serializer->serialize($resultado, 'json');
		return new Response($jsonContent);*/

	}
}
