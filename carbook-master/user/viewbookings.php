<?php require "header.php" ?>

 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>my booking <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">My Bookings</h1>
          </div>
        </div>
      </div>
 </section>
    
  <?php
    $userid=$_SESSION["userid"];
    //echo $userid;
    include "dbconnect.php";
    $sql="SELECT booking.*, vehicle.car_title,vehicle.image1,DATEDIFF(re_date,rs_date)  as days, (DATEDIFF(re_date,rs_date))* price as amount,users.name from vehicle,booking,users where vehicle.vehicle_id=booking.vehicle_id and users.userid=booking.userid and  booking.userid='$userid'";
    $result=mysqli_query($conn,$sql);
    echo mysqli_error($conn);
  ?>

    <section class="ftco-section ftco-car-details">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Booking DETAILS</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>User</th>
                  <th>Vehicle</th>
                  <th>Image</th>
                  <th>Start Date</th>
                  <th>End date</th>
                  <th>No of days</th>
                  <th>Amount</th>           
                  <th>Status</th>
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
                  <td><?php echo $rows['name'] ?></td>
                  <td><?php echo $rows['car_title'] ?></td>
                  <td class="car-image"><div class="img" style="background-image:url(../uploads/<?php echo $rows['image1']  ?>);"></div></td>
                  <td><?php echo $rows['rs_date'] ?></td>
                  <td><?php echo $rows['re_date'] ?></td>
                  <td><?php echo $rows['days'] ?></td> 
                  <td><?php echo $rows['amount'] ?></td> 
                  <td><?php echo $rows['status'] ?></td>
                  <td>
                    <?php 
                      if($rows['status']=='Booking Confirmed')
                       {
                        echo '<a href="bill.php?id='.$rows["book_id"].'" class="btn btn-primary w-75 mb-2 mx-1 py-2 mr-1">Bill</a>';
                       }
                    ?>
                    <p class="d-flex mb-0 d-block"> <a href="cancel.php?id=<?php echo $rows['book_id'] ?>" class="btn btn-secondary w-75 py-2 ml-1">Cancel</a></p></td>
                </tr>                    
                <?php
                   }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div> 
    </section>
