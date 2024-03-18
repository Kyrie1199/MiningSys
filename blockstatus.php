<?php
   require 'extras/header.php';
   require 'extras/dbh.php';
 ?>
 <main>
   <body>
     <section class="lander noclip flex_vertical mid center mining">
       <div class="sectionoverlay"></div>
       <h1 class="main_center1 centertext">Claim mine</h1>
       <p class="centertext white">Authentication needed.</p>
       <div class="flex_vertical mid">
         <input type="text" name="" class="generalinput">
         <div class="flex_horizontal mid center fullwidth">
           <button type="button" class="regularbtn" name="button">
             Confirm
           </button>
         </div>
       </div>
     </section>

     <section id="about" class="supersection homedeco">
       <div class="sectionoverlay"></div>
       <!--<div class="stickyimgholder">
         <img src="picture_assets/mainimg.jpg" alt="">
       </div>-->
       <div class="highlight">
         <h1 class="main_center1 centertext">Greetings from adept inc</h1>
          <p>Adept incorporation is a private limited company that provides customer based services in procuring and supplying of goods requested. </p>
       </div>
       <div class="flexgrid">
         <div class="roundedbox flex_vertical centertext fixed">
           <div class="generalcontent">
             <div class="contentheading">
               <h1 class="main_center1">Tender<br>servicing</h1>
             </div>
             <div class="flex_horizontal fullwidth center">
                <img class="icon_small" src="icons/contract.svg" alt="">
              </div>
             <p>ADEPT has experience in servicing tenders, supplying clients with consumable and non consumable products based on a client’s needs.</p>
           </div>
           <p></p>
         </div>
         <div class="roundedbox flex_vertical centertext fixed">
           <div class="generalcontent">
             <div class="contentheading">
               <h1 class="main_center1">Local or international</h1>
             </div>
             <div class="flex_horizontal fullwidth center">
                <img class="icon_small" src="icons/globe.svg" alt="">
              </div>
             <p>We source from both local and international supliers to ensure you havr the right balance between quality and affordability</p>
           </div>
           <p></p>
         </div>
         <div class="roundedbox flex_vertical centertext fixed">
           <div class="generalcontent">
             <div class="contentheading">
               <h1 class="main_center1">World-class<br>Support</h1>
             </div>
             <div class="flex_horizontal fullwidth center">
                <img class="icon_small" src="icons/quality.svg" alt="">
              </div>
             <p>We provide excellent, world-class customer care and support during and after a procurement contract is complete.</p>
           </div>
           <p></p>
         </div>
       </div>
     </section>
   </body>
 </main>
 <script type="text/javascript">
 function copy(elem) {
  /* Get the text field */
  $(elem).children('.generalcontent').each(function () {
    $(this).children('input').each(function () {
      /* Select the text field */
      this.select();
      this.setSelectionRange(0, 99999); /* For mobile devices */

      /* Copy the text inside the text field */
      document.execCommand("copy");
      $('#successdiv').slideDown().delay(5000).slideUp();
      $('#successmessage').html("Copied!");
      /* Alert the copied text */
    });
  });

}

 </script>
