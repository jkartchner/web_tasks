<?php
    session_start();
    $_SESSION['loggedIn'] = false;
    $_SESSION = array();

    // finally destroy the session
    session_destroy();

    header("Location: /tasks");

    //echo "You have logged out";
    //sleep(0.5);

    //echo "<META http-equiv='refresh' content='5;URL=http://www.scribesslate.com'>";
?>

