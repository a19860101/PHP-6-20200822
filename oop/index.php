<?php
    class Car {
        public $color = 'black';
        private $doors = 4;
        //只能在類別內使用，不包括繼承類別
        protected $wheels = 8;
        //只能在類別內使用，包括繼承的類別
        Public function test(){
            return $this->doors;
        }
        //靜態方法
        //靜態方法內，不能用$this
        static function qq(){
            return "HELLO CAR!!";
        }
    }

    echo Car::qq();

    class Truck extends Car {
        public function test(){
            return $this->wheels;
        }
        public function poiu(){
            return Car::qq();
        }
    }

    $bmw = new Car;
    // echo $bmw->doors;
    // echo $bmw->wheels;
    // echo $bmw->go();
    $nissan = new Truck;
    // echo $nissan->doors;
    // echo $nissan->color = 'blue';
    // echo $nissan->go();
    // echo $nissan->test();
    echo $nissan->poiu();


