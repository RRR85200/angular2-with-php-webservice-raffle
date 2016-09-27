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
        if($_POST['estado'] && $_POST['cidade'] && $_POST['cep'] && $_POST['enderecoPorExtenso']){
            $this->endereco->setCidade($_POST['nome']);
            $this->endereco->setEstado($_POST['email']);
            $this->endereco->setCep($_POST['senha']);
            $this->endereco->setEndereco($_POST['senha']);

            echo $this->endereco->cadastrarEndereco();
        }else{
            echo "
      {
            \"erro\":{
                \"classe\":\"UsuarioController\",
                \"metodo\":\"cadastrar()\"
            },
            \"msg\": \"Não informado algum dos campos obrigatórios!\"
        }
        ";
        }
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