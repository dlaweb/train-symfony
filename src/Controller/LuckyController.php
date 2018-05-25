<?php
/**
 * Created by PhpStorm.
 * User: macdavid
 * Date: 25/05/2018
 * Time: 22:44
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number(){
        $nombre = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$nombre.'</body></html>'
        );
    }
}