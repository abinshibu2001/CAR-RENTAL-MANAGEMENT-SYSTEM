<?php require "header.php";?>
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Quick &amp; Easy Way To Rent A Car</h1>
              <h1 class="mb-4">Rent your self drive  Car</h1>
              <h1 class="mb-4">Sanitised &amp; Safe Cars</h1>
	            
	            
            </div>
          </div>
        </div>
      </div>
    </div>

     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
	  					
	  					</div>
	  					<div class="col-md-12 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							<h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
	  							<div class="row d-flex mb-4">
                  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Select the Best Deal</h3>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Choose Your Brands</h3>
				                </div>
					            </div>      
					          </div>
					          
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Reserve Your Rental Car</h3>
					              </div>
					            </div>      
					          </div>
					        </div>
					        <p><a href="brand.php" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p>
	  						</div>

	  					</div>
	  				</div>
				</div>
  		</div>
    </section>
    <section class="ftco-section ftco-no-pt bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">What we offer</span>
            <h2 class="mb-2">Brand Details</h2>
          </div>
        </div>      
       <div class="row">
         <div class="col-md-12">
           <div class="carousel-car owl-carousel">
              <?php  include "dbconnect.php";
                 $sql="select * from brand";
                 $result=mysqli_query($conn,$sql);
                 echo mysqli_error($conn);            
                 $i=0;
                 while($rows=mysqli_fetch_array($result))
                  {
                    $i++;
                    if($i%3==0)
                     {
                      echo "<tr>";
                     }
              ?>
              <div class="item"> 
                <div class="car-wrap rounded ftco-animate">             
                  <div class="img rounded d-flex align-items-end" style="background-image: url(uploads/<?php echo $rows['image']  ?>);">
                  </div>
                   <div class="text">                 
                     <h2 class="mb-0"><a href="#"><?php echo $rows['brand_name'] ?></a></h2>
                     <p class="d-flex mb-0 d-block"><a href='car.php?id=<?php echo $rows['brand_id']; ?>' class="btn btn-primary py-2 mr-1">VIEW</a></p>
                   </div>
                </div>
              </div>
              <?php                
                  }
              ?>              
    			 </div>
    		 </div>
    	 </div>
</section>

<section class="ftco-section ftco-no-pt bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading"></span>
            <h2 class="mb-2">Car Details</h2>
          </div>
        </div>      
       <div class="row">
         <div class="col-md-12">
           <div class="carousel-car owl-carousel">
              <?php  include "dbconnect.php";
                 $sql="select * from vehicle";
                 $result=mysqli_query($conn,$sql);
                 echo mysqli_error($conn);            
                 $i=0;
                 while($rows=mysqli_fetch_array($result))
                  {
                    $i++;
                    if($i%3==0)
                     {
                      echo "<tr>";
                     }
              ?>
              <div class="item"> 
                <div class="car-wrap rounded ftco-animate">             
                  <div class="img rounded d-flex align-items-end" style="background-image: url(uploads/<?php echo $rows['image1']  ?>);">
                  </div>
                   <div class="text">                 
                     <h2 class="mb-0"><a href="#"><?php echo $rows['car_title'] ?></a></h2>
                     <div class="d-flex mb-3">
	    						     <span class="cat"><?php echo $rows['brand_name'] ?></span>
	    						     <p class="price ml-auto">Rs<?php echo $rows['price'] ?> <span>/day</span></p>
    						     </div>
                     <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php?vehicle_id=<?php echo $rows['vehicle_id'];?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
                   </div>
                </div>
              </div>
              <?php                
                  }
              ?>              
    			 </div>
    		 </div>
    	 </div>
</section>
    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">About us</span>
	            <h2 class="mb-4">Welcome to ToyWheels</h2>

	            <p>  <p>The main objective of the application car Rental System require a temporary vehicle, for example those who do not own their own car, or owners of damaged or destroyed vehicles who are awaiting repair or insurance compensation or travelers who are out of town.</p></p>
	            <p>We offers the best and the most reliable self drive rental cars at unbeatable prices. There are many amazing places to explore and we offer highly affordable car rental options to explore them all. You can book any car of your choice from our fleet online. We offer rentals on an daily, weekly and monthly basis.</p>
	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-3">Our Latest Services</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Wedding Ceremony</h3>
            
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">City Transfer</h3>
            
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Airport Transfer</h3>
              
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Whole City Tour</h3>
            
              </div>
            </div>
					</div>
				</div>
			</div>
		</section>

	


    
   
    <section class="ftco-counter ftco-section img bg-light" id="section-counter">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="60">0</strong>
                <span>Year <br>Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="1090">0</strong>
                <span>Total <br>Cars</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="2590">0</strong>
                <span>Happy <br>Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="67">0</strong>
                <span>Total <br>Branches</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>	

    <?php require "footer.php"  ?>