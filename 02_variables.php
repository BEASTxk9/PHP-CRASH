<?php
// <---- PHP DATA TYPES ---->

/*
- String:    series of characters surrounded by quotes
- Interger:  Whole numbers
- Float:     Decimal numbers
- Boolean:   true or false
- Array:     special variable, which can hold more than one value
- Object:    a class
- Null:      Empty variable
- Resource:  special variable that holds a resource 
*/
// ________________________________

// <---- VARIABLE RULES ---->

/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- Variables cant start with a number
- Variables can only contain alpha-numeric charaters and underscores (A-z, 0-9, and _)
- Variables are case-sensitive ($name and $NAME are two different variables)
*/
// ________________________________


// how to create a variable
$br = '<br>';
$name = 'Brad'; // string
$age = 40; // int
$has_kids = true; 
$cash_on_hand = 20.75; // float
// ________________________________

// how to display variables
// echo 'Name: '. $name. $br;
// echo 'Age: '.$age. $br;
// echo 'Has kids? '. $has_kids. $br; 
// becuase there is not real value it will display 1 meaning true  by default ...if it displayed 0 it means false by default...

// ... to fix this issue you would use var_dump becuase var dump displays the data type and its value
// var_dump($has_kids, $br);
// var_dump($cash_on_hand, $br);
// ________________________________

// how to call a variable in a sentence...

// PHP METHOD
// echo $name. ' is '. $age. ' years old.';

// OR

// JS METHOD
// echo "${name} is ${age} years old.";
// ________________________________

// How to create sums using variable
$x = 5 + 5;
// var_dump($x);

// echo 10 -5;
// echo 5 * 6;
// echo 10 / 2;
// echo 10 % 3;
// ________________________________

// how to create a const
// define('HOST', 'localhost');
// define('DB_NAME', 'dev_db');


// how to display const
// echo HOST, '<br>';
// echo DB_NAME;

?>