<?php
require_once '../model/Usuario.php';
require_once '../model/Sorteio.php';
require_once '../model/Endereco.php';
require_once '../model/ConcorrenteSorteio.php';
/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 12/09/2016
 * Time: 09:20
 */
class Search
{
    private $usuario;
    private $sorteio;
    private $endereco;
    private $concorrenteSorteio;


    function __construct()
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT');





    }
    function doItUsuario()
{
    $this->usuario = new Usuario();
    if (isset($_GET['q'])) {
        $this->usuario->listar($_GET['q']);

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
        $this->sorteio = new Sorteio();
        if (isset($_GET['q'])) {
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
        $this->endereco = new Endereco();
        if (isset($_GET['q'])) {
            return ";";
        } else {
            return
                "
{
\"erro\":\"API-INSERT 001 | Usuario-Endereço:\",
\"msg\":\"Não informado qual método a seguir.\"
}
";
        }
    }

    function doItConcorrenteSorteio()
    {
        $this->concorrenteSorteio = new ConcorrenteSorteio();
        if (isset($_GET['q'])) {
            return ";";
        } else {
            return
                "
{
\"erro\":\"API-INSERT 001 | Concorrente Sorteio:\",
\"msg\":\"Não informado qual método a seguir.\"
}
";
        }
    }
}
new Search();