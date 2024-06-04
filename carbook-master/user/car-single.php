<?php require "header.php" ?>
   <style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Car Details</h1>
          </div>
        </div>
      </div>
    </section>
		

		<section class="ftco-section ftco-car-details">
      <div class="container">
      	<div class="row justify-content-center">
		  <?php 
		           $vehicle_id=$_GET["vehicle_id"];
		           include "dbconnect.php";		           
                   $sql="select *,curdate()+1 as date from vehicle where vehicle_id='$vehicle_id'";
                   $result=mysqli_query($conn,$sql);
                   echo mysqli_error($conn);            
                   $i=0;
                   while($rows=mysqli_fetch_array($result))
                   {                    
          ?>
      		<div class="col-md-12">
				  <div class="car-details">


<h2 style="text-align:center">Gallery</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 3</div>
    <img src="../uploads/<?php echo $rows['image1']  ?>" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 3</div>
    <img src="../uploads/<?php echo $rows['image2']  ?>" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 3</div>
    <img src="../uploads/<?php echo $rows['image3']  ?>" style="width:100%">
  </div>
    
  
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

 
</div>


           <!-- <div class="img rounded" style="background-image: url(../uploads/<?php echo $rows['image1']  ?>);"></div>-->
      				<div class="text text-center">
						  <span class="subheading"><?php echo $rows['brand_name'] ?></span>
      					<h2><?php echo $rows['car_title'] ?></h2>
      					<h5>Rs <?php echo $rows['price'] ?> /day</h5>
						  
						<form method="post" action="#">
						<input type=hidden name="vid" value='<?php echo $rows["vehicle_id"]; ?>'>
      					Start Date:<input type=date name=sdate min="<?= date('Y-m-d'); ?>" >
       					End Date : <input type=date name=edate min="<?= date('Y-m-d'); ?>" >
                        <br><br>
                        <br>
                         <?php
                include "dbconnect.php";
//$sql="SELECT *  FROM `booking` WHERE vehicle_id=$vid and (status='Booked' or status='Booking Confirmed' and re_date<curdate())";
                $name=$_SESSION["name"];
$sql1="SELECT *  FROM users where name='$name' and address is not null and phno is not null and adharno is not null ";
//echo $sql;
$result1=mysqli_query($conn,$sql1);
$row1 = mysqli_num_rows($result1);
//echo $row1;
if($row1>0)
{
  ?>
      					<input type=submit name=submit class="btn btn-primary py-2 mr-1" value="Confirm Booking">
<?php
              }
                else
                {
                  ?>
                 <input type=submit name=submit1 value="Complete your profile for booking"> 
                 <?php
               }
               ?>
      				</div>
      			</div>
      		</div>
      	</div>

      	<div class="row">
      		<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Car Type
		                	<span><?php echo $rows['car_type'] ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Transmission
		                	<span><?php echo $rows['transmission'] ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Seats
		                	<span><?php echo $rows['seating_capacity'] ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
		 
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Door
		                	<span><?php echo $rows['door'] ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Fuel
		                	<span><?php echo $rows['fuel'] ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
		  <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Model Year
		                	<span><?php echo $rows['model_year'] ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
		  <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Colour
		                	<span><?php echo $rows['car_color'] ?></span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
      	</div>

      	<div class="row">
      		<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex justify-content-center">
							  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
							    </li>
							  </ul>
							</div>

						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-4">
						    			<ul class="features">
											<?php 
											  $accessories=explode(",",$rows['accessories']);
											  foreach($accessories as $acc)
											   {
												   echo '<li class="check"><span class="ion-ios-checkmark"></span>'.$acc.'</li>';
												   
											   }
											?>
						    				
						    			</ul>
						    		</div>
						    		
						    	</div>
						    </div>

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
						      <p><?php echo $rows['description'] ?></p>
						    </div>
		  <?php
			}
		  ?>
						  </div>
						</div>
		      </div>
				</div>
      </div>
    </section>

    
    

    <?php require "footer.php" ?>

	<?php
  if(isset($_POST["submit"]))
{
  header("location:profiles.php");
}
if(isset($_POST["submit"]))
{

$vid=$_POST["vid"];
$sdate=$_POST["sdate"];
$edate=$_POST["edate"];
$userid=$_SESSION["userid"];
include "db_connect.php";
//$sql="SELECT *  FROM `booking` WHERE vehicle_id=$vid and (status='Booked' or status='Booking Confirmed' and re_date<curdate())";
$sql="SELECT *  FROM `booking` WHERE vehicle_id=$vid and ((rs_date between '$sdate' and '$edate') or (re_date between '$sdate' and '$edate')) and (status='Booked' or status='Booking Confirmed')";
echo $sql;
$result=mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
echo $row;
if($row>0)
{
	echo "<script>alert('Vehicle not avilable on this date');</script>";
}
else
{
    $sql="insert into booking(userid,vehicle_id,rs_date,re_date,status) values('$userid','$vid','$sdate','$edate','Booked')";
    $result=mysqli_query($conn,$sql);
         if($result)
          {
            echo "<script>alert('Successfully inserted');</script>";
           }
   } 
}
?>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
