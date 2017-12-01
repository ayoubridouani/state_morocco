<?php
// start session
session_start();
// Unset all of the session variables.
$_SESSION = array();// or session_unset();
foreach ($_COOKIE as $key=> $values) {
    unset($_COOKIE[$key
                   ]);
    }
print_r($_COOKIE);
// Finally, destroy the session.
session_destroy();
header('location: dashboard.php');