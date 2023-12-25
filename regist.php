<?php
$firstName = $_REQUEST["firstname"];
$lastName = $_REQUEST["lastname"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$confirmPassword = $_REQUEST["confirmpassword"];

if(isset($_POST['regist-btn'])){

$host="localhost";
$user="root";
$password="";
$db="ahmed";

$conn =mysqli_connect($host,$user,$password,$db);

$insert= "insert into regist values('$firstname','$lastname','$email','$password','$confirmpassword')";

mysqli_query($conn,$insert);

if($conn){
    
    echo("<h1 style=color:green;> Your Registartion is Done!</h1>");
    

}
else{
    echo("<h1 style=color:red;> Your Registartion is Failed</h1>");
}

}
?>











