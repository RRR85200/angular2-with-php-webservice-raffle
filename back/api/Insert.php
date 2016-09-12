<?php
require_once '../controller/UsuarioController.php';
require_once '../controller/ConcorrenteSorteioController.php';
require_once '../controller/EnderecoController.php';
require_once '../controller/SorteioController.php';
/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 12/09/2016
 * Time: 09:23
 */
class Insert
{
    private $usuarioController;
    private $concorrenteSorteioController;
    private $enderecoController;
    private $sorteioController;


    function __construct()
    {
        $this->usuarioController = new UsuarioController();
        $this->concorrenteSorteioController = new ConcorrenteSorteioController();
        $this->enderecoController = new EnderecoController();
        $this->sorteioController = new SorteioController();

        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT');

        if (isset($_GET['classe']) && $_GET['classe'] == "usuario") {
            $this->doItUsuario();
        }
        if (isset($_GET['classe']) && $_GET['classe'] == "sorteio") {
            $this->doItSorteio();
        }
        if (isset($_GET['classe']) && $_GET['classe'] == "endereco") {
            $this->doItEndereco();
        }
        if (isset($_GET['classe']) && $_GET['classe'] == "concorrente-sorteio") {
            $this->doItConcorrenteSorteio();
        }

    }

    function doItUsuario()
    {

    }


    function doItSorteio()
    {

    }

    function doItEndereco()
    {

    }

    function doItConcorrenteSorteio()
    {

    }
}
new Insert();