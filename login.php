<?php session_start(); ?>
<?php include('include\config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tech City</title>
    <link rel="stylesheet" href="assets\css\loginstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <meta charset="utf-8">
</head>
<body>

  <div class="login-container">
    <center><img src="img\TechTeam.png" alt="Tech Team Logo" width="100" height="100"></center>
    <center><h2>เข้าสู่ระบบ</h2></center>
    <form>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" ><br><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" ><br><br>

      
      
    </form>
    <div>
      <center>
        <input class="button" type="button" onclick="document.location='index.html'" value="ย้อนกลับ">
        <input class="button" type="button" name="login" onclick="document.location='owner/index.php'" value="เข้าสู่ระบบ">
      </center>
    </div>
  </div>

</body>
</html>
