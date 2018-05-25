<?php
/**
 * Created by PhpStorm.
 * User: macdavid
 * Date: 25/05/2018
 * Time: 23:03
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class UniqueController
{
    public function showUnique(){

        return new Response(
           'Numéro unique :'. uniqid()
        );
    }
}