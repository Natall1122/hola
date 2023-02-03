<?php

use PHPUnit\Framework\TestCase;
include './src/Coche.php';

class cocheTest extends TestCase {
   public function testReposta(){
       $objeto = new Coche("Seat", "petroleo", 100, 0);
       $this->assertEquals(150, $objeto->reposta(50));
   }       
}


?>