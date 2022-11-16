<?php

$HOSTNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="signup_form";


$con=mysqli_connect( $HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if ($con){
    echo "Connection successful";
}else{
    die(mysqli_error($con));
}
?>
