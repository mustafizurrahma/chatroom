<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Singin Now [ My Chat Room ]</title>
    <link rel="shortcut icon" href="image/favicon.jpg" type="image/favicon.jpg">
    <link rel="stylesheet" href="css/singin.css">
  </head>
  <body>
        <div class="sing-form">
          <form action="" method="POST">
              <div class="form-header">
                <h2>Sing In</h2>
                <p>Login To My Chat</p>
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="" placeholder="Type Your Email" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" id="" autocomplete="off" required>
              </div>
              <div class="small">Forget Password? <a href="forget_pass.php">Click Here</a> </div></form>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sing_in">Sing In</button>
              </div>
             <?php //include("singin_user.php");?> 
          </form>
          <!-- Creat A New Account -->
          <div class="text-center small" style="color: #ffff;">Don't Have An Account? <a href="singup.php">Creat A New Account</a></div>
          <div class="text-center small" style="color: #ffff;"> The website was designed and developed by Md. Mustafizur Rahman <a href="https://www.wpdeveloper24.com/">My Website</a></div>
        </div>  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

