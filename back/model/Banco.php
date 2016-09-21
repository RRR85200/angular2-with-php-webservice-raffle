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
        return $this->link;
//        if ($this->link) {
//
//            echo "
//            {
//  \"banco\": {
//    \"tipo_banco\": \"MySQL\",
//    \"conectado\": true,
//    \"ipbanco\": \"$this->host\",
//    \"erro\": \"" . mysqli_error($this->link) . "\",
//    \"obs\": \"SHOW o/\"
//  }
//}";
//            return $this->link;
//        } else {
//            echo "
//            {
//  \"banco\": {
//    \"tipo_banco\": \"MySQL\",
//    \"conectado\": true,
//    \"ipbanco\": \"$this->host\",
//    \"erro\": \"" . mysqli_error($this->link) . "\",
//    \"obs\": \"SHOW o/\"
//  }
//}";
//            return die();
//        }
    }

    public function typeSQL($sql)
    {

        return mysqli_query($this->conexao(), $sql);

    }

    public function cadastrar($sql)
    {
        if ($this->typeSQL($sql)) {
            return "
        {
            \"origem\":{
                \"classe\":\"banco\",
                \"metodo\":\"cadastrar\"
            },
            \"msg\": \"Sucesso!\"
        }
        ";
        } else {
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

    public function alterar($sql)
    {
        if ($this->typeSQL($sql)) {
            return "
        {
            \"origem\":{
                \"classe\":\"banco\",
                \"metodo\":\"alterar\"
            },
            \"msg\": \"Sucesso!\"
        }
        ";
        } else {
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

    public function excluir($sql)
    {
        if ($this->typeSQL($sql)) {
            return "
        {
            \"origem\":{
                \"classe\":\"banco\",
                \"metodo\":\"excluir\"
            },
            \"msg\": \"Sucesso!\"
        }
        ";
        } else {
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

    public function listar($filtro, $valorFiltro)
    {
        $campos = "";
        for ($a = 0; $a < count($this->campos); $a++) {
            if ($a < count($this->campos) - 1) {

                $campos .= $this->campos[$a] . ",";
            } else {
                $campos .= $this->campos[$a];
            }
        }
        $this->sql = "SELECT $campos FROM " . $this->tabela . " WHERE " . $filtro . "= " . $valorFiltro . " order by id asc";
        $this->query = mysqli_query($this->conexao(), $this->sql);
        $this->result = mysqli_affected_rows($this->conexao());
        if (mysqli_num_rows($this->query) > 0) {
            echo "
 {
    \"busca\": {
        \"" . $this->tabela . "\" : {[\n        {\n        ";
                $j = 1;
                while ($r = mysqli_fetch_array($this->query, MYSQLI_ASSOC)) {
                    for ($i = 0; $i < count($this->campos); $i++) {
                    echo
"  {\"" . str_replace("_", " ", $this->campos[$i]) . "\": \"" . $r[$this->campos[$i]] . "\"";

                    if ($i <count($this->campos) - 1) {
                        echo "},\n        ";

                    } else {
                        echo "} \n        ";
                    }

                }
        if(mysqli_num_rows($this->query) != $j){
            echo "},\n        ";
        }else{
            echo "}\n        ";
        }
                    $j++;

            }
            echo "\n    }";
            echo "\n }";


        } else {
            echo "Nada";
        }
    }
}