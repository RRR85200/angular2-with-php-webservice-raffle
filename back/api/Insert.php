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
header('Content-Type: application/json', 'charset=utf-8', true);
header('Content-Type: application/x-www-form-urlencoded', 'charset=utf-8', true);
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT');
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


        if (isset($_POST['q']) && $_POST['q'] == "usuario") {
            echo $this->doItUsuario();
        }
        if (isset($_POST['q']) && $_POST['q'] == "sorteio") {
            $this->doItSorteio();
        }
        if (isset($_POST['q']) && $_POST['q'] == "endereco") {
            $this->doItEndereco();
        }
        if (isset($_POST['q']) && $_POST['q'] == "concorrente-sorteio") {
            $this->doItConcorrenteSorteio();
        }

    }

    function doItUsuario()
    {
        return $this->usuarioController->cadastrar();
    }


    function doItSorteio()
    {
        $this->sorteioController->cadastrar();
    }

    function doItEndereco()
    {
        $this->enderecoController->cadastrar();
    }

    function doItConcorrenteSorteio()
    {
        $this->concorrenteSorteioController->cadastrar();
    }
}
new Insert();