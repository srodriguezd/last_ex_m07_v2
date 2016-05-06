<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Cliente;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
class pedidoController extends Controller{

    /**
     * @Route("/pedido/{id}", name="app_clientes")
     */
    public function pedidoAction($id)
    {
        $m = $this->getDoctrine()->getManager();
        $pedidosRepository = $m->getRepository('AppBundle:Pedido');
        $pedidos = $pedidosRepository->PedidoByCliente($id);
        $response = $this->render(':index:pedido.html.twig', [
            'pedidos'  => $pedidos
        ]);
        return $response;
    }

}