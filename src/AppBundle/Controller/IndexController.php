<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class IndexController extends Controller
{


    /**
     * @Route("/", name="app_index_index")
     */
    public function clienteAction()
    {
        $m = $this->getDoctrine()->getManager();
        $clienteRepository = $m->getRepository('AppBundle:Cliente');
        $clientes = $clienteRepository->supTreinta();
        $response = $this->render(':index:index.html.twig', [
            'clientes' => $clientes
        ]);
        return $response;
    }
}