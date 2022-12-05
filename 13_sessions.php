<?php
// <---- SESSIONS ---->

/*
Sessions are a way to store information (in variables) to be used across multiple pages.
Unlike cookies, sessions are store on the server.
*/

// add this to everypage that is linked to a session
session_start();

if (isset($_POST['submit'])) {

    // username input
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ;

    // password input
    $password = $_POST['password'];

    // if username and password match send them to dashboard.php else ...echo 'Incorrect login'
    if ($username == 'john' && $password == 'password')
        {
        $_SESSION['username'] = $username;
        header('Location: /extras/dashboard.php');
        } else{
        echo 'Incorrect Login';
    }
    ;
}
;


?>

<!-- form using php -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

    <!-- name -->
    <div>
        <label for="username">Username:</label><br>
        <input type="text" name="username">
    </div>
    <!-- password -->
    <div>
        <label for="password">Password:</label><br>
        <input type="password" name="password">
    </div>
    <br>
    <!-- submit -->
    <input type="submit" name="submit" value="Submit">

</form>