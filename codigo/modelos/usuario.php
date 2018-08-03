<?php

class usuario
{

    private $cod_usuario;
    private $nome;
    private $cod_tip;
    private $senha;
    private $email;



    public function __construct($cod_usuario, $nome, $cod_tip, $senha, $email)
    {
        $this->cod_usuario = $cod_usuario;
        $this->nome = $nome;
        $this->cod_tip = $cod_tip;
        $this->senha = $senha;
        $this->email = $email;

    }

    public function getIdUsuario()
    {
        return $this->cod_usuario;
    }

    public function setIdUsuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;
    }

    public function getNomeUsuario()
    {
        return $this->nome;
    }

    public function setNomeUsuario($nome)
    {
        $this->nome = $nome;
    }

    public function getIdTipoUsuario()
    {
        return $this->cod_tip;
    }

    public function setIdTipoUsuario($cod_tip)
    {
        $this->cod_tip = $cod_tip;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

}