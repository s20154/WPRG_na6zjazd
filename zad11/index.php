<?php

trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World';
    }
}

class Klas{
    use Hello;
    use World;

    function testTraits(){
        $this->sayHello();
        $this->sayWorld();
    }
}

$A = new Klas;
$A->testTraits();

?>