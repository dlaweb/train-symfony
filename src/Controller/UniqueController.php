<?php
/**
 * Created by PhpStorm.
 * User: macdavid
 * Date: 25/05/2018
 * Time: 23:03
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UniqueController extends Controller
{
    /**
     * @Route("/unique/show")
     */
    public function showUnique()
    {
        $unique = uniqid();

        return $this->render('unique/showid.html.twig', array(
            // unique will be used as a variale in our twig template
            'unique' => $unique,
        )
        );
    }


    /**
     * Match exactly /unique
     *
     * @Route({
     *     "fr": "/unique",
     *     "de": "/single"
     * }, name="unique_liste")
     */


    public function list()
    {
        return $this->render('unique/unique.html.twig');

    }

    /**
     * Match /unique/*
     *
     * @Route("/unique/{slug}", name="unique_showMore")
     */
    public function showMore()
    {

    }

    /**
     *
     * Default page
     *
     * Match /unique/{page}
     *
     * The \d+ is a regular expression that matches a digit of any length
     *
     * @Route("/unique/{page}", name="unique_page", requirements={"page"="\d+"})
     */
    public function  liste($page = 1){

    }

    /**
     * Match /unique/{page}
     *
     * The \d+ is a regular expression that matches a digit of any length
     *
     * @Route("/unique/{page}", name="unique_page", requirements={"page"="\d+"})
     */
    public function  listePage($page){

    }
}