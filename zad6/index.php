<?php
    class Student{
        private $name;
        public function __construct($name){
            $this->name = $name;
        }

        public static function withID($string, $number){
            $temp = new Student($string);
            $temp->ID = $number;
            return $temp;
        }

        public static function withSecondName($string, $string2){
            $temp = new Student($string);
            $temp->secondName = $string2;
            return $temp;
        }

        public function __get($property) {
            if ($property === 'name'){
                return $this->name;
            }
        }
        public function __set($property, $value) {
            if ($property === 'name'){
                $this->name === $value;
            }
        }

    }
?>
<?php
$B = Student::withID("Damian", 10);
echo $B->ID;
$C = Student::withSecondName("Damian2","DrugieImieDamiana");
echo $C->secondName;
print_r($B);
?>