<?php
echo 'Serve live...<br>';

// <---- OPERATORS ---->

/*
< Less than
> Greater than
<= Less than or equal to
>= greater than or equal to
== equal to
=== identical to
!= Not equal to
!== not identical to
 */
// ________________________________

// <---- IF STATEMENT SYNTAX ---->

/*
if (condition){
    // code to be executed if condition is true
}
*/

// variable...
// $age = 18;

// if else statment...
// if($age >= 18){
//     echo 'You are old enough to vote';
// } else {
//     echo 'Sorry, you are not old enough to vote';
// };
// ________________________________


// <---- ELSEIF STATEMENT ---->

// "F" is used to display the month(current)
// "j" is used to display the date of the month(current)
// "H" is used to display the hour of the day(current)
$t = date("H");

// if($t < 12){
//     echo 'Good Morning';
// } elseif($t < 17){
// echo 'Good Afternoon';
// }
// else {
//     echo 'Good Evening';
// };
// ________________________________

$posts = ['First Post'];

// if(!empty($posts)){
//     echo $posts[0];
// } else {
//   echo 'No Posts';
// };

// echo !empty($posts) ? $posts[0] : 'No Posts';
// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';
// echo $firstPost;

// $firstPost = $posts[0] ?? null;
// echo $firstPost;
// ________________________________


// <---- SWITCH STATEMENTS ---->

$favcolor = 'red';

// switch($favcolor){
//     case 'red':
//         echo 'Your color is red';
//         break;
//     case 'blue':
//         echo 'Your color is blue';
//         break;
//     case 'green':
//         echo 'Your color is green';
//         break;
//     default:
//     echo 'Your favorite color is not red, green or blue';
// };





 ?>

