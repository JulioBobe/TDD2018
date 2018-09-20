<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo;
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo;
        $this->assertTrue($mazo->mezclar());
    }
	
    public function testVacio(){
	    $mazo= new Mazo;
	    $this->assertTrue($mazo->vacio());   
    }

    public function testAgregarCarta() {
        $mazo= new Mazo;
        $mazoVacio= new Mazo;
        $carta= new Cartas("Basto", 3);
        $this->assertTrue($mazo->agregarCarta($carta));
    }

    public function testCantidadCartas(){
        $mazo= new Mazo;
        $this->assertEquals($mazo->obtenerCant(),0);
        $carta= new Cartas("Basto", 3);
        $mazo->agregarCarta($carta);
        $this->assertEquals($mazo->obtenerCant(),1);
        $mazo->agregarCarta($carta);
        $this->assertEquals($mazo->obtenerCant(),2);
        $mazo->agregarCarta($carta);
        $this->assertEquals($mazo->obtenerCant(),3);
    }
}

    
