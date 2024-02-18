<?php
session_start();
include('include/config.php');
if (isset($_POST['Confirm'])) {

    mysqli_query($mysqli_p, "SET NAMES UTF8");

    $Name = $_POST['Name'];
    $Phone_Number = $_POST['Phone_Number'];
    $Home_Number = $_POST['Home_Number'];
    $District = $_POST['District'];
    $Subdistrict = $_POST['Subdistrict'];
    $Province = $_POST['Province'];
    
    $sql = "INSERT INTO member (Member_Name,        
                                Members_Tel,
                                Member_Address,
                                Member_Subdistrict,
                                Member_Dustrict,
                                Member_Province,
                                Member_Since)
    VALUES('$Name',
        '$Phone_Number',
        '$Home_Number',
        '$District',
        '$Subdistrict',
        '$Province',
        NOW())";

    $q = mysqli_query($mysqli_p, $sql);
    if (!$q) {
        die("Error: " . mysqli_error($mysqli_p));
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tech City</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
    <meta charset="utf-8">
</head>

<body>
    <div class="header">
        <div class="menu">
            <div class="logo">
                <img onclick="document.location='index.html'" class="img-fluid h-100" src="img/TechTeam.png" alt="">
            </div>
            <a href="OrderService.php">บริการและสินค้า</a>
            <a href="OrderProduct.php">สินค้า</a>
            <a href="point.php">คะแนนสะสม</a>
            <a href="register.php" onclick="register()">สมัครสมาชิก</a>
            <a href="login.php" onclick="login()">เข้าสู่ระบบ</a>
        </div>
    </div>
    </div>
    <main>
        <div class="container">
            <div class="single-contact-box">
                <h2>
                    <center>สมัครสมาชิก</center>
                </h2>
                <form action="register.php" method="post">
                    <label for="name">ชื่อ </label>
                    <input type="text" id="name" name="Name" placeholder="กรอกชื่อ-นามสกุล" required>
                    <label for="phone">เบอร์โทรศัพท์ </label>
                    <input type="tel" id="phone" name="Phone_Number" placeholder="xxx-xxx-xxxx" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

                    <label for="Address"> ที่อยู่ </label>
                    <div>
                        <label>บ้านเลขที่:</label>
                        <input type="text" name="Home_Number" placeholder="ตัวอย่าง xxx/x ม.x" required>
                        <label>ตำบล:</label>
                        <input type="text" name="District" required>
                    </div>
                    <div>
                        <label>อำเภอ:</label>
                        <input type="text" name="Subdistrict" required>&nbsp;&nbsp;
                        <label>จังหวัด:</label>
                        <input type="text" name="Province" required>
                    </div>
                    <br>
                    <button type="submit" name="Confirm"> ยืนยัน</button>
                </form>
            </div>
        </div>
    </main>
</body>
<p class="time" id="real-time"></p>
<script src="assets/js/script.js"></script>
</html>