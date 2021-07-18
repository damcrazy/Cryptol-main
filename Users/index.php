<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-color:#bdc3c7">

    <div id="main-wrapper">
        <div class="login-box">
            <form action="login.php" method="post">
                <h2>LOGIN</h2>
                <div class="error">
                <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>
                <?php } ?>
                </div>
                <div class="user-box">

                    <input type="text" name="uname" required>
                    <label>User Name</label>
                </div>
                <div class="user-box">

                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <button type="submit" style="background-color: rgba(0, 0, 0, .5);border: 0px !important;padding: 15px!important; margin: 10px;">Login</button>
                <a href="signup.php" ><button  type="button" class="register_btn" style="background-color: rgba(0, 0, 0, .5);border: 0px !important;padding: 15px!important; margin-top: 10px;margin-left:30px">Register</button></a>
            </form>
        </div>
</body>

</html>