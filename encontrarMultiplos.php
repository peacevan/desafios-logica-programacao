<?php

class desafioNumeroMutiplo {
    
    static function findMultiploOfNumber($maxMum,$multiplo) {
        for ($i = 1; $i <= $maxMum; $i++) {
            $mode = $i % $multiplo;
            echo($mode == 0) ? $i . ' é multilplo de 3 <br>' : $i .' não é<br>';
        }
    }
}

var_dump($_SERVER["REQUEST_URI"]);

desafioNumeroMutiplo::findMultiploOfNumber(100,3);
