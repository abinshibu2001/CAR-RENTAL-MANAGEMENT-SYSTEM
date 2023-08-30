<?php
    include "sidebar.php";
?>
<?php
    include "dbconnect.php";
    $sql="SELECT `userid`, `name`, `address`, `phno`, `email`, `gender` FROM `users` WHERE usertype!='admin'";
    $result=mysqli_query($conn,$sql);
    echo mysqli_error($conn);
?>
<html>

<body>
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> REG USER DETAILS</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                <th>No:</th>
               <th>Userid</th>
                <th>Name</th>
                <th>Address</th>
              <th>Phno</th>
              <th>Email</th>
              <th>Gender</th>           
              <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>No:</th>
               <th>Userid</th>
                <th>Name</th>
                <th>Address</th>
              <th>Phno</th>
              <th>Email</th>
              <th>Gender</th>           
              <th>Action</th>
                </tr>
              </tfoot>
              <tbody>

        <?php
        $i=0;
        while($rows=mysqli_fetch_assoc($result)){
            $i++;
        ?>
            <tr>
               <td><?php echo $i ?></td>
               <td><?php echo $rows['userid'] ?></td>
               <td><?php echo $rows['name'] ?></td>
               <td><?php echo $rows['address'] ?></td>
               <td><?php echo $rows['phno'] ?></td>
               <td><?php echo $rows['email'] ?></td>
               <td><?php echo $rows['gender'] ?></td> 
               <td><a href='delete.php?email=<?php echo $rows['email'];?> & from=<?php echo "user";?>'>Delete</a></td></tr>            
            
       <?php
        }
        ?>
    </tbody>
    </table>
          </div></div></div> 
    <button><a href="index.php">Back</a></button>
    </form>
</body>
</html>
