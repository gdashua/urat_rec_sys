<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urat Homepage</title>

    
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
        .footer{
          background-color: #14212e;
          opacity: .97;
          color: rgba(255, 255, 255,.8);
          font-family: Arial, Helvetica, sans-serif;
        }
        .navbar li a {color: rgb(180, 163, 3) !important;}

        .navbar-brand img{
          width: 3.5em;
          height: 3.5em;
          border-radius: 50%;
        }
        .welcome-header{
            padding: 3rem;

          }
          body{
              position: relative;
          }

        .footer{
          position: absolute;
          top: 100%;
          left:0;
        }
        #power{
          margin: 0 auto;
          width: 10px;
          height: 10px;
          background-color: transparent;
          border-radius:50%;
          animation-name: blinking;

          animation-duration: 2s;
          animation-iteration-count: infinite;
          animation-timing-function: ease-out;
        }
        @keyframes blinking {
    from {background-color: transparent;padding:0;}
    to {background-color: yellow;padding:.3em;}
}
        @media screen and (max-width: 700px){
          .welcome-header{
            padding: 0  ;
            margin: 0 auto;
          }
          body{
      font-size: 77% !important;
    }
          .landing-wrapper-inner{
           text-align: center;
          padding-left: 0;
        }
        .navbar{
          background-color: #0f0f0f;
        }
        }
        
    </style>
</head>

<body>
    <!--navbar begins here-->
  <nav class="navbar navbar-expand-lg navbar-dark   nabar-right" >
      <a class="navbar-brand  " href="#"><img src="imgs/urat_logo.jpg" alt="logo"> URAT SCHOOLS </a>
      <button class="navbar-toggler   " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon " ></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
             <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">VIEW RECORD</a>
          </li>
          <li class="nav-item active">
             <a class="nav-link" href="#">STUDENT</a>
          </li>
    
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">ADMIN</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="reg_student.php">Register a Student</a>
              <a class="dropdown-item" href="add_student.php">Add Student</a>
              <a class="dropdown-item" href="add_subject.php">Add Subject</a>
              <a class="dropdown-item" href="add_class.php">Add a Class</a>
            </div>
          </li>
          
          <li class="nav-item bg-white">
            
            <a class="nav-link" href="#" >TEACHER</a>
          </li>
        </ul>
      </div>
    </nav> 
    <!--header begins here-->
    <div class="container-fluid landing-wrapper"  >
        <div class="landing-wrapper-inner">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12  welcome-header" style="position:relative">
                <div id="power" style="position:absolute; top:0;left:5%;"> </div>
                <p class="header">Students Records Manager</p>
                <p style="font-family: 'Merriweather'; color: rgba(240, 233, 233,.8);">Welcome to Urat Schools students records management software</p>
              </div>
            </div>
          </div>
        </div>
        <div class="landing-wrapper-inner2">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4 user-category">
                <h5><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp; Student</h5>
                <p><b> Note: </b><strong>You need a pin and you admission number to view your result</strong> </p>
                <a href="student_result_view.php" class="btn btn-primary">Login here</a>
              </div>
              <div class="col-md-4 user-category">
                <h5><i class="fa fa-suitcase" aria-hidden="true"></i>&nbsp; Teacher</h5>
                <p><b> Note: </b><strong>You must login to enter your records</strong> </p>
                <a href="enter_record.php" class="btn btn-primary">Login here</a>
              </div>
              <div class="col-md-4 user-category">
                <h5><i class="fa fa-star" aria-hidden="true"></i>&nbsp; Head Teacher</h5>
                <p><b> Note: </b><strong>You must login to view you students results</strong> </p>
                <a href="#" class="btn btn-primary">Login here</a>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid text-center footer p-4">
          <p>&copy; Gamie Technologies 2021</p>
          
        </div>
    </div>
 <script type="text/javascript" src="js/particles.js"></script>
 <script type="text/javascript" src="js/app.js"></script>
 <script type="text/javascript" src="js/owl.carousel.min.js"></script>
 <script type="text/javascript" src="js/myjquery.js"></script>

</body>
</html>