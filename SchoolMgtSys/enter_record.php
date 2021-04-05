<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Entry Page</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <style>
        .landing-wrapper {
            background: url(imgs/office3.jpg) no-repeat center;
            background-size: cover;
            
             padding: 0;
        }
        .landing-wrapper-inner{
          background: #3D000E;
          opacity: .8;
          padding-top:4.5em;
          margin: 0;
          padding-left: 4em;
        }
        .header{
          color: white;
          font-family: 'Merriweather';
          font-size: 2.5em;
        }
        .landing-wrapper-inner2{
          background-color: rgba(255, 255, 255,.9);
          font-family: Arial, Helvetica, sans-serif;
        }
        .user-category{
          padding: 5em 4em;
          border: 1px solid #BFA74E;
        }
        .user-category .btn-primary{
          background-color: #00022e;
        }
        body{
              position: relative;
          }

        .footer{
          position: absolute;
          top: 100%;
          left:0;
          background-color: #001540;
          opacity: .97;
          color: rgba(255, 255, 255,.8);
          font-family: Arial, Helvetica, sans-serif;
        }
        .navbar-brand img{
          width: 3.5em;
          height: 3.5em;
          border-radius: 50%;
        }
        @media screen and (max-width: 700px){
          body{
              font-size: 77% !important;
              position: relative;
          }
          
        }
    </style>
    <script>
      function editRecord(editBtn){
        var id= editBtn.id;
        var inpClass = document.getElementsByTagName(id); 
        for(var i=0; i<inpClass.length; i++){
          inpClass[i].removeAttribute("readonly");
        }
      }
      function saveRecord(editBtn){
        var id= editBtn.id;
        var inpClass = document.getElementsByClassName(id);//to be changed to getElement id so only one element will be edited or saved
        for(var i=0; i<inpClass.length; i++){
          inpClass[i].setAttribute("readonly","readonly");
        }
      }
      function total(inp){
        var newVal = inp.value;
        alert(newVal);
      }
      // var saveBtn = document.getElementByClassName('edit_btn');
      //                     for(var i=0;i<saveBtn.length; i++){
      //                       saveBtn[i].addEventListener('click',);
      //                     }
    </script>

    
   <?php
   //connects to the database
   require 'connection.php'; 
    ?>
</head>

