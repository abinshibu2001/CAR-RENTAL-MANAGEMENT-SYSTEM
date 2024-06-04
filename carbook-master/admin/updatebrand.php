<?php
include "sidebar.php";
$brand_id=$_GET["brand_id"];
include "dbconnect.php";
$sql="select * from brand where brand_id=$brand_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">UPDATE BRAND</div>
      <div class="card-body">
      <form action="#" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Brand Name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp"  value="<?php echo $row['brand_name'] ?>" name="bname">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Add image</label>
                <input class="form-control" id="exampleInputLastName" type="file" aria-describedby="nameHelp"  value="<?php echo $row['image'] ?>" name="image">
              </div>
            </div>
          </div>
          
          <input  type="submit" class="btn btn-primary btn-block" name="update" value="update">
        </form>
<?php
if(isset($_POST["update"]))
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
    $sql="UPDATE brand SET brand_name='$bname',image='$filename' WHERE brand_id='$brand_id'";
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