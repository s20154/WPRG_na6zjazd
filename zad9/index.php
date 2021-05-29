<?php

interface Movable{
    function moveUp();
    function moveDown();
    function moveLeft();
    function moveRight();

}

class MovablePoint implements Movable{
    public $x, $y, $xSpeed, $ySpeed;

    function __construct($x, $y, $xSpeed, $ySpeed){
        $this->x = $x;
        $this->y = $y;
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    function moveUp(){
        $this->x = $this->x + $this->xSpeed;
    }
    function moveDown(){
        $this->x = $this->x - $this->xSpeed;
    }

    function moveLeft(){
        $this->y = $this->y - $this->ySpeed;
    }
    function moveRight(){
        $this->y = $this->y + $this->ySpeed;
    }

    function __toString(){
        return $this->x ." ". $this->y ." ". $this->xSpeed ." ".$this->ySpeed ."\r\n";
    }
}
?>

<?php
$A = new MovablePoint(0,0,1,10);
print($A);

$A->moveUp();
print($A);

$A->moveDown();
$A->moveDown();
print($A);

$A->moveLeft();
print($A);

$A->moveRight();
$A->moveRight();
print($A);
?>