<body style="position: relative; min-height: 100vh; font-family: Arial, Helvetica, sans-serif;">
    <!--navbar begins here-->
  <nav class="navbar navbar-expand-lg navbar-light  nabar-right">
      <a class="navbar-brand bg-white" href="#"><img src="imgs/urat_logo.jpg" alt="logo"><span>&nbsp; URAT SCHOOLS</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
             <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item active">
             <a class="nav-link" href="#">STUDENT</a>
          </li>
    
          <li class="nav-item">
            <a class="nav-link" href="#">ADMIN</a>
          </li>
          
          <li class="nav-item bg-white">
            
            <a class="nav-link" href="#" style="color: violet;">TEACHER</a>
          </li>
        </ul>
      </div>
    </nav> 
    <!--header begins here-->
    <?php if(!isset($_POST['class']) || !isset($_POST['sch_subject']) || ($_POST['class']==='none') || ($_POST['sch_subject']==='none')){ ?>
        <div class="container-fluid">
          <div class="container">
            
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " class="login-form"  method=POST>
          <div class="form-group">
                    <select name='sch_subject' class="form-control mr-sm-2 mb-3" >
                        <option value="none">Select Subject</option>
                        <option value='MATHMEMATICS'>MATHEMATICS</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='MARKETING'>MARKETING</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <select name='class' class="form-control mr-sm-2 mb-3">
                        <option value="none">Select Class</option>
                        <option value='SS 2A'>SS 2A</option>
                        <option value="SS 2B">SS 2B</option>
                        <option value="JSS 2B">JSS 2B</option>
                        <option value="JSS 2A">JSS 2A</option>
                        <option value="PR. 5">PR. 5</option>
                      </select>
                  </div>
                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5">GET RECORDS</button>
                  </div>
                </form>
          </div>
          <?php } else { require 'get_class_sub_record.php' ?>
   
            <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <!--this is the page teachers will be redirected to when they log in to enter records for students who havve been registered by the admin-->

                <div class="container-fluid">
                <h5>
                  <b><span><?php echo $_POST['class'] ?></span>/
              <span><?php echo $_POST['sch_subject'] ?></span></b>   
            </h5>                                                                    
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>

                          <th>Admission No</th>
                          <th>Student Name</th>
                          <th>C.A 1</th>
                          <th>C.A 2</th>
                          <th>C.A 3</th>
                          <th>C.A 4</th>
                          <th>C.A 5</th>
                          <th>H/CW</th>
                          <th>EXAM</th>
                          <th>TOTAL</th>  
                          <th>CLASS AVERAGE</th>
                          <th>RANK</th>
                          <th>GR</th>
                          <th>*</th>
                          <th>*</th>
                        </tr>
                      </thead>
                      <tbody>

                          <?php while($stmt->fetch()) { ?>
                        <tr id="<?php echo $rec_id ?>">
                          <td><?php echo $a_no ?></td>
                          <td><input type="text" class="std_name" value="<?php echo $std_name ?>" readonly="readonly" class="nam1f nam2"></td>
                          <td><input type="number" class="ca1" min=0 max=10 value="<?php echo $ca1 ?>" readonly="readonly" class="nam1f nam2"></td>
                          <td><input type="number" class="ca2" min=0 max=10  value="<?php echo $ca2 ?>" readonly="readonly" class="nam1f nam2"></td>
                          <td><input type="number" class="ca3" min=0 max=10  value="<?php echo $ca3 ?>" readonly="readonly" class="nam1f nam2"></td>
                          <td><input type="number" class="ca4" min=0 max=10 value="<?php echo $ca4 ?>" readonly="readonly" class="nam1f nam2"></td>
                          <td><input type="number" class="ca5" min=0 max=10 value="<?php echo $ca5 ?>" readonly="readonly" class="nam1f nam2"></td>
                          <td><input type="number" class="h_cw" min=0 max=10 value="<?php echo $h_cw ?>" readonly="readonly" class="nam1f nam2"></td>
                          <td><input type="number" class="exm" min=0 max=40 value="<?php echo $exm ?>" readonly="readonly" class="nam1f nam2"></td>
                          <td>69</td>
                          <td>50</td>
                          <td>2</td>
                          <td>B</td>
                          <td ><button class="edit_btn"  id="edit_btn" onclick=editRecord(this)>edit</button></td>
                          <td><button class="save_btn"  id="save_btn">save</button></td>
 
                        </tr>
                        <?php } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          <?php } ?>
               
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid text-center footer p-4" style="position: absolute; bottom: 0;left: 0;" >
          <p>&copy; Gamie Technologies 2021</p>
          
        </div>
    </div>
    <script>
  $(document).ready(function(){
    $(".save_btn").click(function(){
        let btnP = $(this).parent().parent();
        let btnPID = btnP.attr('id');
        //alert(btnPID);
      let inpSelector1 = "#"+btnPID+" .ca1";
      let inpSelector2 = "#"+btnPID+" .ca2";
      let inpSelector3 = "#"+btnPID+" .ca3";
      let inpSelector4 = "#"+btnPID+" .ca4";
      let inpSelector5 = "#"+btnPID+" .ca5";
      let inpSelector6 = "#"+btnPID+" .h_cw";
      let inpSelector7 = "#"+btnPID+" .exm";
      let ca1 = $(inpSelector1).val();
      let ca2 = $(inpSelector2).val();
      let ca3 = $(inpSelector3).val();
      let ca4 = $(inpSelector4).val();
      let ca5 = $(inpSelector5).val();
      let h_cw = $(inpSelector6).val();
      let exm = $(inpSelector7).val();
      
       $.post("crudFiles/update_entry.php",
         {
            btnPID: btnPID,
            ca1: ca1,  
           ca2: ca2,
            ca3: ca3,
            ca4: ca4,
            ca5: ca5,
           h_cw: h_cw,
           exm: exm
         },
          (data)=>{
            if(data){
              alert("update successful");
            }
          }
          );
         
    
    });
 
    $(".edit_btn").click(function(){
        let btnP = $(this).parent().parent();
        let btnPID = btnP.attr('id');
        //alert(btnPID);
      let inpSelector1 = "#"+btnPID+" .ca1";
      let inpSelector2 = "#"+btnPID+" .ca2";
      let inpSelector3 = "#"+btnPID+" .ca3";
      let inpSelector4 = "#"+btnPID+" .ca4";
      let inpSelector5 = "#"+btnPID+" .ca5";
      let inpSelector6 = "#"+btnPID+" .h_cw";
      let inpSelector7 = "#"+btnPID+" .exm";

      if($(this).text()==="edit"){
        $(inpSelector1).removeAttr("readonly");
      $(inpSelector2).removeAttr("readonly");
      $(inpSelector3).removeAttr("readonly");
      $(inpSelector4).removeAttr("readonly");
      $(inpSelector5).removeAttr("readonly");
      $(inpSelector6).removeAttr("readonly");
      $(inpSelector7).removeAttr("readonly");  
      $(this).text("reverse");
      }else{
        $(inpSelector1).prop("readonly","readonly");
        $(inpSelector2).prop("readonly","readonly");
        $(inpSelector3).prop("readonly","readonly");
        $(inpSelector4).prop("readonly","readonly");
        $(inpSelector5).prop("readonly","readonly");
        $(inpSelector6).prop("readonly","readonly");
        $(inpSelector7).prop("readonly","readonly");
      $(this).text("edit");
      }
     
    });
});
    </script>
</body>
</html>