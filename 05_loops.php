<?php
// <---- FOR LOOPS ---->

/*
// FOR LOOP SYNTAX
for (initialize; conditiuon; increment){
    // code to be executed
}
*/

// for($x = 0; $x <= 10; $x++){
// echo 'Number'. $x. '<br>';
// };
// ________________________________


// <---- WHILE LOOP ---->

/*
// WHILE LOOP SYNTAX
while(condition){
    // code to be executed
}
*/

// $x = 1;

// while($x <= 15){
//     echo 'Number'. $x. '<br>';
//     $x++;
// };
// ________________________________


// <---- DO WHILE LOOP ---->

/*
// DO WHILE LOOP SYNTAX
do{
    // code to be executed
} while(condition);

do...while loop will always execute the block of code once even if the condition is false.
*/

// $x = 1;
// do{
//     echo 'Number'. $x. '<br>';
//     $x++;
// } while($x <= 5);
// ________________________________


//  <---- FOREACH LOOP --->

/*
FOREACH LOOP SYNTAX
foreach($array as $value){
    // code to be executed
}
*/

$posts = ['First Post', 'Second Post', 'Third Post'];

// Method 1.
// for($x = 0; $x < count($posts); $x++){
// echo $posts[$x]. '<br>';
// };

// Method 2.
// foreach($posts as $post){
//     echo $post. '<br>';
// };
// ________________________________


// HOW TO INDEX DATA
// foreach($posts as $index => $post){
//     echo $index + 1 . ' - '. $post. '<br>';
// };
// ________________________________



// Associative array displayed using foreach
// $person = [
//     'first_name' => 'Shane',
//     'last_name' => 'Stevens',
//     'email' => 'shanestevensxk9@gmail.com'
// ];


// foreach($person as $key => $value){
//     echo "$key - $value<br>";
// };


?>