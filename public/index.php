<?php

require_once '../vendor/autoload.php';

use Core\Teste;

try {
    $teste = new Teste();

    var_dump($teste->foo());    
} catch (\Throwable $th) {
    var_dump($th);
}

