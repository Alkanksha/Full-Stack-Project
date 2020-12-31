<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Login|Bangtan</title>
   <meta charset="UTF-8">
   <meta name="description" content="Bangtan">
   <meta name="keywords" content="Bangtan,Bts,Army">
   <meta name="author" content="Akanksha">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="loginvalid.php" method="post">
  <fieldset id="login">
  <fieldset style="background-color:rgba(186, 164, 230,0.4);">
  <legend style="font-size:30px;"><b>Login!!</b></legend>
  <p style="font-size:40px;"><b>Hello ARMY!!</b></p>
  <p style="font-size:35px;" title:"Most loving Crackheads community"><strong>Welcome to Most Loyal fandom in World.</strong></p>
  <label for="email"><b>Email:</b></label>
  <input type="email" id="email" name="email" autocomplete="on" class="input" required><br><br>
  <label for="Password"><b>Password:</b></label>
  <input type="password" id="password" name="password" class="input" required><br>
  <br>
  <div style="color:rgb(255,0,0);font-size:30px;text-align:center;">
    <?php
        if(isset($_SESSION["error"])){
          $error=$_SESSION["error"];
          echo "<span>$error</span>";
        }
    ?>
  </div>
  <br>
  <input type="submit" value="Login" class="login">
  <a href="register.php" class="register" title="Not user already?">Register</a>
  <br>
  </fieldset>
  </fieldset>
</form>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>