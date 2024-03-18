<?php
   require 'extras/header.php';
   require 'extras/dbh.php';
 ?>
 <head>
   <title>Login</title>
 </head>
 <main>
   <body>
     <section class="lander noclip flex_vertical mid center mining">
       <div class="sectionoverlay"></div>
       <?php if (isset($_GET['logfail'])): ?>
         <h1 style="color:red;" class="main_center1 centertext">Wrong username<br>Or<br>password</h1>
       <?php elseif (isset($_GET['empty'])): ?>
         <h1 style="color:red;" class="main_center1 centertext">All fields must be<br>filled in</h1>
         <?php else: ?>
           <h1 class="main_center1 centertext"> Admin Login.</h1>
       <?php endif; ?>
       <p class="centertext white">Please use the credentials provided to you by the ministry.</p>
       <div class="flex_vertical">
         <form style="margin-top:20px;" class="flex_vertical" action="extras/login.php" method="post">
           <label for="username">Username</label>
           <input type="text" class="generalinput inputwide" name="username" value="">
           <label for="password">Password</label>
           <input type="password" class="generalinput inputwide" name="password" value="">
           <div class="flex_horizontal mid center">
             <button name="adminlogin" type="submit" class="regularbtn_wide" style="margin-left: 0; margin-right:0;">
               Login
             </button>
           </div>
         </form>
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
