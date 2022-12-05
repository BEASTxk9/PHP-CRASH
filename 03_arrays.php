<?php 
// 1. simple array
$numbers = [1, 44, 55, 22];
// 2. simple array
$fruits = array('apple', 'orange', 'pear');

// print_r($numbers);
// var_dump($numbers);
// echo $fruits[1];
// ________________________________

// Associative array
$colors = [
    1 => 'red',
    2 => 'blue',
    3 => 'green'
];

// echo $colors[2];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['blue'];

$people = [
    [
    'first_name' => 'Shane',
    'last_name' => 'Stevens',
    'email' => 'shanestevensxk9@gmail.com'
    ],
    [
        'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com'  
    ],
    [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'bradtraversy@gmail.com'
    ]
];

// echo $person[1]['email'];
var_dump(json_encode($people));

?>