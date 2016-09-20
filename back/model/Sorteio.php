<?php

/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 09/09/2016
 * Time: 13:48
 */
class Sorteio extends Banco
{

    private $id;
    private $descricao;
    private $dataCriacao;
    private $dataSorteio;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * @param mixed $dataCriacao
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;
    }

    /**
     * @return mixed
     */
    public function getDataSorteio()
    {
        return $this->dataSorteio;
    }

    /**
     * @param mixed $dataSorteio
     */
    public function setDataSorteio($dataSorteio)
    {
        $this->dataSorteio = $dataSorteio;
    }


//
//    function cadastrar()
//    {
//
//    }
//
//    function alterar()
//    {
//
//    }
//
//    function excluir()
//    {
//
//    }
//
//    function listar() {
//
//    }
}