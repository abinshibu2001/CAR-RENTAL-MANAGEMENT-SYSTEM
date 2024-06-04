<?php require "sidebar.php" ?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
     <li class="breadcrumb-item active">Manage Vehicles</li>
</ol>

<?php  include "dbconnect.php";
       $sql="select * from vehicle";
       $result=mysqli_query($conn,$sql);
       echo mysqli_error($conn);
    ?>

<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Table Vehicle</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No:</th>
                  <th>Action</th>
                  <th>Car Title</th>
                  <th>Brand</th>
                  <th>Car Type</th>
                  <th>Car Colour</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Fuel</th>
                  <th>Model Year</th>
                  <th>Seating Capacity</th>
                  <th>Transmission</th>
                  <th>Doors</th>
                  <th>Image1</th>
                  <th>Image2</th>
                  <th>Image3</th>
                  <th>Accessories</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No:</th>
                  <th>Action</th>
                  <th>Car Title</th>
                  <th>Brand</th>
                  <th>Car Type</th>
                  <th>Car Colour</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Fuel</th>
                  <th>Model Year</th>
                  <th>Seating Capacity</th>
                  <th>Transmission</th>
                  <th>Doors</th>
                  <th>Image1</th>
                  <th>Image2</th>
                  <th>Image3</th>
                  <th>Accessories</th>
                  
                </tr>
              </tfoot>
              <tbody>
              <?php
                 $i=0;
                 while($rows=mysqli_fetch_assoc($result))
                 {
                 $i++;
              ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><a href='updatevehicle.php?vehicle_id=<?php echo $rows['vehicle_id'];?>'>update</a>
                     /<a href='delete.php?vehicle_id=<?php echo $rows['vehicle_id'];?> & from=<?php echo "vehicle";?>'>Delete</a></td>
                  <td><?php echo $rows['car_title'] ?></td>
                  <td><?php echo $rows['brand_name'] ?></td>
                  <td><?php echo $rows['car_type'] ?></td>
                  <td><?php echo $rows['car_color'] ?></td>
                  <td><?php echo $rows['description'] ?></td>
                  <td><?php echo $rows['price'] ?></td>
                  <td><?php echo $rows['fuel'] ?></td>
                  <td><?php echo $rows['model_year'] ?></td>
                  <td><?php echo $rows['seating_capacity'] ?></td>
                  <td><?php echo $rows['transmission'] ?></td>
                  <td><?php echo $rows['door'] ?></td>
                  <td><?php echo $rows['image1'] ?></td>
                  <td><?php echo $rows['image2'] ?></td>
                  <td><?php echo $rows['image3'] ?></td>
                  <td><?php echo $rows['accessories'] ?></td>
                  
                </tr>
              <?php
                  }
              ?>      
              </tbody>
            
            </table>
          </div>
        </div>
      </div>
    </div>