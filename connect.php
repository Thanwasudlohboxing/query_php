<?php
    $conn = mysqli_connect("localhost","root","","login") or die("Error :" .mysqli_error($con));
    // if($conn){
    //     echo "Connect Success";
    // } else{
    //     echo "Error :" . mysqli_error($conn);
    // }
    mysqli_query($conn,"SET NAMES 'utf8' ");
?>
