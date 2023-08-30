<?php
    include "sidebar.php";
?>

<?php
    include "dbconnect.php";
    $sql="SELECT booking.*, vehicle.car_title,vehicle.image1,DATEDIFF(re_date,rs_date)  as days, DATEDIFF(re_date,rs_date)* price as amount,users.name from vehicle,booking,users where vehicle.vehicle_id=booking.vehicle_id and users.userid=booking.userid and  status='Booking Confirmed'";
    $result=mysqli_query($conn,$sql);
    echo mysqli_error($conn);
?>
<html>

<body>
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Booking DETAILS</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                   <th>#</th>
                <th>User</th>
               <th>Vehicle</th>
                <th>Image</th>
                <th>Start Date</th>
              <th>End date</th>
              <th>No of days</th>
              <th>Amount</th>
              <th>status</th>           
              
                </tr>
              </thead>
              <tfoot>
                <tr>
                   <th>#</th>
                <th>User</th>
               <th>Vehicle</th>
                <th>Image</th>
                <th>Start Date</th>
              <th>End date</th>
              <th>No of days</th>
              <th>Amount</th> 
              <th>status</th>           
              
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
               <td><?php echo $rows['name'] ?></td>
               <td><?php echo $rows['car_title'] ?></td>
               <td class="car-image"><img class="w-23 img-fluid rounded-rectangle mt-3 mx-auto" src="../uploads/<?php echo $rows['image1']  ?>"></img></td>
               <td><?php echo $rows['rs_date'] ?></td>
               <td><?php echo $rows['re_date'] ?></td>
               <td><?php echo $rows['days'] ?></td> 
               <td><?php echo $rows['amount'] ?></td> 
               <td><?php echo $rows['status'] ?></td> 
               <td><a href="bill.php?id=<?php echo $rows['book_id'] ?>">Bill</a></td>
               <td><a href="returned.php?id=<?php echo $rows['book_id'] ?>">Returned</a></td>
              <td><a href="reject.php?id=<?php echo $rows['book_id'] ?>">Reject</a></td></tr>            
       <?php
        }
        ?>
    </tbody>
    </table>
          </div></div></div>
    <button><a href="index.php">Back</a></button>
    
</body>
</html>
