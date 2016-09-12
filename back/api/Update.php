<?php

/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 12/09/2016
 * Time: 09:24
 */
class Update
{
    function __construct()
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT');

        if(isset($_GET['classe']) && $_GET['classe'] == "usuario") {
            $this->doItUsuario();
        }
        if(isset($_GET['classe']) && $_GET['classe'] == "sorteio") {
            $this->doItSorteio();
        }
        if(isset($_GET['classe']) && $_GET['classe'] == "endereco") {
            $this->doItEndereco();
        }
        if(isset($_GET['classe']) && $_GET['classe'] == "concorrente-sorteio") {

        }
    }

    function doItUsuario()
    {
        if (isset($_GET[''])) {
            return ";";
        } else {
            return
                "
{
\"erro\":\"API-INSERT 001 | Usuario:\",
\"msg\":\"Não informado qual método a seguir.\"
}
";
        }
    }

    function doItSorteio()
    {
        if (isset($_GET[''])) {
            return ";";
        } else {
            return
                "
{
\"erro\":\"API-INSERT 002 | Sorteio:\",
\"msg\":\"Não informado qual método a seguir.\"
}
";
        }
    }

    function doItEndereco()
    {
        if (isset($_GET[''])) {
            return ";";
        } else {
            return
                "
{
\"erro\":\"API-INSERT 003 | Usuario-Endereço:\",
\"msg\":\"Não informado qual método a seguir.\"
}
";
        }
    }

    function doItConcorrenteSorteio()
    {
        if (isset($_GET[''])) {
            return ";";
        } else {
            return
                "
{
\"erro\":\"API-INSERT 004 | Concorrente Sorteio:\",
\"msg\":\"Não informado qual método a seguir.\"
}
";
        }
    }

}
new Update();