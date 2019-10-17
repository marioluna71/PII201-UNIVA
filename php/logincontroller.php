<?php

$username = $_GET['useremail'];
$userpassword = $_GET['userpassword'];

if ($username == "mario@mario.com" && $userpassword == "123") {
    echo "Welcome my lord ".$username;
} else {
    echo "<a href='registerform.html'>Register NOW</a>";
}



?>