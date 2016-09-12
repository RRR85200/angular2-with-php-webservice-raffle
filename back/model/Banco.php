<?php

/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 09/09/2016
 * Time: 13:55
 */
class Banco
{
    private $sql;
    public $query;
    public $result;
    private $host;
    private $usuario;
    private $senha;
    private $banco;
    public $tabela;
    public $campos;
    public $valores;
    public $condicao;
    private $link;

    public function __construct()
    {
        $this->conexao();
    }

    private function conexao()
    {
        $this->host = "localhost";
        $this->banco = "bd_sorteio";
        $this->usuario = "root";
        $this->senha = "";
        $this->link = mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco);
        if ($this->link) {
            return "
            {
  \"banco\": {
    \"tipo_banco\": \"MySQL\",
    \"conectado\": true,
    \"ipbanco\": \"$this->host\",
    \"erro\": \"" . mysqli_error($this->link) . "\"
    \"obs\": \"SHOW o/\"
  }
}";
        } else {
            return "
            {
  \"banco\": {
    \"tipo_banco\": \"MySQL\",
    \"conectado\": true,
    \"ipbanco\": \"$this->host\",
    \"erro\": \"" . mysqli_error($this->link) . "\"
    \"obs\": \"SHOW o/\"
  }
}";

        }
    }

    public function cadastrar()
    {
        if(1==1) {
            return "
        {
            \"origem\":{
                \"classe\":\"banco\",
                \"metodo\":\"cadastrar\"
            },
            \"msg\": \"Sucesso!\"
        }
        ";
        }else{
            return "
        {
            \"origem\":{
                \"classe\":\"banco\",
                \"metodo\":\"cadastrar\"
            },
            \"msg\": \"Erro!\"
        }
        ";
        }

    }

    public function alterar()
    {
        if(1==1) {
            return "
        {
            \"origem\":{
                \"classe\":\"banco\",
                \"metodo\":\"alterar\"
            },
            \"msg\": \"Sucesso!\"
        }
        ";
        }else{
            return "
        {
            \"origem\":{
                \"classe\":\"banco\",
                \"metodo\":\"alterar\"
            },
            \"msg\": \"Erro!\"
        }
        ";
        }

    }

    public function excluir()
    {
        if(1==1){
            return "
        {
            \"origem\":{
                \"classe\":\"banco\",
                \"metodo\":\"excluir\"
            },
            \"msg\": \"Sucesso!\"
        }
        ";
        }else{
            return "
        {
            \"origem\":{
                \"classe\":\"banco\",
                \"metodo\":\"excluir\"
            },
            \"msg\": \"Erro!\"
        }
        ";
        }

    }

    public function listar()
    {
        if(1==1){
            return "
        {
            \"origem\":{
                \"classe\":\"banco\",
                \"metodo\":\"cadastrar\"
            },
            \"msg\": \"Sucesso!\"
        }
        ";
        }else{
            return "
        {
            \"origem\":{
                \"classe\":\"banco\",
                \"metodo\":\"cadastrar\"
            },
            \"msg\": \"Erro!\"
        }
        ";
        }

    }
}