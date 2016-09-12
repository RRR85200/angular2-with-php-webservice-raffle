<?php
require_once "../model/Sorteio.php";
/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 09/09/2016
 * Time: 13:58
 */
class SorteioController
{
    private $sorteio;

    public function __construct()
    {
        $this->sorteio = new Sorteio();
    }

    public function cadastrar()
    {

    }

    public function alterar()
    {

    }

    public function listar()
    {

    }

    public function excluir()
    {

    }
}

new SorteioController();