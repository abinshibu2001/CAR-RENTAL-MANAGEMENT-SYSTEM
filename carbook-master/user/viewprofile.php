<?php require "header.php" ; ?>
<?php require "dbconnect.php" ; ?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">View Profile </h1>
          </div>
        </div>
      </div>
    </section>

<?php

$sql = "SELECT *FROM users WHERE name = '$_SESSION[name]'";
    $res = mysqli_query($conn,$sql);
    $tbl_users = mysqli_fetch_assoc($res);

?>
<div class="container">
    <div class="row">
        <div class="card my-5 p-5">
            <img class="w-25 img-fluid rounded-circle mt-3 mx-auto" src="../uploads/<?php echo $tbl_users['image']  ?>" alt="">
            <h2 class="text-center"><?php echo $tbl_users['name']?></h2>
            <h4 class=""><?php echo $tbl_users['email']?></h4>
            <h4 class=""><?php echo $tbl_users['phno']?></h4>
            <h4 class=""><?php echo $tbl_users['address']?></h4>
            <h4 class=""><?php echo $tbl_users['dob']?></h4>
            <h4 class=""><?php echo $tbl_users['gender']?></h4>
        </div>
    </div>
</div>



<?php require "footer.php" ; ?>