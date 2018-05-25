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
    public function showUnique(){
        $unique = uniqid();

        return $this->render('unique/showid.html.twig', array(
            // unique will be used as a variale in our twig template
            'unique' => $unique,
        )
        );
    }
}