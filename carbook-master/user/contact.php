<?php require "header.php" ; ?>
<?php include "dbconnect.php";?>
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact us<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section contact-section">
                <div class="col-md-8 block-9 mb-md-5">
            <form action="#" class="bg-light p-5 contact-form" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="subject">
              </div>
              <div class="form-group">
            <input type="text" class="form-control" placeholder="Message" name="message"></input>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" name="send">
              </div>
            </form>
          </div>
        </div>
    </section>
	<?php
    
    if(isset($_POST['send']))
         {
           $name=$_POST['name'];
           $email=$_POST['email'];
           $subject=$_POST['subject'];
           $message=$_POST['message'];

           $sql="INSERT INTO `contact`( `name`, `email`, `subject`, `message`) 
           VALUES ('$name','$email','$subject','$message')";

            $result = mysqli_query($conn,$sql);
            if($result)
            {
           echo"<script>alert('succesfully inserted')</script>";
            }
            else
            echo "error :".mysqli_error($conn);
         }
   ?>

    <?php require "footer.php" ; ?>