<?php

namespace App\Controller;

use App\Search\MainSearcherFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/search/{text}", name="search")
     */
    public function searchAction($text)
    {
        $factory = new MainSearcherFactory();

        $mainSearcher = $factory->createMainSearcher();
       $inns =  $mainSearcher->getInns($text);

        return new Response(serialize($inns));

    }
}
