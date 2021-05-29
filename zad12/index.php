<?php

trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Klas{
    use A, B {
        A::smallTalk as Asmalltalk;
        B::smallTalk insteadOf A;

        A::bigTalk as AbigTalk;
        B::bigTalk insteadOf A;
    }
}

$A = new Klas;
$A->Asmalltalk();
$A->AbigTalk();
$A->smallTalk();
$A->bigTalk();
?>