<?php
include ("header.php");
$uname=$_SESSION["name"];
?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Change Password</h1>
          </div>
        </div>
      </div>
    </section>




 <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <br>
         <center>   <h2>Change Password</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    
<center>      

<table align=center>
<form action="#"  method="POST">
<tr><td>Old Password</td><td><input type="password" name="oldpassword" class="form-control"  required ></td></tr>
<tr><td>New Password</td><td><input type="password" name="newpassword"  class="form-control" required ></td></tr>
<tr><td>Confirm Password</td><td><input type="password" name="conpassword"  class="form-control" required ></td></tr>
<tr><td><input type="submit" name="submit" class="btn btn-primary py-2 mr-1" Value="Change Password" ></td></tr>

</form>
</table>


<?php
if(isset($_POST["submit"]))
{
include("dbconnect.php");
$old=$_POST["oldpassword"];
$new=$_POST["newpassword"];
$con1=$_POST["conpassword"];


     if($new==$con1)
	 	{
        $uname=$_SESSION["name"];
        $sql="select * from users where password='$old' and name='$uname'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_fetch_array($result))
        {
        $query="update users  set password='$new' where name='$uname'";
		//echo $query;
	    $result=mysqli_query($conn,$query);
        if($result)
        {
	    echo "<script>alert('Password Changed Successfully')</script>";
	    echo '<META http-equiv="refresh" content="1;index.php">';
		}
        }
        else
        {
           echo "<script>alert('Incorrect Password')</script>"; 
        }
    }
	else
		echo "<script>alert('Password Mismatch')</script>";
	
	
}


?>

 <?php
include ("footer.php");

?>


