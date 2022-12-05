<?php
// add this to everypage that is linked to a session
session_start();

// destroys session
session_destroy();
header('Location: /13_sessions.php');

?>