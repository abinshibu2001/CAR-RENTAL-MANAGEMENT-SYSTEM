<?php
    include "sidebar.php";
?>
<?php
    include "dbconnect.php";
    $sql="select * from contact";
    $result=mysqli_query($conn,$sql);
    echo mysqli_error($conn);
?>
<html>
<head>
<title>Admin page</title>
</head>
<body>
    <form name="details">
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> MESSAGE DETAILS</div>
        <div class="card-body">
          <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
           <th>No:</th>
           <th>contact_id</th>
           <th>Name</th>
           <th>email</th>
           <th>subject</th>
           <th>messsage</th>           
           <th>Action</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
           <th>No:</th>
           <th>contact_id</th>
           <th>Name</th>
           <th>email</th>
           <th>subject</th>
           <th>messsage</th>           
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
               <td><?php echo $rows['contact_id'] ?></td>
               <td><?php echo $rows['name'] ?></td>
               <td><?php echo $rows['email'] ?></td>
               <td><?php echo $rows['subject'] ?></td>     
               <td><?php echo $rows['message'] ?></td> 
               </td><td><a href='delete.php?userid=<?php $row["contact_id"] ?>'>Delete</a></td></tr>            
            
        <?php
        }
        ?>
        </tbody>>
    </table> 
          </div></div></div>
    <button><a href="index.php">Back</a></button>
    </form>
</body>
</html>