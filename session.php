<?php 
    // Start the session
    // https://www.php.net/manual/en/session.configuration.php
    session_start([
        "cache_expire" => 1, // minutes
        'cookie_lifetime' => 60, // second
    ]);

    // Set session variables
    $_SESSION["name"]= "openstack";
    echo json_encode(array(
        "session" => $_SESSION,
        "server" => $_SERVER["REMOTE_ADDR"]
    ));
?>
