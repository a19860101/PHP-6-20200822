<?php
    class Car {
        public $color = 'black';
        private $doors = 4;
        //只能在類別內使用，不包括繼承類別
        protected $wheels = 8;
        //只能在類別內使用，包括繼承的類別
        Public function go(){
            return $this->doors;
        }
    }

    class Truck extends Car {
        public function test(){
            return $this->wheels;
        }
    }

    $bmw = new Car;
    // echo $bmw->doors;
    echo $bmw->wheels;
    // echo $bmw->go();
    $nissan = new Truck;
    // echo $nissan->doors;
    // echo $nissan->color = 'blue';
    // echo $nissan->go();
    // echo $nissan->test();

