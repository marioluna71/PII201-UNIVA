<?php

    $username = $_POST['username'];
    $usermail = $_POST['useremail'];
    $userpassword = $_POST['userpassword'];
    
    //echo $username."-".$usermail."-".$userpassword;

$server = "localhost";
$serveruser = "root";
$password = "";
$database = "univa";

$connection = mysqli_connect($server, $serveruser, $password, $database);


    if ($connection) {
        // echo "You are connected";
     
        $sqlquery = "INSERT INTO users (username, useremail, userpassword) VALUES ('$username', '$usermail', '$userpassword');";
        //print $sqlquery;

        $result = mysqli_query($connection, $sqlquery);

        if ($result) {
            print "New user created successfully";
        } else {
            print "Ups: something is wrong"; 
        }
        
     
     }else{
         echo "You are not connected";
     }

?>