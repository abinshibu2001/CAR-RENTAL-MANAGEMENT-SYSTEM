<?php require "sidebar.php" ?>
<?php require "dbconnect.php" ?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
     <li class="breadcrumb-item active">Profile</li>
</ol>

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