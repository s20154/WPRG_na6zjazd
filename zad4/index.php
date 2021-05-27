<?php
class Calculator {
    private $a;
    private $b;
    function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }

    public function add(){
        return $this->a + $this->b;
    }
    public function subtract(){
        return $this->a - $this->b;
    }
    public function multiply(){
        return $this->a * $this->b;
    }
    public function divide(){
        if($this->b == 0){
            return 'Nie dzielimy przez zero!!!!!';
        }
        return $this->a / $this->b;
    }
}
?>
<?php
$c = new Calculator(20,0);
print($c->divide());
?>