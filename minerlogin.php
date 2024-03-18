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
       <div id="login"
       <?php if (isset($_GET['idexists']) || isset($_GET['usernameexists']) || isset($_GET['idfalse'])): ?>
         style="display:none;"
       <?php endif; ?>
       >
         <div class="generalholder flex_vertical">
           <div class="generalhoder_topbanner">
               <?php if (isset($_GET['logfail'])): ?>
                 <h1 style="color:red;" class="main_center1 centertext">Wrong username<br>Or<br>password</h1>
                 <?php else: ?>
                   <h1 class="main_center1 centertext">Miner Login.</h1>
               <?php endif; ?>
           </div>
           <div class="generalcontent">
             <div class="flex_vertical">
               <form onsubmit="return validateLogin(this)" style="margin-top:20px;" class="flex_vertical" action="extras/login.php" method="post">
                 <label for="username">Username</label>
                 <input type="text" class="generalinput inputwide" name="username" value="">
                 <label for="password">Password</label>
                 <input type="password" class="generalinput inputwide" name="password" value="">
                 <div class="flex_vertical mid center">
                   <button name="minerlogin" type="submit" class="regularbtn" style="margin-left: 0; margin-right:0;">
                     Login
                   </button>
                   <div class="divider">
                     <h1>OR</h1>
                   </div>
                 </div>
               </form>
               <div class="flex_horizontal mid center">
                 <button onclick="register()" class="regularbtn" style="margin-left: 0; margin-right:0;">
                   Register
                 </button>
               </div>
             </div>
           </div>
         </div>
       </div>

       <div id="register"
       <?php if (isset($_GET['idexists']) || isset($_GET['usernameexists']) || isset($_GET['idfalse'])): ?>
         style="display:block;"
       <?php endif; ?>
       >
         <form onsubmit="return validateReg(this)" class="grid" action="extras/login.php" method="post">
           <div class="generalholder flex_vertical">
             <div class="generalhoder_topbanner">
               <h1 class="main_center1 centertext"
               <?php if (isset($_GET['idexists']) || isset($_GET['usernameexists'])): ?>
                 style="color:red;"
               <?php endif; ?>
               >Personal Details</h1>
             </div>
             <div class="generalcontent">
               <div id="reginput1" class="flex_vertical">
                 <label for="surname">Surname</label>
                 <input type="text" class="generalinput inputwide" name="surname" value="">
                 <label for="firstname">First name(s)</label>
                 <input type="text" class="generalinput inputwide" name="firstname" value="">
                 <label for="phonenumber">Phone number</label>
                 <input type="number" class="generalinput inputwide" name="phonenumer" value="">
                 <?php if (isset($_GET['idexists'])): ?>
                   <label style="color:red;" for="idnumber">ID Number exists</label>
                   <input type="text" class="generalinput inputwide" style="border-color:red;" name="idnumber" value="<?php echo $_GET['idexists'] ?>">
                 <?php elseif (isset($_GET['idfalse'])): ?>
                     <label style="color:red;" for="idnumber">ID Number is not recognised</label>
                     <input type="text" class="generalinput inputwide" style="border-color:red;" name="idnumber" value="<?php echo $_GET['idfalse'] ?>">
                   <?php else: ?>
                     <label for="idnumber">ID Number</label>
                     <input type="text" class="generalinput inputwide" name="idnumber" value="">
                 <?php endif; ?>
                 <label for="years">Years of mining experience</label>
                 <input type="number" class="generalinput inputwide" name="years" value="0">
                 <label for="capital">Starting capital (in USD)</label>
                 <input type="number" class="generalinput inputwide" name="capital" value="">
               </div>
             </div>
           </div>
           <div class="generalholder flex_vertical">
             <div class="generalhoder_topbanner">
               <h1 class="main_center1 centertext"
               <?php if (isset($_GET['idexists']) || isset($_GET['usernameexists'])): ?>
                 style="color:red;"
               <?php endif; ?>
               >Account Details</h1>
             </div>
             <div class="generalcontent">
               <div id="reginput2" class="flex_vertical">
                 <?php if (isset($_GET['usernameexists'])): ?>
                   <label style="color:red;" for="username">Username exists</label>
                   <input type="text" style="border-color:red;" class="generalinput inputwide" name="username" value="<?php echo $_GET['usernameexists'] ?>">
                   <?php else: ?>
                     <label for="username">Username</label>
                     <input type="text" class="generalinput inputwide" name="username" value="">
                 <?php endif; ?>
                 <label for="password">Password</label>
                 <input type="password" class="generalinput inputwide" name="password" value="">
                 <div class="flex_vertical mid center">
                   <button name="miner_register" type="submit" class="regularbtn" style="margin-left: 0; margin-right:0;">
                     Register
                   </button>
                 </div>
               </div>
             </div>
           </div>
         </form>
       </div>
     </section>
   </body>
 </main>
 <script type="text/javascript">
  function register() {
    document.getElementById('login').style.display = "none";
    document.getElementById('register').style.display = "grid";
  }
  function validateLogin(elem) {
    var reject = false;
    $(elem).children('input').each(function () {
      this.style.borderColor = "black";
    });
    $(elem).children('input').each(function () {
      if (this.value == "") {
        this.style.borderColor = "red";
        reject = true;
      }
    });
    if (reject == true) {
      return false;
    }else {
      return true;
    }
  }

  function validateReg() {
    var reject = false;
    $('#reginput1').children('input').each(function () {
      this.style.borderColor = "black";
    });
    $('#reginput2').children('input').each(function () {
      this.style.borderColor = "black";
    });
    $('#reginput1').children('input').each(function () {
      if (this.value == "") {
        this.style.borderColor = "red";
        reject = true;
      }
    });
    $('#reginput2').children('input').each(function () {
      if (this.value == "") {
        this.style.borderColor = "red";
        reject = true;
      }
    });
    if (reject == true) {
      return false;
    }else {
      return true;
    }
  }
 </script>
