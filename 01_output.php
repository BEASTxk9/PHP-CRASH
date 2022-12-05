<!-- PHP is strict when it comes to using ( ; ) to close a function -->


<!-- There are two ways to comment using php... -->
<?php
// 1. echo 1

/* 2.
echo 1;
echo 2;
*/
?>

<!--  ________________________________ -->

<?php 

// how to display data using php
// echo 'Hello<br><br>';
// ________________________________

// displays data along with the data type eg.string and the amount of characters used in the data type.
// output: string(5) "Hello"

// var_dump('Hello');
// ________________________________

// displays data along with the string quotes
// var_export('Hello');
// ________________________________

// how to print/create an array using php
// print_r([1, 2, 3]);
// ________________________________

?>


<!-- how to use php in html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Post One'; ?></h1>
</body>
</html>