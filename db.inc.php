<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "badakhshanuniversity";


try {
    $conn = mysqli_connect($server, $user,$password,$db);
}catch(mysqli_sql_exception){
    echo "Database hasn't been connected succesfully";
    
}

?>