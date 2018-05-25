<?php
/**
 * Created by PhpStorm.
 * User: macdavid
 * Date: 25/05/2018
 * Time: 22:44
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends  Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function number(){
        $nombre = mt_rand(0, 100);

        return $this->render('lucky/nombre.html.twig'  ,array(
            // nombre will be used as a variale in our twig template
            'nombre' => $nombre,
            )
        );
    }
}