<?php
$id=$_GET["id"];

   include "header.php";
   ?>
   <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>My Bookings <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Billing</h1>
          </div>
        </div>
      </div>
    </section>
    <?php

 include "dbconnect.php";
 
 
 $id=$_GET["id"];
 $sql="SELECT booking.*, vehicle.car_title,vehicle.image1,DATEDIFF(re_date,rs_date)  as days, (DATEDIFF(re_date,rs_date))* price as amount,users.name from vehicle,booking,users where vehicle.vehicle_id=booking.vehicle_id and users.userid=booking.userid and  status='Booking confirmed' and book_id=$id";
  //echo $sql;
   $result=mysqli_query($conn,$sql);
    echo mysqli_error($conn);

?>
       <html>
<head>
<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>
<title>div print</title>
</head>


<body>


<div id="div_print">


<!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body printableArea">
                            <h3><b>INVOICE</b> <span class="pull-right">#5669626</span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <h3> &nbsp;<b class="text-danger">TOY WHEELS</b></h3>
                                            <p class="text-muted m-l-5">Kodungallur,
                                                <br/> Nr' MAX,
                                                <br/>NH45,
                                                <br/>Thrissur - 654353</p>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            
                                            <p class="m-t-30"><b>Invoice Date :</b><?php
 
 print date('D, d M Y');
 
?></p>
                                            
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
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
                                                </tr>
                                            </thead>
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
                  <td class="car-image"><div class="img" style="background-image:url(../uploads/<?php echo $rows['image1']  ?>);"></div></td>
                  <td><?php echo $rows['rs_date'] ?></td>
                  <td><?php echo $rows['re_date'] ?></td>
                  <td><?php echo $rows['days'] ?></td> 
                  <td><?php echo $rows['amount'] ?></td> 
              </tr>
            
          
                                            


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <hr>
                                        <h3><b>Total :<?php echo $rows['amount'] ?></b></h3>
                                    </div>
      <?php
        }
        ?> 
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="text-right">
                                        <input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value=" Print ">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->


</div>

</body>


</html>
















            
           <?php
   include "footer.php"
?>