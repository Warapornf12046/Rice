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
            <a href="register.php" onclick="register()">สมัครสมาชิก</a>
            <a href="login.php" onclick="login()">เข้าสู่ระบบ</a>
        </div>
		</div>
	</div>

	<section id="contact" class="contact">
		<div class="container">
			<div class="single-contact-box">
				<form>
					<h2><b><center>สรุปรายการ</center></b></h2>
					

					

					
					<div> <center>
						<input class="btn " type="button"  onclick="document.location='OrderProduct.php'"value="ย้อนกลับ">
						<input class="btn " type="button" onclick="document.location='receipt.php'" value="ยืนยัน">
					</div></center>
				</form>
			</div>
		</div>
	</section>
	<p class="time" id="real-time"></p>
    <script src="assets/js/script.js"></script>
</body>

</html>