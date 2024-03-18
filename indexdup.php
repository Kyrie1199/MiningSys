<?php
   require 'extras/header.php';
   require 'extras/dbh.php';
 ?>
 <main>
   <body>
     <section class="lander noclip flex_vertical mid center productsplash">
       <div class="flex_horizontal fullwidth center">
          <img class="logo" src="picture_assets/finallogo.png" alt="">
        </div>
       <div class="flex_vertical mid">
         <div class="flex_horizontal center">
           <a href="#about">
             <button type="button" class="regularbtn2">
               <img class="icon_small" src="icons/about.svg" alt="">
             </button>
           </a>
           <a href="#products">
             <button type="button" class="regularbtn2">
               <img class="icon_small" src="icons/shopping.svg" alt="">
             </button>
           </a>
           <a href="#contact">
             <button type="button" class="regularbtn2">
               <img class="icon_small" src="icons/contacticon.svg" alt="">
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
         <h1 class="main_center1 centertext">For all your home decoration needs</h1>
          <p>We tailor make many products according to your specification to make sure your house becomes a home.</p>
       </div>
       <div class="flexgrid">
         <div class="roundedbox flex_vertical centertext fixed">
           <div class="roundedbackground2">
             <div class="flex_vertical fullwidth center rounded">
               <div class="flex_horizontal mid center">
                 <img class="gridimg" src="picture_assets/knott1.jpg" alt="">
                 <img class="gridimg" src="picture_assets/knott2.jpg" alt="">
                 <img class="gridimg" src="picture_assets/knott3.jpg" alt="">
                 <img class="gridimg" src="picture_assets/knott4.jpg" alt="">
               </div>
               <div class="flex_horizontal mid center">
                 <img class="gridimg" src="picture_assets/carpet1.jpg" alt="">
                 <img class="gridimg" src="picture_assets/carpet2.jpg" alt="">
                 <img class="gridimg" src="picture_assets/carpet3.jpg" alt="">
                 <img class="gridimg" src="picture_assets/mainimg.jpg" alt="">

               </div>
               <div class="flex_horizontal mid center">
                 <img class="gridimg" src="picture_assets/coushins.jpg" alt="">
                 <img class="gridimg" src="picture_assets/pillow2.jpg" alt="">
                 <img class="gridimg" src="picture_assets/ornaments.jpg" alt="">
                 <img class="gridimg" src="picture_assets/ornaments.jpg" alt="">
               </div>
               <div class="flex_horizontal mid center">
                 <img class="gridimg" src="picture_assets/knott1.jpg" alt="">
                 <img class="gridimg" src="picture_assets/knott4.jpg" alt="">
                 <img class="gridimg" src="picture_assets/knott5.jpg" alt="">
                 <img class="gridimg" src="picture_assets/knott5.jpg" alt="">
               </div>
              </div>
           </div>
           <div class="generalcontent">
             <h1 class="main_center1">Our specialties</h1>
             <div class="flex_horizontal fullwidth center">
                <img class="icon_small" src="icons/shopping.svg" alt="">
              </div>
             <p>We provide curtains, pillows, ornaments and carpets</p>
           </div>
           <p></p>
         </div>
         <div class="roundedbox flex_vertical centertext fixed">
           <div class="roundedbackground">
             <img src="picture_assets/car.jpg" alt="">
           </div>
           <div class="generalcontent">
             <h1 class="main_center1">Delivery</h1>
             <div class="flex_horizontal fullwidth center">
                <img class="icon_small" src="icons/car.svg" alt="">
              </div>
             <p>We offer delivery in Harare, Kwekwe and Bulawayo</p>
           </div>
           <p></p>
         </div>

         <div class="roundedbox flex_vertical centertext fixed">
           <div class="roundedbackground">
             <img src="picture_assets/coushins.jpg" alt="">
           </div>
           <div class="generalcontent">
             <h1 class="main_center1">Customer first</h1>
             <div class="flex_horizontal fullwidth center">
                <img class="icon_small" src="icons/profileimg.svg" alt="">
              </div>
             <p>We make accoding to your specification, that is, accourding to your likes, color and dimensions.</p>
           </div>
           <p></p>
         </div>
       </div>
     </section>
     <section id="products" class="supersection productsplash">
       <div class="sectionoverlay"></div>
       <!--<div class="stickyimgholder">
         <img src="picture_assets/mainimg.jpg" alt="">
       </div>-->
       <div class="highlight">
         <h1>Our products</h1>
         <p>From curtains to carpets, we've got you covered on all your needs.<br>Click on the following for more</p>
       </div>
       <div class="flexgrid">
         <button onclick="viewProducts('curtains',this,'Curtains')" class="roundedbox flex_vertical centertext fixed">
           <div class="roundedbackground">
             <img src="picture_assets/mainimg.jpg" alt="">
           </div>
           <div class="generalcontent">
             <h1 class="main_center1">Curtains</h1>
             <div class="flex_horizontal fullwidth center">
                <img class="icon_small" src="icons/curtains.svg" alt="">
              </div>
             <p>Cover your windows with stylish, modern and elegant curtains that make a statement.</p>
           </div>
         </button>
         <button onclick="viewProducts('ornaments',this,'Ornaments')" class="roundedbox flex_vertical centertext fixed">
           <div class="roundedbackground">
             <img src="picture_assets/ornaments.jpg" alt="">
           </div>
           <div class="generalcontent">
             <h1 class="main_center1">Ornaments</h1>
             <div class="flex_horizontal fullwidth center">
                <img class="icon_small" src="icons/ornaments.svg" alt="">
              </div>
             <p>It's the small touches that make a house into a home. We'll help you during that process with a fine selection of trinkets and ornaments</p>
           </div>
         </button>
         <button onclick="viewProducts('pillows',this,'Pillows')" class="roundedbox flex_vertical centertext fixed">
           <div class="roundedbackground">
             <img src="picture_assets/knott2.jpg" alt="">
           </div>
           <div class="generalcontent">
             <h1 class="main_center1">Pillows</h1>
             <div class="flex_horizontal fullwidth center">
                <img class="icon_small" src="icons/pillows.svg" alt="">
              </div>
             <p>Make your bed or sofas invite you to them with stylish, tailor made and beautiful pillows</p>
           </div>
         </button>
         <button onclick="viewProducts('carpets',this,'Carpets')" class="roundedbox flex_vertical centertext fixed">
           <div class="roundedbackground">
             <img src="picture_assets/carpet2.jpg" alt="">
           </div>
           <div class="generalcontent">
             <h1 class="main_center1">Carpets</h1>
             <div class="flex_horizontal fullwidth center">
                <img class="icon_small" src="icons/carpets.svg" alt="">
              </div>
             <p>Break the monotomistic pattern of your floor with beautiful carpets that you can choose from to suit any room or setup.</p>
           </div>
         </button>
       </div>
     </section>
     <section id="contact" class="supersection service">
       <div class="sectionoverlay"></div>
       <!--<div class="stickyimgholder">
         <img src="picture_assets/mainimg.jpg" alt="">
       </div>-->
       <div class="highlight">
         <h1>Contact Us</h1>
          <p>For quotations, consultation and just general QnA, we are available on multiple social media platforms<br>Click on the following to view more</p>
        </div>

        <div class="flexgrid">
          <button onclick="copy(this)" class="roundedbox flex_vertical centertext fixed">
            <div class="generalcontent fullwidth">
              <h1 class="main_center1">Whatsapp</h1>
              <div class="flex_horizontal fullwidth center">
                 <img class="icon_small" src="icons/whatsapp.svg" alt="">
               </div>
              <p>0772456001</p>
              <input type="text" style="opacity:0;" value="0772456001">
            </div>
          </button>
          <button onclick="copy(this)" class="roundedbox flex_vertical centertext fixed">
            <div class="generalcontent fullwidth">
              <h1 class="main_center1">SMS</h1>
              <div class="flex_horizontal fullwidth center">
                 <img class="icon_small" src="icons/sms.svg" alt="">
               </div>
              <p>0772456001</p>
              <input type="text" style="opacity:0;" value="0772456001">
            </div>
          </button>
          <button onclick="viewProducts('curtains',this,'Curtains')" class="roundedbox flex_vertical centertext fixed">
            <div class="generalcontent fullwidth">
              <h1 class="main_center1">Facebook</h1>
              <div class="flex_horizontal fullwidth center">
                 <img class="icon_small" src="icons/facebook.svg" alt="">
               </div>
              <p>Gifted hands</p>
            </div>
          </button>
          <a href="mailto:fchikowero@gmail.com" class="roundedbox flex_vertical centertext fixed">
            <div class="generalcontent fullwidth">
              <h1 class="main_center1">Email</h1>
              <div class="flex_horizontal fullwidth center">
                 <img class="icon_small" src="icons/email.svg" alt="">
               </div>
              <p>fchikowero@gmail.com</p>
              <input type="text" style="opacity:0;" value="0772456001">
            </div>
          </a>
        </div>
       </div>
     </section>
     <div id="bottompop">
       <div class="contentdiv">
         <div class="flex_horizontal mid sticky white">
           <div onclick="bottomtoogle()" class="topnavbtn close">
             <img src="icons/exit.svg" alt="">
           </div>
           <h1 id="selectedcatalog" style="margin-left: 10px; margin-top:15px;" class="">fff</h1>
         </div>
         <div id="cataloguediv">
           <div id="curtains" class="flexgrid leftbase">
           <?php
             $sql = "SELECT * FROM products WHERE category='Curtains' LIMIT 20;";
             $result =  mysqli_query($conn, $sql);
             $resultCheck = mysqli_num_rows($result);
             while ($row = mysqli_fetch_assoc($result)) {
               $productid = $row['productid'];
               $name = $row['name'];
               $price = $row['price'];
               $description = $row['description'];
               $picture1 = $row['picture1'];
               $picture2 = $row['picture2'];
               $picture3 = $row['picture3'];

               $allpictures = $picture1."_,_".$picture2."_,_".$picture3;
               echo '<div id="product'."$productid".'" class="roundedbox">
                 <div class="rboximg">
                   <img id="image'."$productid".'" class="rboximg_src" src="'."$picture1".'" alt="">
                   <div class="pricefloater">
                     <div class="floatingdiv">
                       <p>'."$name".'</p>
                     </div>
                     <div class="floatingdiv">
                       <p>$USD'."$price".'</p>
                     </div>
                   </div>
                   <div class="arrowbox">

                     <div onclick="imageLeft('."'$productid'".','."'$allpictures'".')" class="leftarrow">
                       <img src="icons/leftarrow.svg" alt="">
                     </div>

                     <div onclick="showDescription('."$productid".')" class="triggerbox">
                     </div>

                     <div onclick="imageRight('."'$productid'".','."'$allpictures'".')" class="rightarrow">
                       <img src="icons/leftarrow.svg" alt="">
                     </div>
                   </div>
                 </div>
                 <div class="rboxinfo">
                   <div style="display:none" class="generalcontent">
                   <div class="topnavdeck">
                     <div onclick="closeDescription('."$productid".')" class="topnavbtn close">
                       <img src="icons/exit.svg" alt="">
                     </div>
                   </div>
                     <p>'."$description".'</p>
                   </div>
                 </div>
               </div>';
             }
            ?>
         </div>
           <div id="ornaments" class="flexgrid leftbase">
           <?php
             $sql = "SELECT * FROM products WHERE category='Ornaments' LIMIT 20;";
             $result =  mysqli_query($conn, $sql);
             $resultCheck = mysqli_num_rows($result);
             while ($row = mysqli_fetch_assoc($result)) {
               $productid = $row['productid'];
               $name = $row['name'];
               $price = $row['price'];
               $description = $row['description'];
               $picture1 = $row['picture1'];
               $picture2 = $row['picture2'];
               $picture3 = $row['picture3'];

               $allpictures = $picture1."_,_".$picture2."_,_".$picture3;
               echo '<div id="product'."$productid".'" class="roundedbox">
                 <div class="rboximg">
                   <img id="image'."$productid".'" class="rboximg_src" src="'."$picture1".'" alt="">
                   <div class="pricefloater">
                     <div class="floatingdiv">
                       <p>'."$name".'</p>
                     </div>
                     <div class="floatingdiv">
                       <p>$USD'."$price".'</p>
                     </div>
                   </div>
                   <div class="arrowbox">

                     <div onclick="imageLeft('."'$productid'".','."'$allpictures'".')" class="leftarrow">
                       <img src="icons/leftarrow.svg" alt="">
                     </div>

                     <div onclick="showDescription('."$productid".')" class="triggerbox">
                     </div>

                     <div onclick="imageRight('."'$productid'".','."'$allpictures'".')" class="rightarrow">
                       <img src="icons/leftarrow.svg" alt="">
                     </div>
                   </div>
                 </div>
                 <div class="rboxinfo">
                   <div style="display:none" class="generalcontent">
                   <div class="topnavdeck">
                     <div onclick="closeDescription('."$productid".')" class="topnavbtn close">
                       <img src="icons/exit.svg" alt="">
                     </div>
                   </div>
                     <p>'."$description".'</p>
                   </div>
                 </div>
               </div>';

             }
            ?>
         </div>
           <div id="pillows" class="flexgrid leftbase">
           <?php
             $sql = "SELECT * FROM products WHERE category='Pillows' LIMIT 20;";
             $result =  mysqli_query($conn, $sql);
             $resultCheck = mysqli_num_rows($result);
             while ($row = mysqli_fetch_assoc($result)) {
               $productid = $row['productid'];
               $name = $row['name'];
               $price = $row['price'];
               $description = $row['description'];
               $picture1 = $row['picture1'];
               $picture2 = $row['picture2'];
               $picture3 = $row['picture3'];

               $allpictures = $picture1."_,_".$picture2."_,_".$picture3;
               echo '<div id="product'."$productid".'" class="roundedbox">
                 <div class="rboximg">
                   <img id="image'."$productid".'" class="rboximg_src" src="'."$picture1".'" alt="">
                   <div class="pricefloater">
                     <div class="floatingdiv">
                       <p>'."$name".'</p>
                     </div>
                     <div class="floatingdiv">
                       <p>$USD'."$price".'</p>
                     </div>
                   </div>
                   <div class="arrowbox">

                     <div onclick="imageLeft('."'$productid'".','."'$allpictures'".')" class="leftarrow">
                       <img src="icons/leftarrow.svg" alt="">
                     </div>

                     <div onclick="showDescription('."$productid".')" class="triggerbox">
                     </div>

                     <div onclick="imageRight('."'$productid'".','."'$allpictures'".')" class="rightarrow">
                       <img src="icons/leftarrow.svg" alt="">
                     </div>
                   </div>
                 </div>
                 <div class="rboxinfo">
                   <div style="display:none" class="generalcontent">
                   <div class="topnavdeck">
                     <div onclick="closeDescription('."$productid".')" class="topnavbtn close">
                       <img src="icons/exit.svg" alt="">
                     </div>
                   </div>
                     <p>'."$description".'</p>
                   </div>
                 </div>
               </div>';

             }
            ?>
         </div>
           <div id="carpets" class="flexgrid leftbase">
           <?php
             $sql = "SELECT * FROM products WHERE category='Carpets' LIMIT 20;";
             $result =  mysqli_query($conn, $sql);
             $resultCheck = mysqli_num_rows($result);
             while ($row = mysqli_fetch_assoc($result)) {
               $productid = $row['productid'];
               $name = $row['name'];
               $price = $row['price'];
               $description = $row['description'];
               $picture1 = $row['picture1'];
               $picture2 = $row['picture2'];
               $picture3 = $row['picture3'];

               $allpictures = $picture1."_,_".$picture2."_,_".$picture3;
               echo '<div id="product'."$productid".'" class="roundedbox">
                 <div class="rboximg">
                   <img id="image'."$productid".'" class="rboximg_src" src="'."$picture1".'" alt="">
                   <div class="pricefloater">
                     <div class="floatingdiv">
                       <p>'."$name".'</p>
                     </div>
                     <div class="floatingdiv">
                       <p>$USD'."$price".'</p>
                     </div>
                   </div>
                   <div class="arrowbox">

                     <div onclick="imageLeft('."'$productid'".','."'$allpictures'".')" class="leftarrow">
                       <img src="icons/leftarrow.svg" alt="">
                     </div>

                     <div onclick="showDescription('."$productid".')" class="triggerbox">
                     </div>

                     <div onclick="imageRight('."'$productid'".','."'$allpictures'".')" class="rightarrow">
                       <img src="icons/leftarrow.svg" alt="">
                     </div>
                   </div>
                 </div>
                 <div class="rboxinfo">
                   <div style="display:none" class="generalcontent">
                   <div class="topnavdeck">
                     <div onclick="closeDescription('."$productid".')" class="topnavbtn close">
                       <img src="icons/exit.svg" alt="">
                     </div>
                   </div>
                     <p>'."$description".'</p>
                   </div>
                 </div>
               </div>';
             }
            ?>
         </div>
         </div>
       </div>
     </div>
     <div id="myProgress">
       <p id="loadingStatus">Loading</p>
       <div id="myBar">
       </div>
     </div>
     <div id="errordiv">
      <div style="height:100%;" class="flex_horizontal mid center">
        <p id="errormessage">Error message</p>
      </div>
    </div>
    <div id="successdiv">
      <div style="height:100%;" class="flex_horizontal mid center">
        <p id="successmessage">Error message</p>
      </div>
    </div>
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
