<?php
namespace Jamile\TestesApostas\Model;

class Lance {

    private $codigo;
    private $codleilao;
    private $codusuario;    
    private $valor;

    public function getCodLeilao(){return $this->codleilao;}
    public function getCodigo(){return $this->codigo;}
    public function getCodUsuario(){return $this->codusuario;}
    public function getValor(){return $this->valor;}

    public function setCodLeilao($codleilao) { $this->codleilao = $codleilao;}
    public function setCodigo($codigo) { $this->codigo = $codigo;}
    public function setCodUsuario($codusuario) { $this->codusuario = $codusuario;}
    public function setValor($valor) { $this->valor = $valor;}

}