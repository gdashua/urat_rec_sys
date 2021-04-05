<?php
 
//    $class =  $_POST['class'] ; echo $class;
//    $sub =  $_POST['sch_subject']; echo $sub;
//   $sql = "SELECT student.admission_no AS a_no, student.l_name  AS std_name, class.class_title AS std_class, student_record.first_ca AS ca1, student_record.second_ca AS ca2, student_record.third_ca AS ca3, student_record.fourth_ca AS ca4, student_record.fifth_ca AS ca5, student_record.h_cw as h_cw, student_record.exam AS exm, sch_subject.sub_title AS sub FROM student_record INNER JOIN student ON student_record.admission_no = student.admission_no  INNER JOIN class ON student_record.class_id = class.class_id INNER JOIN sch_subject ON student_record.sub_id = sch_subject.sub_id WHERE class.class_title = '$class' AND sch_subject.sub_title= '$sub'";
//   $result = $conn->query($sql);  print_r($result);
 $stmt = $conn->prepare("SELECT student_record.rec_id As rec_id, student.admission_no AS a_no, student.l_name  AS std_name, class.class_title AS std_class, student_record.first_ca AS ca1, student_record.second_ca AS ca2, student_record.third_ca AS ca3, student_record.fourth_ca AS ca4, student_record.fifth_ca AS ca5, student_record.h_cw as h_cw, student_record.exam AS exm, sch_subject.sub_title AS sub FROM student_record INNER JOIN student ON student_record.admission_no = student.admission_no  INNER JOIN class ON student_record.class_id = class.class_id INNER JOIN sch_subject ON student_record.sub_id = sch_subject.sub_id WHERE class.class_title = ? AND sch_subject.sub_title= ?");
 $stmt->bind_param("ss", $class_name, $sub_name ); 
 $class_name =  $_POST['class'] ; 
 $sub_name =  $_POST['sch_subject'];
  
    $stmt->execute(); 
    $stmt->store_result();
    $stmt->bind_result($rec_id, $a_no, $std_name,$std_class, $ca1, $ca2, $ca3, $ca4, $ca5, $h_cw, $exm, $sub);
    //print_r($stmt);

    ?>