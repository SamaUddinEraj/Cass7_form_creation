<?php

    $name = (strlen(trim($_REQUEST["name"]))); 
    if($name>20){
        echo "Too many characters";
        }else{
        echo $_REQUEST["name"];
        }
         echo "<br>";

    $email1 = ($_REQUEST["email"]);
    $V_email = explode('@',$email1);
    if(end($V_email)=='gmail.com') {
        echo $_REQUEST["email"];
    } else{
        echo "please login with your gmail";
    };
    echo "<br>";
    

    $number =(strlen(trim((($_REQUEST["number"])))));
    if ($number>11){
        echo "Phone number is not valid"; 
        }else{
          echo  $_REQUEST["number"] ;
        }
        echo "<br>";

    $password =(strlen(trim ($_REQUEST["password"])));
    if($password<=10){
        echo $_REQUEST["password"];
    }else{
        echo "Invalid password";
    }echo "<br>";

    $comments =(strlen(trim($_REQUEST["comments"])));
    if($comments>60){
        echo "Too many characters";
        }else{
        echo $_REQUEST["comments"];
        }
         echo "<br>";
       
   

?>