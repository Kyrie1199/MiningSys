<?php
   require 'extras/header.php';
   require 'extras/dbh.php';
 ?>
 <head>
   <title>Mining</title>
 </head>
 <main>
   <body>
     
     <section class="lander noclip flex_vertical mid center mining">
       <div class="sectionoverlay"></div>
       <h1 class="main_center1 centertext">Welcome to the Ministry of Mines<br> And Mining Development.</h1>
       <p class="centertext white">The ministry of Mines and Mining Development has its key deliverable as the generation of revenue for the nation of Zimbabwe through mining. In the whole mining value chain the Ministry does business with a variety of stakeholders. The Ministry makes a commitment to provide service to the specified quality standards and within stated limits.</p>
       <div class="flex_vertical mid">
         <div class="flex_horizontal center">
           <a href="adminlogin.php">
             <button type="button" class="regularbtn_wide">
               Admin login
             </button>
           </a>
           <a href="minerlogin.php">
             <button type="button" class="regularbtn_wide">
               Miner login/signup
             </button>
           </a>

         </div>
       </div>
     </section>

     <section id="about" class="supersection homedeco">
       <div class="sectionoverlay"></div>
       <!--<div class="stickyimgholder">
         <img src="picture_assets/mainimg.jpg" alt="">
       </div>-->
       <div class="highlight">
         <h1 class="main_center1 centertext">Reach out to us</h1>
          <p>We are available to reply to your messages and calls.</p>
       </div>
       <div class="flexgrid">
         <div class="roundedbox flex_vertical centertext fixed">
           <div class="generalcontent">
             <div class="contentheading">
               <h1 class="main_center1">We supply<br>in bulk</h1>
             </div>
             <div class="flex_horizontal fullwidth center">
                <img class="icon_small" src="icons/shopping.svg" alt="">
              </div>
             <p>We service tenders were we supply in bulk only. We do not supply individual/single items</p>
           </div>
           <p></p>
         </div>
         <div class="roundedbox flex_vertical centertext fixed">
           <div class="generalcontent">
             <div class="contentheading">
               <h1 class="main_center1">Consultation</h1>
             </div>
             <div class="flex_horizontal fullwidth center">
                <img class="icon_small" src="icons/help.svg" alt="">
              </div>
             <p>You can consult our experienced board members and employees on an the requirements you need in order to emark on any project or undertaking</p>
           </div>
           <p></p>
         </div>
         <div class="roundedbox flex_vertical centertext fixed">
           <div class="generalcontent">
             <div class="contentheading">
               <h1 class="main_center1">Free<br>Quotaion</h1>
             </div>
             <div class="flex_horizontal fullwidth center">
                <img class="icon_small" src="icons/quote.svg" alt="">
              </div>
             <p>We offer free quotaions and provide a detailed report where you can make a decision on what to get and which brands to trust</p>
           </div>
           <p></p>
         </div>
       </div>
     </section>
   </body>
 </main>
 <script type="text/javascript">
 var slideDown = true;
 var lockNav = false;
 var prevScrollpos = window.pageYOffset;
 window.onscroll = function() {
 var currentScrollPos = window.pageYOffset;
 if (lockNav == false) {
   if (prevScrollpos > currentScrollPos) {
     document.getElementById("navbar").style.top = "0";
   } else {
     document.getElementById("navbar").style.top = "-50px";
   }
   prevScrollpos = currentScrollPos;
 }
 }
 </script>
