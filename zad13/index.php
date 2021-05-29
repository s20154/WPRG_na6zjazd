<?php

trait Counter {
    function inc(){
        static $c;
        //if(!isset($c)){
        //    $c = 0;
        //    return;
        //}
        $c++;
        echo "Wartosc:\r\t" . $c . "\r\n";
    }
}

class Jeden{
    use Counter;
}

class Dwa{
    use Counter;
}

$jeden = new Jeden;
$dwa = new Dwa;

$jeden->inc();
$jeden->inc();
$dwa->inc();
$jeden->inc();
$dwa->inc();

?>