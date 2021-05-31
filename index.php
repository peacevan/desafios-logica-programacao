<?php

class desafioNumeroMutiplo {
    static function findMultiploOfNumber($maxMum,$multiplo) {
        for ($i = 1; $i <= $maxMum; $i++) {
            $mode = $i % $multiplo;
            echo($mode == 0) ? $i . ' é multilplo de 3 <br>' : $i .'não é';
        }
    }
}

desafioNumeroMutiplo::findMultiploOfNumber(100,3);
