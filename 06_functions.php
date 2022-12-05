<?php
/*
$y = 12;
function registerUser(){
    // global $y;
    // echo $y;
    $x = 10;
    echo 'User Registered';
};
 */


function registerUser($email){
echo $email. 'Registered';
};

// registerUser('shanestevensxk9@gmail.com ');
// ________________________________


// function sum($n1, $n2){
//     return $n1 + $n2;
// };

// // echo sum(5, 5);
// $number = sum(5, 5);
// echo $number;

// OR
// function sum($n1= 5, $n2= 5){
//     return $n1 + $n2;
// };

// $number = sum();
// echo $number;
// ________________________________


$subtract = function($n1, $n2){
    return $n1 - $n2;
};

// echo $subtract(10, 5);
// ________________________________

$multiply = fn($n1, $n2) => $n1 * $n2;
// echo $multiply(2, 2);

?>