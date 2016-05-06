<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Cliente;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
class clienteController extends Controller{

    /**
     * @Route("/cliente/{id}", name="app_clientes")
     */
    public function clienteAction()
    {
        $m = $this->getDoctrine()->getManager();
        $clienteRepository = $m->getRepository('AppBundle:Cliente');
        $clientes = $clienteRepository->supTreinta();
        $response = $this->render(':index:cliente.html.twig', [
            'clientes' => $clientes
        ]);
        return $response;
    }




}