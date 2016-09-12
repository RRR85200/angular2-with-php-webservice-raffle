<?php
require_once '../model/Endereco.php';

/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 09/09/2016
 * Time: 13:58
 */
class EnderecoController
{
    private $endereco;

    public function __construct()
    {
        $this->endereco = new Endereco();
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

new EnderecoController();