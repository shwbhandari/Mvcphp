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
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/mvc/view/logout.php">Logout</a>
        </li>
      </ul>
    </div>  
    </div>
    </nav> 
    <br>
        <div class="col-lg-5 mx-auto">
            <form action="index.php?controller=employees&action=update" method="post">
                <h3>User detail</h3>
                <hr/>
                <input type="hidden" name="id" value="<?php echo $datas["employee"]->id ?>"/>
                Name: <input type="text" name="Name" value="<?php echo $datas["employee"]->Name ?>" class="form-control"/>
                Surname: <input type="text" name="Surname" value="<?php echo $datas['employee']->Surname ?>" class="form-control"/>
                Username: <input type="text" name="Username" value="<?php echo $datas['employee']->Username ?>" class="form-control"/>
                Email: <input type="text" name="email" value="<?php echo $datas['employee']->email ?>" class="form-control"/>
                phone: <input type="text" name="phone" value="<?php echo$datas['employee']->phone ?>" class="form-control"/>
                <br>
                <div class="row">
                <input type="submit" value="Save" class="btn btn-success"/>&nbsp;
              
            </form>
            <a href="index.php?controller=employees&action=delete" class="btn btn-danger">Delete</a>
            </div>
        </div>
       
    </body>
</html>