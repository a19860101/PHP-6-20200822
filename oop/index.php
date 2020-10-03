<?php
    class Test {
        //屬性(變數)
        public $x = 100;
        public $y = 'Hello';
        
        //方法(函式)
        public function go(){
            return 'gogo!';
        }

        public function qq(){
            $ans = $this->x * 2;
            return $ans;
        }   

    }
    
    //建立實體
    $test = new Test;
    // var_dump($test);
    // echo $test->x;
    // echo $test->y;

    // echo $test->go();
    echo $test->qq();