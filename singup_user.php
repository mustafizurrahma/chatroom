<?php



if ( isset( $_POST['submit'] ) ) {
    $name = htmlentities( mysqli_real_escape_string( $con, $_POST['user_name'] ) );
    $password = htmlentities( mysqli_real_escape_string( $con, $_POST['user_password'] ) );
    $email = htmlentities( mysqli_real_escape_string( $con, $_POST['user_email'] ) );
    $country = htmlentities( mysqli_real_escape_string( $con, $_POST['user_country'] ) );
    $gender = htmlentities( mysqli_real_escape_string( $con, $_POST['user_gender'] ) );
    $rand = rand(1, 2);

    if($name ==''){
        echo "<script>alert('We Can Not Verify Your Name')</script>";
    }if(strlen($password)<8){
        echo "<script>alert('Password Should Be Minimum 8 characters!')</script>";
        exit();
    }

    $check_email = "select * From Users Where user_email='$email'";
    $run_email = mysqli_query($con, $check_email);
    $check = mysqli_num_rows($run_email);

    if($check==1){
        echo "<script>alert('Email Already Exist Please Try Again!')</script>";
        echo "<script>window.open('singup.php', '_self')</script>";
        exit();
    }

    if($rand==1){
        $profile_pic = "image/SingInBackGroundImage.jpg";
    }elseif($rand==2){
        $profile_pic = "image/favicon.jpg";
    }
        
     $insert = "insert into users (user_name, user_pass, user_email, user_profile, user_country, user_gender) values('$name', '$email', '$password','$profile_pic', '$country', '$gender')";

     $query = mysqli_query($con, $insert);

     if($query){
        echo "<script>alert('Congratulations $name, Your Account Has Been Created Successfully')</script>";
        echo "<script>window.open('singin.php', '_self')</script>";
     }else {
        echo "<script>alert('Registration Failed Try Again!')</script>";
        echo "<script>window.open('singup.php', '_self')</script>";
     }
}
