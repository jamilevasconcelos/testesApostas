<?php

namespace Jamile\TestesApostas\Model;

class Usuario {

    private $codigo;
    private $nome;
    private $email;

    public function getCodigo(){return $this->codigo;}
    public function getNome(){return $this->nome;}
    public function getEmail(){return $this->email;}

    public function setCodigo($codigo) { $this->codigo = $codigo;}
    public function setNome($nome) { $this->nome = $nome;}
    public function setEmail($email) { $this->email = $email;}

}
