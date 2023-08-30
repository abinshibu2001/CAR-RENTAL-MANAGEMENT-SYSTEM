<?php require "sidebar.php" ?>
<?php include "dbconnect.php" ?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
      <li class="breadcrumb-item active">Review</li>
</ol>

<?php  include "dbconnect.php";
       $sql="select * from review";
       $result=mysqli_query($conn,$sql);
       echo mysqli_error($conn);
    ?>

<!-- Example DataTables Card-->
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Table Review</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No:</th>
                  <th>Name</th>
                  <th>Review</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php
                 $i=0;
                 while($rows=mysqli_fetch_assoc($result))
                 {
                 $i++;
              ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $rows['username'] ?></td>
                  <td><?php echo $rows['site_rev'] ?></td>
                  <td><a href='delete.php?rev_id=<?php echo $rows['rev_id'];?> & from=<?php echo "review";?>'>Delete</a></td>
                </tr>
              <?php
                  }
              ?>      
              </tbody>
              <tfoot>
                <tr>
                  <th>No:</th>
                  <th>Brand Name</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>