<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css" />
    <title>Tasker V.02 |LOGIN</title>
  </head>
  <body>




      <div class="text-center " style="margin:auto auto; margin-top:10%; width:50%; background-color: #07112f; padding:2%; color:#daa520; border-radius: 15px; border: 2px solid #daa520">

              <div class="card-body container" id="login-container">
                <h5 class="card-title" style="font-size: 1.9em;  margin-bottom: 5%;">Login</h5>
                <form action="admin/login-admin.php" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"  name="user_name" required>
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">***</span>
                    </div>
                    <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="user_pass" required>
                </div>


                <a href="#" class="btn btn-secondary">Reset</a>
                <input type="submit" class="btn  btn-success" Value ="Login" />
                <a href="php-files/register.php" class="btn  btn-warning">Register</a>
              </div>
              </form>
      </div>
  

  
  </body>
</html>