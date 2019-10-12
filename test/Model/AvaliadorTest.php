<?php

namespace Jamile\Test\Model;
use Jamile\TestesApostas\Model\Leilao as Leilao;
use Jamile\TestesApostas\Model\Usuario as Usuario;
use Jamile\TestesApostas\Model\Lance as Lance;
use Jamile\TestesApostas\Avaliador as Avaliador;

use PHPUnit\Framework\TestCase;

class AvaliadorTest extends TestCase {

    public $lances;
    public $leilao;
    
    // Entrada de Dados
    function setUp(){
        $this->avaliador=new Avaliador();

        $this->leilao = new Leilao();
        $this->leilao->setCodigo(1);
                
        $usuario1 = new Usuario();        
        $usuario2 = new Usuario();
        $usuario3 = new Usuario();
        $usuario4 = new Usuario();

        $lance1 = new Lance();
        $lance2 = new Lance();
        $lance3 = new Lance();
        $lance4 = new Lance();

        /* Lance Usuario 1 */
        $usuario1->setCodigo(1);
        $lance1->setCodigo(1);
        $lance1->setCodLeilao($this->leilao);
        $lance1->setCodUsuario(1);
        $lance1->setValor(15);

        /* Lance Usuario 2 */
        $usuario2->setCodigo(2);
        $lance2->setCodigo(2);
        $lance2->setCodLeilao($this->leilao);
        $lance2->setCodUsuario(2);
        $lance2->setValor(12);

        /* Lance Usuario 3 */
        $usuario3->setCodigo(3);
        $lance3->setCodigo(3);
        $lance3->setCodLeilao($this->leilao);
        $lance3->setCodUsuario(3);
        $lance3->setValor(220);

        /* Lance Usuario 4 */
        $usuario4->setCodigo(4);
        $lance4->setCodigo(4);
        $lance4->setCodLeilao($this->leilao);
        $lance4->setCodUsuario(4);
        $lance4->setValor(103);

        $this->lances = [$lance1, $lance2, $lance3, $lance4]; 
    }

    /* Busca maior lance lista de ordem crescente */
    function testBuscaMaiorLanceCrescente() {
        $this->assertEquals($this->lances[2]->getValor(), $this->avaliador->buscaMaiorLanceCrescente($this->lances));
    }

    /* Busca maior lance lista de ordem decrescente */
    function testBuscaMaiorLanceDecrescente() {
        $this->assertEquals($this->lances[2]->getValor(), $this->avaliador->buscaMaiorLanceDecrescente($this->lances));
    }

    /* Busca menor lance lista de ordem crescente */
    function testBuscaMenorLanceCrescente() {
        $this->assertEquals($this->lances[1]->getValor(), $this->avaliador->buscaMenorLanceCrescente($this->lances));
    }

}
