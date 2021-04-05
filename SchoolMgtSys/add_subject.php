<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

    
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
          .navbar-brand img{
          width: 3.5em;
          height: 3.5em;
          border-radius: 50%;
        }
        form{margin-top:30%}
        .footer{
          position: absolute;
          top: 100%;
          left:0;
          background-color: #001540;
          opacity: .97;
          color: rgba(255, 255, 255,.8);
          font-family: Arial, Helvetica, sans-serif;
        }
        @media screen and (max-width: 700px){
          body{
              font-size: 77% !important;
              position: relative;
          }
          
        }

    </style>
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
        <div class="container-fluid">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <!--form data will go to  subjects table-->
                <form action="#" class="login-form">
                  <div class="form-group">
                    <select class="form-control mr-sm-2 mb-3">
                        <option value="first_ca">Select Section</option>
                        <option value="first_ca">Reception</option>
                        <option value="second_ca">Primary</option>
                        <option value="third_ca">JSS</option>
                        <option value="first_ca">SSS</option>
                      </select>
                  </div>
                   
                  <div class="form-group">
                    <input type="text" class="form-control rounded-left" placeholder="New  Subject" required>
                  </div> 
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Add Subject</button>
                  </div>
                </form>
                 
               
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid text-center footer p-4"  >
          <p>&copy; Gamie Technologies 2021</p>
          
        </div>
    </div>
</body>
</html>