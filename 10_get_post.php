<?php
// <---- $_GET & $_POST SUPERGLOBALS ---->

/*
We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

// used to display the output

// GET
// echo $_GET['name'];
// echo $_GET['age'];
// POST
// echo $_POST['name'];
// echo $_POST['age'];


// used to hide errors that appear before data is submited in the form.
if(isset($_POST['submit'])){
echo $_POST['name'];
echo $_POST['age'];
}

?>

<!-- a tag using php -->
<!-- acts as the output -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Name&age=Age">Click</a>

<br><br>

<!-- form using php -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<!-- name -->
<div>
    <label for="name">Name:</label><br>
    <input type="text" name="name">
</div>
<!-- age -->
<div>
    <label for="age">Age:</label><br>
    <input type="text" name="age">
</div>
<br>
<!-- submit -->
<input type="submit" name="submit" value="Submit">

</form>