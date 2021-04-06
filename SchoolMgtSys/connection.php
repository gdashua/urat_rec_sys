
<?php
$servername = "remotemysql.com";
    $username = "17ZLeXMHDA";
    $password = "RDPcr5WPwQ";
     $dbname = " 17ZLeXMHDA";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("connection failed:". $conn->connect_error);
    }

?>
