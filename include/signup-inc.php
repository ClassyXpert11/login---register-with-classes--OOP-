<?php

if (isset($_POST["submit"])) {
    
    // grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    // instantiate signupcontr class
    include "../classes/signup-class.php";
    include "../classes/signup-controller-classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);

    // running error handlers and user signups

    // going back to front page

}

?>