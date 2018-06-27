<?php
include ('login.php');
if((isset($_SESSION['username']) !=''))
{
  header('Location: backend4.php');
}
?>
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Survival Games prisijungimas</title>
<link rel="stylesheet" href="../css/neon.css" type="text/css" />
</head>
 
<body>

<!-- <h1>PHP Login Form with Session</h1>
<div class="loginBox">
<h3>Login Form</h3> -->
<br><br> 
<div class="container">
    <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="card text-white p-5 bg-primary" >
            <div class="card-body">
              <h1 class="mb-4">Prisijungimo forma</h1>
              <form action="" method="POST">
                <div class="form-group">
                  <label>Email address</label>
                  <input type="text" class="form-control" placeholder="Enter email" name="username"> </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password"> </div>
                <button type="submit" class="btn btn-secondary mt-3">Login</button>
                <div class="error mt-2" style="color:red"><?php echo $error;?></div>
              </form>
            </div>
          </div>
    </div>
    </div>
</div>

</div>
</body>
</html>