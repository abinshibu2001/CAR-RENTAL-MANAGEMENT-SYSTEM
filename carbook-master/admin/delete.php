<?php
include 'dbconnect.php';
if($_GET['from']=='user')
{
$sql = "delete from users WHERE email='" . $_GET['email'] . "'";;
$result=mysqli_query($conn,$sql);
if ($result) 
        header("location: regusers.php");
else 
        echo "Error error uopdating record: " . mysqli_error($conn);
}
elseif($_GET['from']=='brand')
{
$sql = "delete from brand WHERE brand_id='" . $_GET['brand_id'] . "'";;
$result=mysqli_query($conn,$sql);
if ($result) 
        header("location: mgbrand.php");
else 
        echo "Error error updating record: " . mysqli_error($conn);
}
elseif($_GET['from']=='contact')
{
$sql = "delete from contact WHERE contact_id='" . $_GET['contact_id'] . "'";;
$result=mysqli_query($conn,$sql);
if ($result) 
        header("location: contact.php");
else 
        echo "Error error updating record: " . mysqli_error($conn);
}
elseif($_GET['from']=='vehicle')
{
$sql = "delete from vehicle WHERE vehicle_id='" . $_GET['vehicle_id'] . "'";;
$result=mysqli_query($conn,$sql);
if ($result) 
        header("location: mgvehicles.php");
else 
        echo "Error error updating record: " . mysqli_error($conn);
}
elseif($_GET['from']=='review')
{
  $sql = "delete from review WHERE rev_id='" . $_GET['rev_id'] . "'";;
  $result=mysqli_query($conn,$sql);
  if ($result) 
     header("location: review.php");
  else 
     echo "Error error updating record: " . mysqli_error($conn);
}
elseif($_GET['from']=='booking')
{
  $sql = "delete from booking WHERE book_id='" . $_GET['book_id'] . "'";;
  $result=mysqli_query($conn,$sql);
  if ($result) 
     header("location: cancelbooking.php");
  else 
     echo "Error error updating record: " . mysqli_error($conn);
}   
mysqli_close($conn);
?>