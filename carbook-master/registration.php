<?php require "header.php";?>
<?php include "dbconnect.php";?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/car-12.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"> <span>Signup <i class="ion-ios-arrow-forward"></i></span><span class="mr-2"><a href="login.php">LOGIN <i class="ion-ios-arrow-forward"></i></a></span></p>
    
          </div>
        </div>
      </div>
    </section>
<head>
<style>
        * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #0000FF;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.loginhere {
  background-color: #f1f1f1;
  text-align: center;
}

</style>


</head>
<div class="container">

  <form action="#" method="POST">
    <h1>Registration</h1>
    Name <br><input type="text" placeholder="Enter Name" name="name" required  ?><br><br>
    Email <br><input type="email" placeholder="Your Emailid" name="email" required ><br><br>
    Password <br><input type="password" placeholder="Password" name="password" required><br><br>
    confirm Password <br><input type="password" placeholder="confirm Password" name="cpassword" required><br><br>
    
    <button type="submit" class="registerbtn" name="register">Register</button>

   <div class="contrainer loginhere">
    <p>already have an account?<a href="login.php">login here</a></P>
    </div>
    
  </form>
</div>

<?php
      if(isset($_POST['register']))
         {
          $name=$_POST['name'];
          $email=$_POST['email'];
          $cpassword=$_POST['cpassword'];
          $password=$_POST['password'];
        
                    if($password!=$cpassword)
                    echo '<script>alert("your password is incorrect")</script>'; 
                    else        
                  {
                      $sql="select * from users where email='$email'";
                      $result=mysqli_query($conn,$sql);
                     if($row=mysqli_fetch_array($result))
                     echo "<script>alert('emailid exist')</script>";
                     else
                           {
                              $sql="insert into users(name,email,password) values('$name','$email','$password')";
                               $result=mysqli_query($conn,$sql);
                               if($result)
                                  {
                                     echo "<script>alert('Successfully inserted')</script>";
                                 }
                                else
                                echo "error:".mysqli_error($conn); 
                            }
                   }
      }
          ?>