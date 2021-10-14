<?php

$conn=mysqli_connect('localhost','root','','connect');


$fname=$_POST['fname'];
$Contact=$_POST['Contact'];
$email=$_POST['email'];
$Concern=$_POST['Concern'];




$query="INSERT INTO teamfactory(fname,Contact,email,Concern)VALUES('$fname','$Contact','$email','$Concern')";
$results=mysqli_query($conn,$query);

if($results==TRUE){
    echo"Succesfully";
}else{
    echo"TRY AGAIN";
}
?>