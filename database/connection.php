<?php

$conn = new mysqli ("localhost", "root" , "", "cab_otp");

if($conn == false){
    echo "not connected". $conn->error;
}

?>