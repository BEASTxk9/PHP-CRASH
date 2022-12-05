<?php
$fruits = ['apple', 'orange', 'pear'];

// get length
// echo count($fruits). '<br>';

// search array
// var_dump(in_array('apple', $fruits));

// add to array
$fruits[] = 'grape';

// add to array
array_push($fruits, 'blueberry', 'strawberry');

// adds to the start of the array
array_unshift($fruits, 'mango');

// remove from the end of the array
array_pop($fruits);

// removes from the start of the array
array_shift($fruits);

// removes index from array
unset($fruits[2]);

// print_r($fruits);
// ________________________________


// split into 2 chunks
// $chunked_array = array_chunk($fruits, 2);
// print_r($chunked_array);
// ________________________________


// how to merge arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

// method 1.
$arr3 = array_merge($arr1, $arr2);
// method 2.
$arr4 = [...$arr1, ...$arr2];

// print_r($arr3);
// print_r($arr4);
// ________________________________

$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];

$c = array_combine($a, $b);
// print_r($c);

// $a acts as the index, $b acts as the value
$keys = array_keys($c);
// print_r($keys);

// flips the values of the arrays
$flipped = array_flip($c);
// print_r($flipped);
// ________________________________


// range displays everythings from the first value up until it reaches the second value
$numbers = range(1, 20);
// print_r($numbers);
// ________________________________


// foreach...?
$newNumbers = array_map(function($number){
    return "Number ${number}";
}, $numbers);

// print_r($newNumbers);
// ________________________________

// filter function
// fn($number)  means foreach number
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

// print_r($lessThan10);
// ________________________________


$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

var_dump($sum);



?>