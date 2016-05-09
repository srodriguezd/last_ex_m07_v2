<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Cliente;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
class clienteController extends Controller{

    /**
     * @Route("/articulo/{id}", name="app_articulos")

    public function clienteAction()
    {
        $m = $this->getDoctrine()->getManager();
        $clienteRepository = $m->getRepository('AppBundle:Cliente');
        $clientes = $clienteRepository->supTreinta();
        $response = $this->render(':index:articulo.html.twig', [
            'clientes' => $clientes
        ]);
        return $response;
    }
     *
     * Está operativo en el index controller

     */


}