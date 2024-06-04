<?php require "header.php" ; ?>
<?php include "dbconnect.php";?>
 
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Profile Edit</h1>
          </div>
        </div>
      </div>
    </section>
    

    <section class="ftco-section ftco-car-details">   
<head>
<style>
        * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email],input[type=phone],textarea[type=text],input[type=date],select[type=text] {
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
.editbtn {
  background-color: #0000FF;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.editbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}


</style>
<?php
include "dbconnect.php";
$userid=$_SESSION["userid"];
    $sql="select * from users where userid='$userid'";
    $result=mysqli_query($conn,$sql);
    echo mysqli_error($conn);
    while($row=mysqli_fetch_array($result))
    {
?>

</head>
<div class="container">

  <form action="#" method="POST" enctype="multipart/form-data">

  Profile Picture <br><input type="file"  value="<?php echo $row['image']?>" name="image" required><br> 
    Name <br><input type="text" placeholder="Enter Name" value="<?php echo $row['name']?>" name="name" required><br>
    Email <br><input type="email" placeholder="Your Emailid" name="email" required value="<?php echo $row['email']?>"><br>
   Address <textarea type="text" placeholder="Enter your Address" name="address" required> <?php echo $row['address']?></textarea><br>
   DOB <br><input type="date" placeholder="Your dob" name="dob" required value="<?php echo $row['dob']?>"><br>
    Phone Number <br><input type="phone" placeholder="Enter phno" name="phno" required value="<?php echo $row['phno']?>"><br>
    <label>Gender</label><br>
                <select  type="text" placeholder="Select gender" name="gender">
                <?php echo"<option value='$row[gender]'> $row[gender]</option>"; ?>
               
                  <option>Male</option>
                  <option>Female</option>
                </select><br> 
    licence No <br><input type="text" placeholder="Enter Licence NO" name="licenceno" required value="<?php echo $row['licenceno']?>"><br>
    AdharNO <br><input type="text" placeholder="Enter Adharno" name="adno" required value="<?php echo $row['adharno']?>"><br>

    
    <button type="submit" class="editbtn" name="edit">EDIT PROFILE</button>

    
  </form>

</div>
<?php
}
?>
    <?php
    if(isset($_POST['edit']))
    {
           $target_dir = "../uploads/";
           $filename=basename($_FILES["image"]["name"]);
           $target_file = $target_dir . basename($_FILES["image"]["name"]);
           move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
           $name=$_POST['name'];
           $email=$_POST['email'];
           $address=$_POST['address'];
           $dob=$_POST['dob'];
           $phno=$_POST['phno'];
           $gender=$_POST['gender'];
           $licenceno=$_POST['licenceno'];
           $adno=$_POST['adno'];
           //name of folder to which the file is uploaded

           $sql="update users set name='$name',image='$filename',email='$email',address='$address',dob='$dob',phno='$phno', gender='$gender',licenceno='$licenceno',adharno='$adno' where userid=$userid";

            $result = mysqli_query($conn,$sql);
            if($result)
            {
           echo"<script>alert('Updated succesfully')</script>";
            }
            else
            echo "error :".mysqli_error($conn);
         }
   ?>

    <?php require "footer.php" ; ?>