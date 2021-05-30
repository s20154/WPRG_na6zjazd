<?php
class Factorial {
    protected $n;
    function __construct($n){
        if(gettype($n) != "integer"){
            echo "Nie liczba lub brak argumentu";
        } else {
            $this->n = $n;
        }
    }
    function result() {
        if(isset($this->n)){
            $n = $this->n;
            $factorial = 1;
            for ($x=$n; $x>=1; $x--)
            {
                $factorial = $factorial * $x;
            }
            return $factorial;
        }
    }
}
?>