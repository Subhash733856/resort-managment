<?php
include "include/header.php";
include "connect.php";
 ?>
 <link rel="stylesheet" type="text/css" href="style.css">

<center><h1>ROYAL RESORT</h1>
   <center><img src="img/Resort.jpg" id="himg">

<br><br><br>


<div class="home">

   <div class="stars" >
     <form action="home.php" method="post">
       <h2><center>Conact us</center></h2>   
      <h3> <center>PHONE : 1234567890</center></h3>
      <h4> <center>GMAIL : SUBHASH@GMAIL.COM</center></h4>
      
    </form>
   </div>
   <?php

   if (isset($_POST['review'])) {
     //echo '<script type="text/javascript"> alert("review button click")</script>';

     $query = "INSERT INTO rating (star,comnt) VALUES ('".$_POST['star']."','".$_POST['Comment']."')";


     $query_run = mysqli_query ($con,$query);

     if ($query_run) {
         echo '<script type="text/javascript"> alert("Review Submitted")</script>';
     }
     else {
        echo '<script type="text/javascript"> alert("!! ERROR !!")</script>';
     }
   }

mysqli_close($con);

    ?>

      <div id="hdiscrp">
         <article >
            <h2><center>Description</center></h2>
            The resort facility that is intended primarily for vacationers and is usually located near special attractions, such as beaches and seashores, scenic or historic areas, ski parks, or spas.
            The guest in a typical transient resort can expect a room with private bath, telephone, radio, and television, in addition to such customer services as laundry,
             valet, and cleaning and pressing. A larger establishment usually has a coffee shop, dining room, cocktail lounge or nightclub, and a gift shop or newsstand-tobacco counter
         </article>
      </div>

</div>


<div id="hbooknow">
   <center>
      <a href="room.php">Rooms</a>
      <a href="booking.php">Book Now</a>
   </center>
</div>


<?php
include "include/footer.php";
 ?>
