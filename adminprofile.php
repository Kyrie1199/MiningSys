<?php
   require 'extras/header.php';
   require 'extras/dbh.php';
 ?>
 <head>
   <title>Mining</title>
 </head>
 <main>
   <body>
     <div class="sidediv">
       <button onclick="gohome()" class="sidebtn" type="button" name="button">
         <img src="icons/profileimg.svg" alt="">
         <p>Home</p>
       </button>
       <button onclick="showcash()" class="sidebtn" type="button" name="button">
         <img src="icons/cash.svg" alt="">
         <p>Change requests</p>
       </button>
       
       <button onclick="addclaim()" class="sidebtn" type="button" name="button">
         <img src="icons/add.svg" alt="">
         <p>Add claim</p>
       </button>
       <a href="extras/logout.php">
         <button class="sidebtn" type="button" name="button">
           <img src="icons/logout.svg" alt="">
           <p>Logout</p>
         </button>
       </a>
     </div>
     <?php if (isset($_GET['allocation'])): ?>

     <?php endif; ?>
     <section id="home" class="supersection noclip flex_vertical mid center mining">
       <div class="sectionoverlay"></div>
       <?php if (isset($_GET['claimadded'])): ?>
         <h1 class="main_center1 centertext" style="color:green;" >Claim added</h1>
       <?php elseif (isset($_GET['changedone'])): ?>
           <h1 class="main_center1 centertext" style="color:green;" >Request approved</h1>
         <?php else: ?>
           <h1 class="main_center1 centertext">Welcome Admin</h1>
       <?php endif; ?>
       <h1>Quick Stats</h1>
       <div class="flexgrid">
         <div class="roundedbox flex_vertical centertext ">
           <div class="generalcontent flex_vertical mid maxheight center">
             <h1 class="main_center1">Available<br>Mines</h1>
             <?php
             $sql = "SELECT * FROM claims WHERE status='Available';";
             $result =  mysqli_query($conn, $sql);
             $resultCheck = mysqli_num_rows($result);
             echo '<p>'."$resultCheck".'</p>';
              ?>
           </div>
         </div>
         <div class="roundedbox flex_vertical centertext ">
           <div class="generalcontent flex_vertical mid maxheight center">
             <h1 class="main_center1">Total expected yields</h1>
             <?php
             $sql = "SELECT * FROM claims;";
             $result =  mysqli_query($conn, $sql);
             $yield = 0;
             while ($row = mysqli_fetch_assoc($result)) {
               $yield = $yield + $row['expectedyield'];
             }
             echo '<p>$'."$yield".' per month</p>';
              ?>
           </div>
         </div>
         <div class="roundedbox flex_vertical centertext ">
           <div class="generalcontent flex_vertical mid maxheight center">
             <h1 class="main_center1">Total Net<br>Payments</h1>
             <?php
             $total = 0;
             $sql = "SELECT * FROM payments;";
             $result =  mysqli_query($conn, $sql);
             while ($row = mysqli_fetch_assoc($result)) {
               $total = $total + $row['amount'];
             }
             echo '<p>$'."$total".' received</p>';
              ?>
           </div>
         </div>
       </div>
     </section>

     <section id="claims" style="display:none;" class="supersection mining">
       <div class="sectionoverlay"></div>
       <!--<div class="stickyimgholder">
         <img src="picture_assets/mainimg.jpg" alt="">
       </div>-->
       <div class="highlight">
         <h1 class="main_center1 centertext">Current offers for claims</h1>
          <p>The following are recently forfeited claims.</p>
       </div>
       <?php
       $firstloop = true;
       $sql = "SELECT * FROM claims WHERE status='Available';";
       $result =  mysqli_query($conn, $sql);
       while ($row = mysqli_fetch_assoc($result)) {
         $name = $row['name'];
         $size = $row['size'];
         $expectedyield = $row['expectedyield'];
         $gridreference = $row['gridreference'];
         $composition = $row['composition'];
         $status = $row['status'];
         echo '<h1 ';if ($firstloop == false) {
           echo 'style="margin-top:90px;"';
         }else {
           $firstloop = false;
         }
         echo'class="main_center2 centertext">'."$name".'</h1>
         <div class="flex_horizontal mid center fullwidth">
           <div class="longdivider"></div>
         </div>
         <div class="flexgrid">
           <div class="roundedbox flex_vertical centertext ">
             <div class="generalcontent flex_vertical mid maxheight center">
               <h1 class="main_center1">Size</h1>
               <p>'."$size".' square meters</p>
             </div>
           </div>
           <div class="roundedbox flex_vertical centertext ">
             <div class="generalcontent flex_vertical mid maxheight center">
               <h1 class="main_center1">Expected yields</h1>
               <p>$'."$expectedyield".' per month</p>
             </div>
           </div>
         </div>

         <h1 style="color:white;" class="main_center1 centertext">Mineral composition</h1>
         <div class="flexgrid">
           <div class="roundedbox flex_vertical centertext ">
             <div class="generalcontent flex_vertical mid maxheight center">
               <h1 class="main_center1">Gold</h1>
               <p>'."$composition".'%</p>
             </div>
           </div>
         </div>

         </div>'
         ;
       }
        ?>
     </section>

     <section id="addclaim" style="display:none;" class="lander noclip flex_vertical mid center mining">
       <div class="sectionoverlay"></div>
       <?php if (isset($_GET['logfail'])): ?>
         <h1 style="color:red;" class="main_center1 centertext">Wrong username<br>Or<br>password</h1>
         <?php else: ?>
           <h1 class="main_center1 centertext">Add claim</h1>
       <?php endif; ?>
       <p class="centertext white">Add claim here.</p>
       <div class="flex_vertical">
         <form style="margin-top:20px;" class="flex_vertical" action="extras/update.php" method="post">
           <label for="name">Claim name</label>
           <input type="text" class="generalinput inputwide" name="name" value="" required>
           <label for="size">Size</label>
           <input type="text" class="generalinput inputwide" name="size" value="" required>
           <label for="composition">Composition</label>
           <input type="number" class="generalinput inputwide" name="composition" value="" required>
           <label for="grid">Grid location</label>
           <input type="text" class="generalinput inputwide" name="grid" value="" required>
           <div class="flex_horizontal mid center">
             <button name="claimadd" type="submit" class="regularbtn_wide" style="margin-left: 0; margin-right:0;">
               Upload
             </button>
           </div>
         </form>
       </div>
     </section>

     <section id="cashdiv" style="display:none" class="supersection noclip flex_vertical mid center mining">
       <div class="sectionoverlay"></div>
       <h1 class="main_center1 centertext">Change requests</h1>
       <p>These are requests to change claims</p>
       <div class="flexgrid">
         <?php
         $sql = "SELECT * FROM users WHERE changerequest>0;";
         $result =  mysqli_query($conn, $sql);
         $resultCheck = mysqli_num_rows($result);
         $result =  mysqli_query($conn, $sql);
         while ($row = mysqli_fetch_assoc($result)) {
           $userid = $row['userid'];
           $username = $row['surname']." ".$row['firstname'];
           $changerequest = $row['changerequest'];

           $sql2 = "SELECT * FROM claims WHERE claimid='$changerequest';";
           $result2 =  mysqli_query($conn, $sql2);
           while ($row2 = mysqli_fetch_assoc($result2)) {
             $name = $row2['name'];
             $size = $row2['size'];
             $expectedyield = $row2['expectedyield'];

             echo '<div class="roundedbox flex_vertical centertext ">
               <div class="generalcontent flex_vertical mid maxheight center">
                 <h1 class="main_center1">Name</h1>
                 <p>'."$username".'</p>
                 <h1 class="main_center1">Requested mine</h1>
                 <p>'."$name".'</p>
                 <h1 class="main_center1">Mine yield</h1>
                 <p>'."$expectedyield".'</p>
                 <div class="flex_horizontal mid center">
                 <form style="margin-top:20px;" class="flex_vertical" action="extras/claimedit.php" method="post">
                 <input type="hidden" name="claimid" value="'."$changerequest".'">
                 <input type="hidden" name="userid" value="'."$userid".'">
                   <button name="approvereq" type="submit" class="regularbtn_wide" style="margin-left: 0; margin-right:0; background-color:green;">
                     Approve request
                   </button>
                 </form>
                 </div>
               </div>
             </div>
           ';
           }
         }
         ?>
       </div>
     </section>
   </body>
 </main>
 <script type="text/javascript">
 function gohome() {
   document.getElementById('home').style.display = "flex";
   document.getElementById('claims').style.display = "none";
   document.getElementById('addclaim').style.display = "none";
   document.getElementById('cashdiv').style.display = "none";
 }
 function showClaims() {
   document.getElementById('home').style.display = "none";
   document.getElementById('addclaim').style.display = "none";
   document.getElementById('claims').style.display = "flex";
   document.getElementById('cashdiv').style.display = "none";
 }
 function showcash() {
   document.getElementById('home').style.display = "none";
   document.getElementById('addclaim').style.display = "none";
   document.getElementById('cashdiv').style.display = "flex";
   document.getElementById('claims').style.display = "none";
 }
 function addclaim() {
   document.getElementById('addclaim').style.display = "flex";
   document.getElementById('home').style.display = "none";
   document.getElementById('claims').style.display = "none";
   document.getElementById('cashdiv').style.display = "none";
 }
 </script>
