<?php
    trait ShowParent{
        public static function getParent(){
            return __CLASS__;
        }
        
    }

    class Klas{
        use ShowParent;
    }


    $A = new Klas;
    print($A->getParent());
?>