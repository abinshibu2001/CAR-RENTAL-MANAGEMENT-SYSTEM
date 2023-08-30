<?php require "sidebar.php" ?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
     <li class="breadcrumb-item active">Manage Brands</li>
</ol>

<?php  include "dbconnect.php";
       $sql="select * from brand";
       $result=mysqli_query($conn,$sql);
       echo mysqli_error($conn);
    ?>

<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Edit/Delete Brands</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No:</th>
                  <th>Action</th>
                  <th>Brand Name</th>
                  <th>Image</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No:</th>
                  <th>Action</th>
                  <th>Brand Name</th>
                  <th>Image</th>
                  
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
                  <td><a href='updatebrand.php?brand_id=<?php echo $rows['brand_id'];?> '>update</a>
                  /<a href='delete.php?brand_id=<?php echo $rows['brand_id'];?> & from=<?php echo "brand";?>'>Delete</a></td>
                  <td><?php echo $rows['brand_name'] ?></td>
                 <td><img src="../uploads/<?php echo $rows['image']  ?>"></td>
                  
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