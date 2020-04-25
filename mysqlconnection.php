<?php
      $mysqli = new mysqli("localhost","root","c0d3bl00d3d","sajiloni_girls");
      // Check connection
      if (!$mysqli) 
            {
                  die("Connection failed: " . mysqli_connect_error());
            }
?>