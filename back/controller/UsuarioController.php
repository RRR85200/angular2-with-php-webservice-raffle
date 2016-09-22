<?php
require_once "../model/Usuario.php";
/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 09/09/2016
 * Time: 13:57
 */
class UsuarioController
{
    private $usuario;
    public function __construct()
    {
        $this->usuario = new Usuario();

        if (isset($_GET["entrar"]) && $_GET['entrar'] == "1") {
			echo $this->usuario->logarUsuario($_GET['email'], $_GET['senha']);
        }

    }
    public function cadastrar()
    {
        if($_GET['nome'] && $_GET['email'] && $_GET['senha']){
            $this->usuario->setNome($_GET['nome']);
            $this->usuario->setEmail($_GET['email']);
            $this->usuario->setSenha($_GET['senha']);

            return $this->usuario->cadastrarUsuario();
        }else{
            return "
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
new usuarioController();