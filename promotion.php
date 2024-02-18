<?php
session_start();
include('include/config.php');
?>
<!doctype html>
<html class="no-js" lang="en">
<!-- อยู่ที่ ออเดอร์ดีเทล -->
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
                <form method="post">
                    <h2><b><center>รายชื่อโปรโมชั่น</center></b></h2>
                    <label class="radio">
						<input type="radio" name="PRO001" value="Pro1"> สะสมครบ 1,000 แต้ม มีสิทธิใช้บริการอบข้าว 1 ครั้ง
					</label>
                    <label class="radio">
						<input type="radio" name="PRO001" value="Pro2"> สะสมครบ 3,000 แต้ม มีสิทธิ์เลือกใช้บริการได้ 1 อย่าง
					</label>
                    <label class="radio">
						<input type="radio" name="PRO001" value="Pro3"> สะสมครบ 500 แต้ม มีสิทธิ์ใช้บริการคัด/ฝัดข้าว 1 ครั้ง
					</label>
                    <label class="radio">
						<input type="radio" name="PRO001" value="Pro4"> ไม่เลือกอะไรเลย
					</label>
                    

                    <div> <center>
                        <input class="btn " type="button"  onclick="document.location='index.html'"value="ย้อนกลับ">
                        <input class="btn " type="button" onclick="document.location='register.php'" value="สมัครสมาชิก">
                       
                        <!-- Use JavaScript to submit the form asynchronously -->
                        <input class="btn " type="button" onclick="document.location='OrderService.php'" value="ถัดไป">
                    </div></center>
                </form>
            </div>
        </div>
    </section>
    <p class="time" id="real-time"></p>
    <script src="assets/js/script.js"></script>
</body>

</html>
