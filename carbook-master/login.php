<?php
session_start();
require "header.php";
?>
<?php include "dbconnect.php";?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"> <span></a></span></p>
            <h1 class="mb-3 bread"></h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
        <h1>Login</h1>
        <form  action="#" method="POST">
            
           Your Emaild <br> <input type="email" placeholder="Email id" name="email" required ><br><br>
            Your password <br><input type="password" placeholder="password" name="cpassword" required><br><br>
            <button type="submit" class="loginbtn" name="login">Login</button><br><br>
            <div class="container registerhere">
            <p>dont have an account?<a href="registration.php">register here</a></p>
            </div>
        </form>
        



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
.loginbtn {
  background-color: #0000FF;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.loginbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.registerhere {
  background-color: #f1f1f1;
  text-align: center;
}

</style>

 

    <?php
      if(isset($_POST['login']))
         {
          $email=$_POST['email'];
          $cpassword=$_POST['cpassword'];

        $sql =  "SELECT * FROM `users` WHERE email='$email' and password='$cpassword'";

      
        $result=mysqli_query($conn,$sql);
        if($row=mysqli_fetch_array($result))
           {
             $_SESSION["userid"]=$row["userid"];
             $_SESSION["name"]=$row["name"];
             $_SESSION["email"]=$row["email"];
             $usertype=$row["usertype"];
            echo $usertype;
          if($usertype=="admin")
          {
            $_SESSION['user_type'] = 'admin';
            echo "<meta http-equiv='refresh' content='1;url=admin/index.php'>";
          }
          else
          if($usertype=="user")
          {
            $_SESSION['user_type'] = 'user';
            echo "<meta http-equiv='refresh' content='1;url=user/index.php'>";
          }
           }
           else
             echo "<script>alert('incorrect credentials')</script>";
        }
            
?>
