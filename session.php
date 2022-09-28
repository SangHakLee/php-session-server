<?php 
    // https://www.php.net/manual/en/session.configuration.php
    session_start([
        "cache_expire" => 1, // minutes
        'cookie_lifetime' => 60, // second
    ]);

    $_SESSION["hostname"]= gethostname();

    echo json_encode(array(
        "session" => $_SESSION,
        "server" => $_SERVER["REMOTE_ADDR"]
    ));
?>
