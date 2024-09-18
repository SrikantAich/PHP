<?php
    $cookie_name = "user";
    $cookie_value = "John Doe";
    //set domain and path to "/" to make the cookie available in the entire domain
    // 86400 = 1 day
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/", "google", 0);
?>