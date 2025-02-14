<?php
$servername = 'MySQL-8.2';
$username = 'root';
$password = '';
$dbname = 'RegisterUser';

$conn = mysqli_connect ( $servername, $username, $password, $dbname );

if(!$conn){
    echo 'PISDA!!' ;
    die ( "Connection_failed" );
}
else{
    echo 'получилось)!!' ;
    echo $conn->error;
} ?>