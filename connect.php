<?php
$HOSTNAME ='localhost';
$USERNAME ='suraj';
$PASSWORD= 'password';
$DATABASE ='signup';

//database connection
$con =mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);


//connection check
if ($con){
    echo 'connection successful';
}
else{
    die(mysqli_error($con));
}
?>