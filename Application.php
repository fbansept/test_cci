<?php

namespace App;

use App\Model\Utilisateur;

class Application
{

    public static function demarrer()
    {
        //http://localhost/cci_dwwm_poo/article/liste
        //http://localhost/cci_dwwm_poo/index.php?page=article/liste


        $partiesUrl = explode("/", $_GET['page']);

        $nomControleur = "\\App\\Controller\\" .
            ucfirst($partiesUrl[0]) . "Controller";

        $controleur = new $nomControleur();

        $nomAction = $partiesUrl[1];

        $controleur->$nomAction();
    }
}
