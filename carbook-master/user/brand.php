<?php require "header.php" ?>
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Brands <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Choose Your Brand</h1>
          </div>
        </div>
      </div>
    </section>
		

		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
            <?php  include "dbconnect.php";
                   $sql="select * from brand";
                   $result=mysqli_query($conn,$sql);
                   echo mysqli_error($conn);            
                   $i=0;
                   while($rows=mysqli_fetch_array($result))
                   {
                    
                   ?>
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url(../uploads/<?php echo $rows['image']  ?>);">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.php"><?php echo $rows['brand_name'] ?></a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat"></span>
	    						<p class="price ml-auto"> <span></span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href='car.php?id=<?php echo $rows["brand_id"]; ?>' class="btn btn-primary py-2 mr-1">View</a></p>
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