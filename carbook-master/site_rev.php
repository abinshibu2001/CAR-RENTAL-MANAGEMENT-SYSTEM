<?php
include 'header.php';

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


<style>
  .flex {
    display: flex;
    justify-content: center;

  }

  textarea
  {
    height: 250PX;
    width: 70% ;
    margin-bottom: 10%;
  }
     
     
  table {
    
    margin-top: 50px;
    margin-bottom: 50px;
  }
</style>


 
<div class="card  card-plain">
        <div class="card-header">
          <h4 class="card-title">share your experience about SITE </h4>
          <p class="category"> </p>
        </div>
<div class="flex">
  <table width=50%>
    <form action="#" method="post">
        <tr>
          </td>
          <td><textarea name="site" placeholder="about site.." ></textarea></td>
        </tr>
        <tr>
          <td colspan="2"> <input    class="btn btn-primary py-2 mr-1" type="submit" name="post" value="post"></td>
        </tr>

    </form>
  </table>
</div>


<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>

<?php
if (isset($_POST["post"])) {
  $name = $_SESSION["name"];

  // echo "username=".$_SESSION["name"];
  include "dbconnect.php";
  $sql = "SELECT * FROM users where name='$name'";
  
  $result = mysqli_query($conn, $sql);
  echo mysqli_error($conn);
  $row = mysqli_fetch_array($result);
  $id = $row["userid"];
  $comment = $_POST["site"];
  $site=$_POST["site"];
  $name=$row['name'];

  $sql = "INSERT INTO `review`( `user_id`,`username`,`site_rev`) 
            VALUES ('$id','$name','$site');";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>alert('successfully shared your review')</script>";
    echo '<meta http-equiv="refresh" content="0;site_rev.php">';
  } 
  else

    echo "<script>alert('Sorry, there was an error')</script>";
}
?>

<?php include "footer.php" ?>