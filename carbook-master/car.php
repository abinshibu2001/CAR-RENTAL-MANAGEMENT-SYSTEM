
    <?php require "header.php" ;
$id=$_GET["id"];

    ?>
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Choose Your Car</h1>
          </div>
        </div>
      </div>
    </section>
		

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
            <?php  include "dbconnect.php";
                   $sql="select * from vehicle where brand_id=$id";
                   $result=mysqli_query($conn,$sql);
                   echo mysqli_error($conn);            
                   $i=0;
                   while($rows=mysqli_fetch_array($result))
                   {
                    
                   ?>
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image:url(uploads/<?php echo $rows['image1']  ?>);">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.php"><?php echo $rows['car_title'] ?></a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat"><?php echo $rows['brand_name'] ?></span>
	    						<p class="price ml-auto">Rs<?php echo $rows['price'] ?> <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="login.php" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php?vehicle_id=<?php echo $rows['vehicle_id'];?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
               <?php
                   }
               ?>

    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>

<?php require "footer.php" ?>