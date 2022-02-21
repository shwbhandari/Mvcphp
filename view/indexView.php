<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>MVC</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
        </style>
        <link rel="stylesheet" href="resources/css/style.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container-fluid align-items-center">
    <a class="navbar-brand" href="#">MVC DEMO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/mvc/index.php">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view/loginView.php">Login</a>
        </li>
       
      </ul>
    </div>  
    </div>
    </nav>  
    <br><br>
    <div class="d-flex justify-content-center"> 
        <form action="index.php?controller=employees&action=insert" method="post" class="col-lg-5">
            <h3><center>Signup<center></h3>
            <hr/>
            Firstname: <input type="text" id="firstname" name="Name" class="form-control"/>
            <h6 id="firstnamecheck" style="color:red;">
                    **firstname is missing
            </h6>
            Lastname: <input type="text" id="lastname" name="Surname" class="form-control"/>
            <h6 id="lastnamecheck" style="color:red;">
                    **lastname is missing
            </h6>
            Username:<input type="text" id="username" name="Username" class="form-control"/>
            <h6 id="usercheck" style="color:red;">
                    **username is missing
            </h6>
            Email: <input type="text" id="email" name="email" class="form-control"/>
            <div id="error_email"></div>
            Password:<input type="text" id="password" name="password" class="form-control"/>
            <h6 id="mobilecheck" style="color:red;">
                    **Enter 10 digit mobile no
            </h6>
            Contact No: <input type="text" id="phone" name="phone" class="form-control"/>
            <h6 id="mobilecheck" style="color:red;">
                    **mobileno is missing
            </h6>
            <div class="text-center">
            <input type="submit" value="Submit" class="btn btn-success"/>
            </div>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
    <script src="resources/js/validate.js"></script>
    </body>
</html>