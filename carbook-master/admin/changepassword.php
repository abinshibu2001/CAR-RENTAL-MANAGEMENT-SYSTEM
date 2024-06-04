<?php 
  require "sidebar.php"; 
  $uname=$_SESSION["name"];
?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
      <li class="breadcrumb-item active">Change Password</li>
</ol>

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
<tr><td>Old Password</td><td><input type="password" name="oldpassword"  class="form-control" required ></td></tr>
<tr><td>New Password</td><td><input type="password" name="newpassword"  class="form-control" required ></td></tr>
<tr><td>Confirm Password</td><td><input type="password" name="conpassword"  class="form-control" required ></td></tr>
<tr><td><input type="submit" name="submit" class="btn btn-primary btn-block" Value="Change Password" ></td></tr>

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