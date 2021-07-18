<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#bdc3c7">
<div id="main-wrapper">
            <div class="login-box">
     <form action="signup-check.php" method="post">
     <h2>REGISTER</h2>
          <div class="error">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
          </div>
          <div class="success">
          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          </div>
          <div class="user-box">
          
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      required
                      value="<?php echo $_GET['name']; ?>">
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      required><br>
          <?php }?>
          <label>Name</label>
          </div>

          <div class="user-box">
          
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname"
                      required
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      required><br>
          <?php }?>
          <label>User Name</label>
          </div>
          <div class="user-box">
     	
     	<input type="password" 
                 name="password" 
                 required><br>
                 <label>Password</label>
          </div>

          <div class="user-box">
          
          <input type="password" 
                 name="re_password" 
                 required><br>

                 <label>Re Password</label>
          </div>
     	<button type="submit" style="background-color: rgba(0, 0, 0, .5);border: 0px !important;padding: 15px!important; margin: 10px;">Sign Up</button>
          <a href="index.php"><button  type="button" style="background-color: rgba(0, 0, 0, .5);border: 0px !important;padding: 15px!important; margin-top: 10px;margin-left:30px">Go back to login</button></a>
     </form>
</body>
</html>