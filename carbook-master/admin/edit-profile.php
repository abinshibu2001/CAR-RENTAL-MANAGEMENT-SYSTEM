<?php require "sidebar.php" ?>
<?php
include "dbconnect.php";
$userid=$_SESSION["userid"];
    $sql="select * from users where userid='$userid'";
    $result=mysqli_query($conn,$sql);
    echo mysqli_error($conn);
    while($row=mysqli_fetch_array($result))
    {
?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
      <li class="breadcrumb-item active">Edit Profile</li>
</ol>
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Edit Profile</div>
      <div class="card-body">
      <form action="#" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputLastName">Profile Picture</label>
                <input class="form-control" id="exampleInputLastName" type="file" aria-describedby="nameHelp"  value="<?php echo $row['image']?>" name="image">
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">Name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp"  value="<?php echo $row['name']?>" name="name" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputLastName">Email Id</label>
                <input class="form-control" id="exampleInputLastName" type="email" aria-describedby="nameHelp"  value="<?php echo $row['email']?>" name="email" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputName">Phone Number</label>
                <input class="form-control" id="exampleInputName" type="phone" aria-describedby="nameHelp"  name="phno" required value="<?php echo $row['phno']?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputdescription">Address</label>
            <textarea class="form-control" id="exampleInputdescription" type="text" aria-describedby="emailHelp"  name="address" required> <?php echo $row['address']?></textarea>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputLastName">DOB</label>
                <input class="form-control" id="exampleInputLastName" type="date" aria-describedby="nameHelp"  name="dob" required value="<?php echo $row['dob']?>">
              </div>
              <div class="col-md-6">
                <label for="exampleFuel">Gender</label>
                <select class="form-control" id="examplefuel" type="text" required name="gender">
                <?php echo"<option value='$row[gender]'></option>"; ?>            
                  <option disabled selected>Select Gender</option>
                  <option>Male</option>
                  <option>Female</option>
                </select> 
              </div>
            </div>
          </div>

          <input  type="submit" class="btn btn-primary btn-block" name="edit" value="Edit">
        </form>
    
<?php
    }
?>

<?php
    if(isset($_POST['edit']))
         {
           //name of folder to which the file is uploaded
           $target_dir = "../uploads/";
           //to get the name of file to store to database
           $filename=basename($_FILES["image"]["name"]);
           $target_file = $target_dir . basename($_FILES["image"]["name"]);
           move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
           $name=$_POST['name'];
           $email=$_POST['email'];
           $address=$_POST['address'];
           $dob=$_POST['dob'];
           $phno=$_POST['phno'];
           $gender=$_POST['gender'];
           $sql="update users set  image='$filename',name='$name',email='$email',address='$address',dob='$dob',phno='$phno', gender='$gender' where userid=$userid";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
           echo"<script>alert('Updated succesfully')</script>";
            }
            else
            echo "error :".mysqli_error($conn);
         }
   ?>