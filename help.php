<?php
   require 'extras/masterheader2.php';
 ?>
 <main>
   <body>
     </div>
     <div style="border-radius:0; display: flex; justify-content: center; align-items: center;background-color: rgb(70, 146, 10); width:100%;" class="band">
       <div class="bandinner">
         <div class="flex_vertical_center">
           <div class="flex_horizontal_center">
             <h1 style="color:white;" class="main_center1" >Help Center</h1>
           </div>
           <div class="flex_vertical_center halfbox">
             <div class="bounce_area">
               <img class="icon_med absoluteelem bounce-3" src="icons/help.svg" alt="">
             </div>
           </div>
           <p style="text-align:center; color:white;" class="main_paragraph">How to Find Products on 1688.com, Also Called Alibaba.cn</p>
         </div>

         <div class="gridbox">
           <h1 class="main_center1" style="color:white;">Headings in section</h1>
           <div style="grid-template-columns: 1fr 1fr 1fr;" class="gridbox-4 ">
             <button class="squarebtn">
               <img class="icon_small" src="icons/email.svg" alt="">
               <p>Email</p>
             </button>
             <button class="squarebtn">
               <img class="icon_small" src="icons/whatsapp.svg" alt="">
               <p>Phone Number</p>
             </button>
             <button class="squarebtn">
               <img class="icon_small" src="icons/time.svg" alt="">
               <p>Working hours</p>
             </button>
           </div>
         </div>
       </div>
     </div>

     <section style="padding-top:.8rem; padding-bottom:.8rem;">
       <div class="big90">
         <p style="text-align:left;" class="main_paragraph">1688.com is also called Alibaba.cn, it's the Chinese Alibaba wholesale site. However, it's NOT only a Chinese version of Alibaba, but also a cheaper source site for sourcing products than Alibaba.com. 1688.com is also the root product source for many resellers on other platform.<br><br><br></p>
         <h1>Prerequisite Tools:</h1>
         <p>1688.com is very similar to Alibaba.com, and the only difficulty you are facing to find the product you want is the Chinese language. In order to solve this obstacle, you need the translation tool to get the single page or the whole website translated into your local language. The following tools are recommended:<br>
         -Google Chrome Browser: http://www.google.com/chrome (Strongly Recommended)<br>
         -Google Toolbar: http://toolbar.google.com<br><br><br></p>
         <h1>Steps to Find Products on 1688.com(Wholesale Site, Also Called Alibaba.cn)</h1>
         <p style="margin-bottom:0; text-align:left;" class="main_paragraph">
           Usually, wholesaler users or resellers only search the items they want instead of browsing the site to purchase items randomly. In this topic, we’re going down step by step to demonstrate you how to find products on 1688.com with Search Portal provided by FreeShoppingChina.com.<br><br><br>
           1. Firstly, you have to keep in mind that Chinese Character keywords should be used in 1688.com’s search. English keywords will only bring much fewer results. Well, we know you may not able to type Chinese, so we have already solved the problem for you.<br><br><br>
           2. We are proving a Search Entry on FreeShoppingChina.com, you only need to type English keywords inside and click “Search on 1688.com”, the keyword will be automatically translated into Chinese and sent to 1688.com, followed by a popped up search result page from 1688.com. To use this Search Entry, please sign in FreeShoppingChina.com and go to Member Center, and you will see the following page:<br><br><br></p>
           <div class="imgframesq">
             <img src="picture_assets/china1.gif" alt="">
           </div>
           <div class="imgframesq">
             <img src="picture_assets/china2.gif" alt="">
           </div>
           <div class="imgframesq">
             <img src="picture_assets/china3.gif" alt="">
           </div>
           <p class="main_paragraph">3. Once the page is loaded, Chrome will pop up a hit which would allow you to translate the page into your local language. Here we are taking English for example（You may also want it to be Russian if you are from Russia）. If no hit was popped up for you to enable translation, please right click on the blank part of the page and select “Translate to English” from the dropdown menu.<br><br><br></p>
           <div class="imgframesq">
             <img src="picture_assets/china4.gif" alt="">
           </div>
           <div class="imgframesq">
             <img src="picture_assets/china5.gif" alt="">
           </div>
           <p>4. Select the appropriate language and set the option to be “Always translate Chinese (Simplified Han) to English”, so all the following pages opened will be automatically translated into English as if you are browsing English website. Sometimes, the translating process may stop on some page. You only need to refresh the page to have the browser try again. <br><br><br>
           5. Select an appropriate product and click on the product image to open the product information page. Check the information inside and determine if this is the product you want to buy.<br><br><br></p>
           <div class="imgframesq">
             <img src="picture_assets/china6.gif" alt="">
           </div>
           <div class="imgframesq">
             <img src="picture_assets/china7.gif" alt="">
           </div>
           <p class="main_paragraph">6. If you are interested in this product and want to buy it, copy the information page link to our system to add a new order, we will buy it for you within 24 hours.  When copying the page link, you may also need to specify the size, color, quantity, and any other info of the product, if needed.<br><br><br></p>
           <div class="imgframesq">
             <img src="picture_assets/china8.gif" alt="">
           </div>
           <div class="imgframesq">
             <img src="picture_assets/china9.gif" alt="">
           </div>
           <p>As we can see in the above, we are using translating tool to translate the page and search entry on FreeShoppingChina.com to walk around the Chinese search problem.
         </p>
       </div>
     </section>

   </body>
 </main>

 <script type="text/javascript">
 $(document).ready(function(){
   $(".textghost").each(function() {
      var length = Math.floor(Math.random() * (95 - 50)) + 50;
      $(this).css("width", length + "%");
  });
  $(".note").each(function() {
     while (true) {
       var angle = Math.floor(Math.random() * (5 - -3)) + -3;
       if (angle <= 2 && angle >= -2) {
       }
       else {
         break;
       }
     }
     $(this).css("transform", "rotate(" + angle + "deg)");
 });

});

 function validateForm() {
  var x = document.forms["searchform"]["query"].value;
  if (x == "adminadd") {
    window.open("admin.home.php","_self");
    return false;
  }
}
function validateTrackNum() {
 var x = document.forms["trackform"]["ordernumber"].value;
 if (x == "") {
   document.getElementById('popupdiv_text').innerHTML = "Please enter your order number!";
   popupRise("red");
   return false;
 }
}
function popupRise(color) {
  if (color == "red") {
    document.getElementById('popupdiv').style.backgroundColor = "red";
  }else {
    document.getElementById('popupdiv').style.backgroundColor = "green";
  }
 var elem = document.getElementById("popupdiv");
 elem.style.display = "block";
 var pos = -150;
 var id = setInterval(frame, 3);
 function frame() {
   if (pos == 0) {
     setTimeout(beginDescent, 5000);
     clearInterval(id);
   } else {
     pos++;
     elem.style.bottom = pos + "px";
   }
 }
}
function beginDescent() {
   var elem = document.getElementById("popupdiv");
   var pos = 0;
   var id = setInterval(frame, 3);
   function frame() {
     if (pos == -150) {
       elem.style.display = "none";
       clearInterval(id);
     } else {
       pos--;
       elem.style.bottom = pos + "px";
     }
   }
}

 </script>
