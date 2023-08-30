<?php
                $id=$_GET["id"];
                include "dbconnect.php";
                $sql="select * from users,booking where booking.userid=users.userid and booking.book_id=$id ";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
                $email=$row["email"];
                $sql="update booking set status='Booking Confirmed' where book_id=$id";
                echo $sql;        
                $result=mysqli_query($conn,$sql);
                if($result)
                    {
                       echo "<script>alert('Confirmed the booking')</script>";
                     //   echo '<meta http-equiv="refresh" content="0;">';
                       header("location:emailer.php?email=$email");
                     //   header("location:bill.php?book_id=$id");
                     }
?>