<?php

/**
 * Created by PhpStorm.
 * User: Márcio Lucas
 * E-mail: marciioluucas@gmail.com
 * Date: 09/09/2016
 * Time: 13:48
 */
class Usuario
{
    private $id;
    private $nome;
    private $email = "marcio";
    private $senha = "123";

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
       return $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
       return $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
       return $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
       return $this->senha = $senha;
    }

    function logarUsuario($email, $senha) {
        if ($this->email == $email && $this->senha == $senha) {
			
            return 
"
{
\"nome\": \"Marcio Lucas\",
\"email\": \"".$email."\"
}";
        }else{
            return
"
{
\"erro:\": \"Erro\"
}
";
        }
    }

    function cadastrarUsuario()
    {
       return $this->cadastrar();
    }

    function alterarUsuario()
    {
       return $this->alterar();
    }

    function excluirUsuario()
    {
        return $this->excluir();
    }

    function listarUsuario()
    {
       return $this->listar();
    }
}