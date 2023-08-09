<?php
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);

// Como todas as chaves do exemplo acima foram convertidas para 1, 
// o valor será sobrescrito a cada novo elemento e o valor final atribuído "d", 
// será o único que restará.

//outros exemplos na documentação oficial.
//https://www.php.net/manual/pt_BR/language.types.array.php
?>