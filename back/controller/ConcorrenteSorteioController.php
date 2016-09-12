<?php
require_once '../model/ConcorrenteSorteio.php';
/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 09/09/2016
 * Time: 13:58
 */
class ConcorrenteSorteioController
{
    private $concorrenteSorteio;

    public function __construct()
    {
    $this->concorrenteSorteio = new ConcorrenteSorteio();
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
new ConcorrenteSorteioController();