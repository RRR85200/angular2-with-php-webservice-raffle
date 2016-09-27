<?php

/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 09/09/2016
 * Time: 13:48
 */
class Endereco extends Banco
{
    private $id;
    private $estado;
    private $cidade;
    private $endereco;
    private $cep;

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
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }


    function cadastrarEndereco()
    {
        echo $this->cadastrar("insert into endereco (cidade, estado, endereco, cep) values ('" . $this->cidade . "',
         '" . $this->estado . "', '" . $this->endereco . "', '" . $this->cep . "')");
    }

    function alterarEndereco()
    {
        $this->alterar("update endereco set cidade = '$this->cidade', estado = '$this->estado',
 endereco = '$this->endereco', cep = '" . $this->cep . "' where id = " . $this->id);
    }

    function excluirEndereco()
    {
        $this->excluir("update endereco set ativado = 0");
    }

    function listarEndereco($filter, $filterValue)
    {
        $this->campos = ["id", "cidade", "estado", "endereco", "cep"];
        $this->listar($filter, $filterValue);
    }

}