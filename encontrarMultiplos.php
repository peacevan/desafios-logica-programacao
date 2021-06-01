<?php

/*
 * encontrar o multiplo de um determinado numero pesquisando  de 1 ate maxNum
 */

class desafios {

    static function findMultiploOfNumber($maxMum, $multiplo):void {
        for ($i = 1; $i <= $maxMum; $i++) {
            $mode = $i % $multiplo;
            echo($mode == 0) ? $i . ' é multilplo de 3 <br>' : $i . ' não é<br>';
        }
    }

    static function fibonacci() {
       
        $fib = array();
        //ternário; 
        for ($i = 0; $i < 15; $i++) {
            $fib[$i] = ($i<2) ? 1 : ($fib[$i-1] + $fib[$i-2]);
            print_r('<br>'.$fib[$i].'<br>');
        }
        return $fib;
    }
       

}

desafios::fibonacci();
