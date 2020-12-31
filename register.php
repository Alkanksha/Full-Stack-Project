<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="registration.php" method="POST">
  <fieldset id="register">
  <fieldset style="background-color:rgba(186, 164, 230,0.4);">
  <legend style="font-size:30px;"><b>Signup here!!</b></legend>
  <p style="font-size:50px;"><strong>Welcome to Bangtan World!!</strong></p>
  <label for="name"><b>Name:</b></label>
  <input type="text" id="name" name="name" autocomplete="on" class="input" required=""><br><br>
  <label for="email"><b>Email:</b></label>
  <input type="email" id="email" name="email" autocomplete="on" class="input" required=""><br><br>
  <label for="country"><b>Country:</b></label>
  <input list="country" name="country" autocomplete="on" class="input" required=""><br><br>
  <datalist id="country" name="country" size="5" class="input">
     <option value="India">
     </option><option value="Korea">
     </option><option value="US">
     </option><option value="Australia">
     </option><option value="China">
     </option>
  </datalist>
  <label for="password"><b>Password:</b></label>
  <input type="password" id="password" name="password" class="input" required=""><br><br>
  <input type="submit" value="REGISTER" class="login">
  <a href="login.php" class="register">Login</a>
  <br>
  </fieldset>
  </fieldset>
</form>

</body></html>