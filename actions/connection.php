<?php
$con = mysqli_connect("localhost", "root", "", "votingsystem");
if($con){
    echo "Connection Successful";
}else{
    die(mysqli_error($con));
}


?>