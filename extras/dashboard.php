<?php
// add this to everypage that is linked to a session
session_start();

if (isset($_SESSION['username'])) {
    echo '<h1>WELCOME ' . $_SESSION['username'] . '!</h1>';
    // links back to home page and destroys the session
    echo '<a href="logout.php">Logout</a>';
} else {
    echo '<h1>WELCOME GUEST!</h1>';
    // link back to home page
    echo '<a href="/13_sessions.php">Home</a>';
}

?>