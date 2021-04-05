<?php
require '../connection.php';
    $rec_id = $_POST['btnPID'];
    $ca1 = $_POST['ca1'];
    $ca2 = $_POST['ca2'];
    $ca3 = $_POST['ca3'];
    $ca4 = $_POST['ca4'];
    $ca5 = $_POST['ca5'];
    $h_cw = $_POST['h_cw'];
    $exm = $_POST['exm'];
    
    

    $stmt = $conn->prepare("UPDATE student_record SET first_ca=?, second_ca=?,third_ca=?, fourth_ca=?, fifth_ca=?, h_cw=?,exam=? WHERE rec_id=?");
    $stmt->bind_param("dddddddd",$ca1,$ca2,$ca3,$ca4,$ca5,$h_cw,$exm,$rec_id);
    $stmt->execute();

    if($stmt){
        echo 1;
    }else{
        echo 0;
    }
    
?>