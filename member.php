<?php
session_start();
include('include/config.php');
?>

<!doctype html>
<html class="no-js" lang="en">

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
            <a href="register.php">สมัครสมาชิก</a>
            <a href="login.php">เข้าสู่ระบบ</a>
        </div>
    </div>

    <section id="contact" class="contact">
        <div class="container">
            <div class="single-contact-box">
                <form method="post" action="OrderService.php">
                    <h2><b><center>รายชื่อสมาชิก</center></b></h2>
                    <input type="text" name="search" placeholder="ค้นหารายชื่อสมาชิก">
                    <?php
                    
                    if (isset($_POST['search'])) {
                        $search = $mysqli_p->real_escape_string($_POST['search']);
                        $sql = "SELECT * FROM `member` WHERE `Member_Name` LIKE '%$search%' OR `Members_Tel` LIKE '%$search%'";
                    } else {
                        // If search parameter is not set, fetch all members
                        $sql = "SELECT * FROM `member`";
                    }
                    $result =  $mysqli_p->query($sql);

                    // ตรวจสอบว่ามีการเลือกสมาชิกหรือไม่
                    // อัปเดตข้อมูล Member_Id ในตาราง orderservice และ orderproduct
                    if (isset($_POST['selected_member_id'])) {
                        $selected_member_id = $_POST['selected_member_id'];
                    
                        // ตรวจสอบค่า Member_Id ที่เลือก
                        if (empty($selected_member_id)) {
                        echo "<script>alert('กรุณาเลือกสมาชิก');</script>";
                        } else {
                    
                        // อัปเดตข้อมูล Member_Id
                        $sql_update_orderservice = "UPDATE orderservice  
                        INNER JOIN member m ON Member_Id != m.Member_Id
                        WHERE Member_Id = $selected_member_id";
                        $mysqli_p->query($sql_update_orderservice);
                    
                        $sql_update_orderproduct = "UPDATE orderproduct 
                        INNER JOIN member  ON Member_Id != Member_Id
                        WHERE Member_Id = $selected_member_id";
                        $mysqli_p->query($sql_update_orderproduct);
                    
                        // แสดงข้อความแจ้งเตือน
                        echo "<script>alert('อัปเดตข้อมูล Member_Id เรียบร้อย');</script>";
                        }
                    }

                    while ($row = $result->fetch_assoc()) {
                        // Radio button for each member
                        echo "<label><input type='radio' name='selected_member_id' value='" . $row["Member_Id"] . "'> ID: " . $row["Member_Id"] . "  ชื่อ : " . $row["Member_Name"] . " Tel :" . $row["Members_Tel"] . "</label><br>";
                    }

                    $mysqli_p->close();

                    ?>

                    <div> <center>
                            <input class="btn" type="button" onclick="document.location='index.html'" value="ย้อนกลับ">
                            <input class="btn" type="button" onclick="document.location='register.php'" value="สมัครสมาชิก">
                            <!-- Use JavaScript to submit the form asynchronously -->
                            <input class="btn" type="submit" value="ถัดไป">
                    </div></center>
                </form>
            </div>
        </div>
    </section>
    <p class="time" id="real-time"></p>
    <script src="assets/js/script.js"></script>
</body>

</html>
