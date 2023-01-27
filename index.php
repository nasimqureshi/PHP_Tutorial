<?php

// $firstName = "Nasim";
// $lastName = " Qureshi";

// echo $firstName . $lastName ." how are you?"


// Addition:
// $a = 15;
// $b = 35;
// $c = $a+$b;
// echo "add: ".$c;
// $c = $a-$b;
// echo "\n subt: \t".$c;

// Coparison Operators
// $x = 5;
// $y = 5;
// var_dump($x == $y);


// if else if statements
$age = 15;

// if($age >= 18)
// if($age >= 19){
//     echo "you can't vote";
//     echo "\n Testing";
// }
// else{
//     echo "Yes you can vote";

if($age >= 18){
    echo "you can vote";
}
elseif($age == 17){
    echo "you can not vote";
}
elseif($age == 16){
    echo "you can not vote";
}
else
{
    echo "Your are under age";
}




?>