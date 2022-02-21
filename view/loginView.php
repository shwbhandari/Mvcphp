<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>MVC</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
         p{
           color:red;      
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
          <a class="nav-link" href="http://localhost/mvc/view/loginView.php">Login</a>
        </li>
       
      </ul>
    </div>  
    </div>
    </nav>  
    <br><br>
    <div class="d-flex justify-content-center"> 
    
        <form id="loginform" method="post" action="../index.php?controller=employees&action=login" class="col-lg-5">
            <h3>Login</h3>
            <hr/>
            <div class="alert alert-warning alert-dismissible fade show"  role="alert">
            <p  id="message"></p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
             <div id="message"></div>
          
             
            Username:<input type="text" name="Username" id="Username"class="form-control"/>
            Password:<input type="text" name="password" id="Password" class="form-control"/>
            <br>
            <div class="text-center">
            <input type="submit" id="loginbutton"value="Submit" class="btn btn-success"/>
            </div>
          <form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
    <script src="../../resources/js/validate.js"></script>  
</body>
</html>