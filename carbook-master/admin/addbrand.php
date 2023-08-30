<?php require "sidebar.php";?>
<?php include "dbconnect.php";?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">ADD BRAND</div>
      <div class="card-body">
      <form action="#" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Brand Name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Brand name" name="bname">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Add image</label>
                <input class="form-control" id="exampleInputLastName" type="file" aria-describedby="nameHelp" name="image">
              </div>
            </div>
          </div>
          
          <input  type="submit" class="btn btn-primary btn-block" name="ADD" value="ADD">
        </form>
<?php
if(isset($_POST["ADD"]))
{

$bname=$_POST["bname"];
//name of folder to which the file is uploaded
$target_dir = "../uploads/";
//to get the name of file to store to database
$filename=basename($_FILES["image"]["name"]);
$target_file = $target_dir . basename($_FILES["image"]["name"]);
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
    {
    echo "The file ". $filename . " has been uploaded.";
    $sql="insert into brand(brand_name,image) values('$bname','$filename')";
    $result=mysqli_query($conn,$sql);
         if($result)
          {
            echo "<script>alert('Successfully inserted');</script>";
           }
    } 
      else
       {
         echo "Sorry, there was an error uploading your file.";
       }
}
?>