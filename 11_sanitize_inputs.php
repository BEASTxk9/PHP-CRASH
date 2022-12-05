<?php
if (isset($_POST['submit'])) {

    // htmlspecialchars is used to prevent any malicious inputs eg. <h1>hello</h1> will display <h1>hello</h1> and not change the style of the text

    // method 1.
    // $name = htmlspecialchars($_POST['name']) ;

    // method 2.
    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ;


    // method 3.
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    // display
    echo $name;
}
?>

<!-- form using php -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

    <!-- name -->
    <div>
        <label for="name">Name:</label><br>
        <input type="text" name="name">
    </div>
    <br>
    <!-- submit -->
    <input type="submit" name="submit" value="Submit">

</form>