<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();

        $id = $request->request->get('id');

        $entity = $em->find('AppBundle:Codeception', $id);

        $response = [];
        if ($entity) {
            $response['id'] = $entity->getId();
            $response['name'] = $entity->getName();
        }

        return new JsonResponse($response);
    }
}
