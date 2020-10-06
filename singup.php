<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Sing Up Now [ My Chat Room ]</title>
    <link rel="shortcut icon" href="image/favicon.jpg" type="image/favicon.jpg">
    <link rel="stylesheet" href="css/singup.css">
  </head>
  <body>




  <?php
include 'include/connection.php';
if ( isset( $_POST['sing_up'] ) ) {
    $name = htmlentities( mysqli_real_escape_string( $con, $_POST['user_name'] ) );
    $password = htmlentities( mysqli_real_escape_string( $con, $_POST['user_password'] ) );
    $email = htmlentities( mysqli_real_escape_string( $con, $_POST['user_email'] ) );
    $country = htmlentities( mysqli_real_escape_string( $con, $_POST['user_country'] ) );
    $gender = htmlentities( mysqli_real_escape_string( $con, $_POST['user_gender'] ) );
    $checkbox = htmlentities( mysqli_real_escape_string( $con, $_POST['checkbox'] ) );
    $rand = rand( 1, 2 );

    if ( $name == '' ) {
        echo "<script>alert('We Can Not Verify Your Name')</script>";
    }if ( strlen($password) < 8 ) {
        echo "<script>alert('Password Should Be Minimum 8 characters!')</script>";
        exit();
    }

    $check_email = "select * from fsers where user_email='$email'";
    $run_email = mysqli_query( $con, $check_email );
    $check = mysqli_num_rows( $run_email );

    if ( $check == 1 ) {
        echo "<script>alert('Email Already Exist Please Try Again!')</script>";

        echo "<script>window.open('singup.php', '_self')</script>";
        exit();
    }

    if ( $rand == 1 ) {
        $profile_pic = "image/SingInBackGroundImage.jpg";
    } elseif ( $rand == 2 ) {
        $profile_pic = "image/favicon.jpg";
    }

    $insert = "insert into users (user_name, user_pass, user_email, user_profile, user_country, user_gender) values('$name', '$email', '$password','$profile_pic', '$country', '$gender')";

    $query = mysqli_query( $con, $insert );

    if ( $query ) {
        echo "<script>alert('Congratulations $name, Your Account Has Been Created Successfully')</script>";

        echo "<script>window.open('singin.php', '_self')</script>";

    } else {
        echo "<script>alert('Registration Failed Try Again!')</script>";
    }

}
?>




        <div class="singup-form">
          <form action="singin.php" method="POST">
              <div class="form-header">
                <h2>Sing Up</h2>
                <p>Sing Up To My Chat</p>
              </div>
              <div class="form-group">
                <label for="">User Name</label>
                <input type="text" class="form-control" name="user_name" placeholder="Usename" id="">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="user_password" placeholder="Password" id="">
              </div>
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="user_email" id="" placeholder="Type Your Email">
              </div>
              <div class="form-group">
                <label>Select a Country</label>
                <select class="form-control" name="user_country" id="">
                    <option>Select Your Country</option>
                    <option>Bangladesh</option>
                    <option>India</option>
                    <option>Uk</option>
                    <option>Japan</option>
                    <option>Pakistan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Select a Gender</label>
                <select class="form-control" name="user_gender" id="">
                    <option>Select Your Gender</option>
                    <option>Mail</option>
                    <option>Femail</option>
                    <option>Others</option>
                </select>
              </div>
              <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" name="checkbox" required>I Accept The <a href="#">Trams Of Service</a> &amp; <a href="#">Privacy Policy</a></label>
              </div>
              </form>
              <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block btn-lg" name="sing_up">Sing Up</button>
              </div>
          </form>
          <!-- log My Account  -->
          <div class="text-center small" style="color: #999;">Already Have An Account? <a href="singin.php">Sing In</a></div>

          <div class="text-center small mt-3" style="color: #ffff;"> The website was designed and developed by Md. Mustafizur Rahman <a href="https://www.wpdeveloper24.com/">My Website</a></div>
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>