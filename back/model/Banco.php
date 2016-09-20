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

            echo "
            {
  \"banco\": {
    \"tipo_banco\": \"MySQL\",
    \"conectado\": true,
    \"ipbanco\": \"$this->host\",
    \"erro\": \"" . mysqli_error($this->link) . "\",
    \"obs\": \"SHOW o/\"
  }
}";
            return $this->link;
        } else {
            echo "
            {
  \"banco\": {
    \"tipo_banco\": \"MySQL\",
    \"conectado\": true,
    \"ipbanco\": \"$this->host\",
    \"erro\": \"" . mysqli_error($this->link) . "\",
    \"obs\": \"SHOW o/\"
  }
}";
            return die();
        }
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

    public function listar($filtro)
    {
        $this->sql = "SELECT * FROM " . $this->tabela . " WHERE " . $filtro . " order by id desc";
        $this->query = mysqli_query($this->conexao(), $this->sql);
        $this->result = mysqli_affected_rows($this->conexao());
        if (mysqli_num_rows($this->query) > 0) {
            echo "
            {
            \"busca\": {
            \"tabela\": \"" . $this->tabela . "\",
            \"campos\": \"[";
            for ($i = 0; $i < count($this->campos); $i++) {
                echo "\"nome_campo\": \"" . str_replace("_", " ", $this->campos[$i]) . "\",";
                $j = 1;

                echo "\"valores\": [{";
                while ($r = mysqli_fetch_array($this->query, MYSQLI_ASSOC)) {

                    echo "\"valor\": \"".$r[$this->campos[$i]]."\"";
//                for ($i = 0; $i < $cont; $i++) {
//                    if ($i < $cont - 1) {
//                        $stringParametros .= $this->campos[$i] . "=" . $r[$this->campos[$i]] . "&";
//                    } else {
//                        $stringParametros .= $this->campos[$i] . "=" . $r[$this->campos[$i]];
//                    }
//                }
                    if(mysqli_num_rows($this->query) != $j){

                        echo "},";
                    }else{
                        echo "}";
                    }
                $j++;
                }
                echo "]";
                if($i != count($this->campos) - 1){

                    echo "},";
                }else{
                    echo "}";
                }
            }

            echo "]}";
            echo "}";
        } else {
            echo "";
        }
    }
}