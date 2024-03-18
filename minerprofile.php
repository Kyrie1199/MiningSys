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
       <button onclick="showProfile()" class="sidebtn" type="button" name="button">
         <img src="icons/profileimg.svg" alt="">
         <p>Home</p>
       </button>
       <button onclick="showClaims()" class="sidebtn" type="button" name="button">
         <img src="icons/gold.svg" alt="">
         <p>Claims</p>
       </button>
       <button onclick="paydiv()" class="sidebtn" type="button" name="button">
         <img src="icons/add.svg" alt="">
         <p>Make payments</p>
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
     <section id="profile" class="supersection noclip flex_vertical mid center mining">
       <div class="sectionoverlay"></div>
       <h1 class="main_center1 centertext">Welcome <?php echo $_SESSION['name'] ?>
         <?php if (isset($_GET['paypass'])): ?>
           <br>Your payment was a success!!!!</h1>
         <?php elseif (isset($_GET['paypass'])): ?>
           <br>Your payment was a success!!!!</h1>
         <?php elseif (isset($_GET['requestdone'])): ?>
           <br>Your application is being processed</h1>
         <?php else: ?>
           </h1>
         <?php endif; ?>

       <p class="centertext white">The following mine has been allocated to you.<br>The decision is based on various parameters we have taken from your profile</p>
       <div class="flexgrid">
         <?php
         $userid = $_SESSION['userid'];
         $sql = "SELECT * FROM users WHERE userid='$userid' AND changerequest=0;";
         $result =  mysqli_query($conn, $sql);
         while ($row = mysqli_fetch_assoc($result)) {
           $claimid = $row['claim'];
           $_SESSION['claimid'] = $claimid;
           $sql = "SELECT * FROM claims WHERE claimid='$claimid';";
           $result =  mysqli_query($conn, $sql);
           while ($row = mysqli_fetch_assoc($result)) {
             $gridreference = $row['gridreference'];
             $size = $row['size'];
             $expectedyield = $row['expectedyield'];
             $composition = $row['composition'];

             echo '<div class="roundedbox flex_vertical centertext ">
               <div class="generalcontent flex_vertical mid maxheight center">
                 <h1 class="main_center1">Grid reference</h1>
                 <p>'."$gridreference".'</p>
               </div>
             </div>
             <div class="roundedbox flex_vertical centertext ">
               <div class="generalcontent flex_vertical mid maxheight center">
                 <h1 class="main_center1">Size</h1>
                 <p>'."$size".'square meters</p>
               </div>
             </div>
             <div class="roundedbox flex_vertical centertext ">
               <div class="generalcontent flex_vertical mid maxheight center">
                 <h1 class="main_center1">Expected yields</h1>
                 <p>$'."$expectedyield".' per month</p>
               </div>
             </div>
           </div>
           <h1 class="main_center1 centertext">Mineral composition</h1>
           <div class="flexgrid">
             <div class="roundedbox flex_vertical centertext ">
               <div class="generalcontent flex_vertical mid maxheight center">
                 <h1 class="main_center1">Gold</h1>
                 <p>'."$composition".'%</p>
               </div>
             </div>
           </div>';
           }
         }
         ?>
       <div class="flex_vertical mid">
         <div class="flex_horizontal center">
           <form onsubmit="return comfirmation()" action="extras/update.php" method="post">
             <a href="minerlogin.php">
               <button style="background-color:red;" type="submit" name="forfeit" class="regularbtn_wide">
                 Forfeit claim
               </button>
             </a>
           </form>
         </div>
       </div>
     </section>

     <section id="paydiv" style="display:none;" class="supersection lex_vertical mid center mining">
       <div class="sectionoverlay"></div>
       <!--<div class="stickyimgholder">
         <img src="picture_assets/mainimg.jpg" alt="">
       </div>-->
       <h1 class="main_center1 centertext">Payments</h1>
       <p class="centertext white">This is the payment section where your provide the proof of payment and labour returns<br>All payments to be made to the Ministry CBZ Account.<br>Please provide the amount paid and proof of payment below.</p>
       <div class="flex_horizontal">
         <div class="generalholder flex_vertical">
           <div class="generalhoder_topbanner">
             <h1 class="main_center1 centertext">Labour returns</h1>
           </div>
           <div class="generalcontent">
             <div class="flex_vertical">
               <form style="margin-top:20px;" class="flex_vertical" action="extras/update.php" method="post" enctype="multipart/form-data">
                 <label for="amount">Amount</label>
                 <input type="number" class="generalinput inputwide" name="amount" value="">
                 <label for="code">Payment Code</label>
                 <p style="color:red">The payment code is the comfirmation<BR>code that is recieved when you<br>have done<br>a transaction eg, MP12.443.56</p>
                 <input type="text" class="generalinput inputwide" name="code" value="">
                 <label for="proof">Proof of payment</label>
                 <input type="file" name="proof" value="">
                 <div class="flex_horizontal mid center">
                   <button name="paymentadd" type="submit" class="regularbtn_wide" style="margin-left: 0; margin-right:0;">
                     Submit
                   </button>
                 </div>
               </form>
             </div>
           </div>
         </div>
         <div class="generalholder flex_vertical">
           <div class="generalhoder_topbanner">
             <h1 class="main_center1 centertext">General payments</h1>
           </div>
           <div class="generalcontent">
             <div style="display:none" id="pay" class="flex_vertical">
               <form style="margin-top:20px;" class="flex_vertical" action="extras/update.php" method="post">
                 <p id="label" style="color:black;"></p>
                 <input type="hidden" class="generalinput inputwide" id="totalamount" name="amount" value="">
                 <label for="code">Payment Code</label>
                 <p style="color:red">The payment code is the comfirmation<BR>code that is recieved when you<br>have done<br>a transaction eg, MP12.443.56</p>
                 <input type="text" class="generalinput inputwide" name="code" value="">
                 <div class="flex_horizontal mid center">
                   <button name="payplease" type="submit" class="regularbtn_wide" style="margin-left: 0; margin-right:0;">
                     Submit
                   </button>
                 </div>
               </form>
             </div>
             <div id="calculate" class="flex_vertical">
               <label for="amount">Received returns</label>
               <input type="number" id="returns" class="generalinput inputwide" name="amount" value="">
               <div class="flex_horizontal mid center">
                 <button name="paymentadd" type="button" onclick="calculate()" class="regularbtn_wide" style="margin-left: 0; margin-right:0;">
                   Calculate
                 </button>
               </div>
             </div>
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
          <p>The following are recently forfeited claims that have chosenfor you to view and explore</p>
       </div>
       <?php
       $name = "";
       $size = "";
       $expectedyield = "";
       $composition = "";
       $claimid = "";
       $firstloop = true;
       $sql = "SELECT * FROM users WHERE userid='$userid';";
       $result =  mysqli_query($conn, $sql);
       while ($row = mysqli_fetch_assoc($result)) {
        $years = $row['years'];
        $capital = $row['capital'];
        if ($years < 3) {
          $sql = "SELECT * FROM claims WHERE status='Available' ORDER BY claimid DESC LIMIT 1;";
          $result =  mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            $claimid = $row['claimid'];
            $name = $row['name'];
            $size = $row['size'];
            $composition = $row['composition'];
            $expectedyield = $row['expectedyield'];
          }
        }elseif ($years < 5) {
          $sql = "SELECT * FROM claims WHERE status='Available' ORDER BY composition DESC LIMIT 1;";
          $result =  mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
            $claimid = $row['claimid'];
            $name = $row['name'];
            $size = $row['size'];
            $composition = $row['composition'];
            $expectedyield = $row['expectedyield'];
          }
        }else {
          $sql = "SELECT * FROM claims WHERE status='Available';";
          $result =  mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {

            if ($status == "Available") {
              if ($capital >= $expectedyield) {
                $claimid = $row['claimid'];
                $name = $row['name'];
                $size = $row['size'];
                $composition = $row['composition'];
                $expectedyield = $row['expectedyield'];
                break;
              }else {
                $difference = $expectedyield - $capital;
                if ($difference < 5000) {
                  $claimid = $row['claimid'];
                  $name = $row['name'];
                  $size = $row['size'];
                  $composition = $row['composition'];
                  $expectedyield = $row['expectedyield'];
                  break;
                }else {
                  $claimid = $row['claimid'];
                  $name = $row['name'];
                  $size = $row['size'];
                  $composition = $row['composition'];
                  $expectedyield = $row['expectedyield'];
                  break;
                }
              }
            }
          }
        }

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
         <form class="" action="extras/claimedit.php" method="post">
           <input type="hidden" name="claimid" value="'."$claimid".'">
           <div class="flex_vertical mid center">
             <button type="submit" class="regularbtn_wide" name="apply">Apply</button>
           </div>
         </form>
         </div>'
         ;
       }
        ?>
     </section>
   </body>
 </main>
 <script type="text/javascript">
 function showProfile() {
   document.getElementById('profile').style.display = "flex";
   document.getElementById('claims').style.display = "none";
   document.getElementById('paydiv').style.display = "none";
 }
 function showClaims() {
   document.getElementById('profile').style.display = "none";
   document.getElementById('paydiv').style.display = "none";
   document.getElementById('claims').style.display = "flex";
 }
 function paydiv() {
   document.getElementById('profile').style.display = "none";
   document.getElementById('paydiv').style.display = "flex";
   document.getElementById('claims').style.display = "none";
 }
 function calculate() {
   var amount = document.getElementById("returns").value;
   if (amount == "") {

   }else {
     var charges = amount * 5/100;
     var total = amount * 1 + charges;
     document.getElementById('label').innerHTML = "Expected amount to be paid is<br><br>Returns: <b>$"+amount+"</b><br><br>Annual inspection and<br>registration payments: <b>$"+charges+"</b><br><br><b><u>TOTAL: $"+total+"</u></b><br><br>";
     document.getElementById('pay').style.display = "block";
     document.getElementById('calculate').style.display = "none";
     document.getElementById('totalamount').value = total;
   }
 }
 function comfirmation() {
  var r = confirm("Comfirm you are forfeiting your claim");
  if (r == true) {
    return true;
  } else {
    return false;
  }
 }
 </script>
