<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Cliente;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
class articuloController extends Controller{

    /**
     * @Route("/articulo/{id}", name="app_articulos")
     */
    public function articulosAction($id)
    {
        $m = $this->getDoctrine()->getManager();
        $articuloRepository = $m->getRepository('AppBundle:Articulo');
        $articulos = $articuloRepository->ArticulosByPedido($id);
        $response = $this->render(':index:articulo.html.twig', [
            'articulos'  => $articulos

        ]);
        return $response;
    }










}