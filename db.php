<?php

/*$name= $_REQUEST["name1"];
$email= $_REQUEST["email1"];
$feedback= $_REQUEST["feedback1"];

if(isset($_POST["btn1"])){

$host="localhost";
$user="root";
$db="secretdb";

$conn= mysqli_connect($host,$user,$db);

$insert="insert into secrettabs values('$name','$email','$feedback')";

mysqli_query($conn,$insert);


if($conn){

    echo("<h1 style='color:green;'> Done!</h1>");}

else{

    echo("<h1 style='color:red;'>Failed!</h1>");

}
}
*/



$name = $_REQUEST["name1"];
$email = $_REQUEST["email1"];
$feedback = $_REQUEST["feedback1"];

if (isset($_POST["btn1"])) {

    $host = "localhost";
    $user = "root";
    $password= "";
    $db = "secretdb";  

    $conn = mysqli_connect($host, $user, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

   $insert = "INSERT INTO secrettabs (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
  
    if (mysqli_query($conn, $insert)) {
        echo("<h1 style='color:green;'>Done!</h1>");
    } else {
        echo("<h1 style='color:red;'>Failed!</h1>");
    }

    
}


?>