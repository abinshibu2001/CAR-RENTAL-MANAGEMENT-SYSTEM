<?php
                $id=$_GET["id"];
                include "dbconnect.php";
                $sql="update booking set status='Cancelled' where book_id=$id";
                echo $sql;
                $result=mysqli_query($conn,$sql);
                if($result)
                    {
                       echo '<meta http-equiv="refresh" content="0; viewbookings.php">';
                    }
?>