<?php
$conn= mysqli_connect("localhost","root","","adbrokers");
if(!$conn){
   die("connect failed".mysqli_connect_error() ) ;
    
}
else{
    echo "Connection succesfully";
    
    
}
?>