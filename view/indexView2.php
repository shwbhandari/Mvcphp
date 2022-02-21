<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>MVC</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
       
      </ul>
    </div>  
    </div>
    </nav>
       
    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-80 gradient-custom-3">
    <br>
      <div class="container h-60"><br>
        <div class="row d-flex justify-content-center align-items-center h-70">
          <div class="col-10 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
  
                <form action="index.php?controller=Users&action=insert" method="POST">
                                                                                                                                                
                  <div class="form-outline mb-4">
                    <input type="text"  name="Username" id="username" class="form-control form-control-lg" placeholder="Username" required/>
                    <h6 id="usercheck" style="color:red;">
                    **username is missing
                    </h5>
                  </div>
                  <div class="form-outline mb-3">
                    <input type="text" name="Firstname" id="Firstname" placeholder="Firstname"id="Firstname" class="form-control form-control-lg" required/>
                    <h6 id="firstnamecheck" style="color:red;">
                    **firstname is missing
                    </h6>
                  </div>
                  <div class="form-outline mb-3">
                    <input type="text" name="Lastname" id="Lastname" placeholder="Lastname" class="form-control form-control-lg" required/>
                    <h6 id="lastnamecheck" style="color:red;">
                    **lastname is missing
                    </h6>
                  </div>
                  <div class="form-outline mb-3">
                    <input type="text" name="email" id="Email" class="form-control form-control-lg" placeholder="Email" required/>
                    <div id="error_email"></div>
                  </div>
                  <div class="form-outline mb-3">
                    <input type="mobile" name="mobile" id="mobile" class="form-control form-control-lg" placeholder="Mobile" required/>
                    <h6 id="mobilecheck" style="color:red;">
                    **mobileno is missing
                    </h6>
                  </div>
                
                  <div class="form-outline mb-3">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" required/>
                    <h6 id="passcheck" style="color:red;">
                    **password is missing
                    </h5>
                  </div>
                  <small id="emailvalid" class="form-text text-muted invalid-feedback">
                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!" class="fw-bold text-body" required><u>Login here</u></a></p>
                  </small>
                  <button type="submit" name="Send" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
        <!-- <div class="col-lg-7">
            <h3>Users</h3>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
            <?php foreach($data["users"] as $User) {?>
                <?php echo $User["id"]; ?> -
                <?php echo $User["Name"]; ?> -
                <?php echo $User["email"]; ?> -
                <?php echo $User["phone"]; ?>
                <div class="right">
                    <a href="index.php?controller=users&action=detail&id=<?php echo $User['id']; ?>" class="btn btn-info">details</a>
                </div>
                <hr/>
            <?php } ?>
        </section> -->
		
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
    </body>
</html>