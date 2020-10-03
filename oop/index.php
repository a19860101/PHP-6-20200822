<?php
    class Car {
        public $doors = 4;
        public $color = 'black';
        Public function go(){
            return 'gogo';
        }
    }

    class Truck extends Car {
        public $weight = 1000;
    }

    $nissan = new Truck;
    // echo $nissan->doors;
    // echo $nissan->color = 'blue';
    // echo $nissan->go();

    class Train extends Car {

    }

    $test = new Train;
    // echo $test->go();
    echo $test->weight;
