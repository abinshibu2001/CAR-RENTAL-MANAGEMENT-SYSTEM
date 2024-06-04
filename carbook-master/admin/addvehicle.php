<?php require "sidebar.php" ?>
<?php include "dbconnect.php" ?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
      <li class="breadcrumb-item active">Add Vehicle</li>
</ol>
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">ADD CAR</div>
      <div class="card-body">
        <form action="#" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              
              <div class="col-md-6">
                <label for="exampleInputBrand">Brand</label>
                <select name="bname"  class="form-control" >
                <option>-Select Brand-</option>  
                <?php
                  include "dbconnect.php";
                  $sql="select  *  from brand";
                  $result=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_array($result))
                  {
                    echo "<option value='$row[brand_name]'>$row[brand_name]</option>";
                  }
                 
                ?>
                 </select>  
              </div>
              <div class="col-md-6">
                <label for="exampleInputCarTitle">Car Title</label>
                <input class="form-control" id="exampleInputCarTitle" type="text" aria-describedby="nameHelp" placeholder="Enter car title" name="cartitle">
              </div>
            </div>            
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputCarType">Car Type</label>
                <select class="form-control" id="exampleCarType" type="text" placeholder="Select Car Type" name="cartype" required>
                  <option disabled selected>Select Car Type</option>
                  <option>SEDAN</option>
                  <option>COUPE</option>
                  <option>SPORTS CAR</option>
                  <option>STATION WAGON</option>
                  <option>HATCHBACK</option>
                  <option>CONVERTABLE</option>
                  <option>SUV</option>
                  <option>MINIVAN</option>
                  <option>PICKUP TRUCK</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="exampleInputCarColour">Car Colour</label>
                <input class="form-control" id="exampleInputCarColour" type="text" aria-describedby="nameHelp" placeholder="Enter car colour" name="carcolour" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputdescription">Car Description</label>
            <textarea class="form-control" id="exampleInputdescription" type="text" aria-describedby="emailHelp" placeholder="Description" name="description"></textarea>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPrice">Price</label>
                <input class="form-control" id="exampleInputPrice" type="number" placeholder="Enter price" name="price">               
              </div>
              <div class="col-md-6">
                <label for="exampleFuel">Fuel</label>
                <select class="form-control" id="examplefuel" type="text" placeholder="Select Fuel" name="fuel">
                  <option disabled selected>Select Fuel</option>
                  <option>Diesel</option>
                  <option>Petrol</option>
                </select> 
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputyear">Model Year</label>
                <input class="form-control" id="exampleInputyear" type="number" placeholder="Enter model year" name="modelyear" required>
              </div>
              <div class="col-md-6">
                <label for="exampleCapacity">Seating Capacity</label>
                <input class="form-control" id="exampleCapacity" type="number" placeholder="Enter seating capacity" name="capacity" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputtrans">Transmission</label>
                <select class="form-control" id="exampleInputtrans" type="text" placeholder="Enter transmissioin" name="transmission" required>
                  <option disabled selected>Select Transmission</option>
                  <option>Manual</option>
                  <option>Automatic</option>
                  <option>CVT</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="exampledoor">Doors</label>
                <input class="form-control" id="exampledoor" type="number" placeholder="Enter door" name="door" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputimage1">Add image</label>
                <input class="form-control" id="exampleInputimage1" type="file" aria-describedby="nameHelp" name="image1" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputimage2">Add image</label>
                <input class="form-control" id="exampleInputimage2" type="file" aria-describedby="nameHelp" name="image2" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputimage3">Add image</label>
                <input class="form-control" id="exampleInputimage3" type="file" aria-describedby="nameHelp" name="image3" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputaccessories">Accessories</label>

            <div class="form-row">
              <div class="col-md-6">
                <input type="checkbox" id="vehicle1" name="a1" value="Air Conditioner">
                <label for="vehicle1"> Air Conditioner</label>
              </div>
              <div class="col-md-6">
                <input type="checkbox" id="vehicle2" name="a2" value="Power Steering">
                <label for="vehicle1">Power Steering</label>
              </div>
              <div class="col-md-6">
                <input type="checkbox" id="vehicle3" name="a3" value="Power Door Lock">
                <label for="vehicle1">Power Door Lock</label>
              </div>
              <div class="col-md-6">
                <input type="checkbox" id="vehicle4" name="a4" value="Driver Airbag">
                <label for="vehicle1">Driver Airbag</label>
              </div>
              <div class="col-md-6">
                <input type="checkbox" id="vehicle5" name="a5" value="Child Seat">
                <label for="vehicle1">Child Seat</label>
              </div>
              <div class="col-md-6">
                <input type="checkbox" id="vehicle6" name="a6" value="Central Locking">
                <label for="vehicle1">Central Loacking</label>
              </div>
              <div class="col-md-6">
                <input type="checkbox" id="vehicle7" name="a7" value="AntiLock Braking System">
                <label for="vehicle1">AntiLock Braking System</label>
              </div>
              <div class="col-md-6">
                <input type="checkbox" id="vehicle8" name="a8" value="Crash Sensor">
                <label for="vehicle1">Crash Sensor</label>
              </div>
              <div class="col-md-6">
                <input type="checkbox" id="vehicle9" name="a9" value="Brake Assist">
                <label for="vehicle1">Brake Assist</label>
              </div>
              <div class="col-md-6">
                <input type="checkbox" id="vehicle10" name="a10" value="Climate Control">
                <label for="vehicle1">Climate Control</label>
              </div>
            </div>
          </div>
            <input  type="submit" class="btn btn-primary btn-block" name="ADD" value="ADD">
          </form>
          
          <?php
   if(isset($_POST["ADD"]))
   {
     
     $cartitle=$_POST["cartitle"];
     $bname=$_POST["bname"];
     $cartype=$_POST["cartype"];
     $carcolour=$_POST["carcolour"];
     $description=$_POST["description"];
     $price=$_POST["price"];
     $fuel=$_POST["fuel"];
     $modelyear=$_POST["modelyear"];
     $capacity=$_POST["capacity"];
     $transmission=$_POST["transmission"];
     $door=$_POST["door"];
     $accessories="";
     if(isset($_POST["a1"]))
      $accessories=$accessories.$_POST["a1"].",";
     if(isset($_POST["a2"]))
      $accessories=$accessories.$_POST["a2"].",";
     if(isset($_POST["a3"]))
      $accessories=$accessories.$_POST["a3"].",";
     if(isset($_POST["a4"]))
      $accessories=$accessories.$_POST["a4"].",";  
     if(isset($_POST["a5"]))
      $accessories=$accessories.$_POST["a5"].",";  
     if(isset($_POST["a6"]))
      $accessories=$accessories.$_POST["a6"].",";  
     if(isset($_POST["a7"]))
      $accessories=$accessories.$_POST["a7"].",";  
     if(isset($_POST["a8"]))
      $accessories=$accessories.$_POST["a8"].",";  
     if(isset($_POST["a9"]))
      $accessories=$accessories.$_POST["a9"].",";  
     if(isset($_POST["a10"]))
      $accessories=$accessories.$_POST["a10"]." ";  
  
     //name of folder to which the file is uploaded
     $target_dir = "../uploads/";
     //to get the name of file to store to database
     $filename1=basename($_FILES["image1"]["name"]);
     $target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
     move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);
     $filename2=basename($_FILES["image2"]["name"]);
     $target_file2 = $target_dir . basename($_FILES["image2"]["name"]);
     move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file2);
     $filename3=basename($_FILES["image3"]["name"]);
     $target_file3 = $target_dir . basename($_FILES["image3"]["name"]);
     move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file3);
     $sql="select  *  from brand where brand_name='$bname'";
     $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_array($result);
     $brand_id=$row['brand_id'];
      $sql="insert into vehicle(brand_id,car_title,brand_name,car_type,car_color,description,price,fuel,model_year,seating_capacity,transmission,door,image1,image2,image3,accessories)
                         values($brand_id,'$cartitle','$bname','$cartype','$carcolour','$description','$price','$fuel','$modelyear','$capacity','$transmission','$door','$filename1','$filename3','$filename3','$accessories')";
      $result=mysqli_query($conn,$sql);
      if($result)
       {
        echo "<script>alert('Successfully inserted');</script>";
       }
   }       
?>