<?php
session_start();
include('include/config.php');
if (isset($_POST['orderpro'])) {

    mysqli_query($mysqli_p, "SET NAMES UTF8");

    $product1 = $_POST['rice_bran'];
    $product2 = $_POST['Husk'];
    $product3 = $_POST['rice_chunks'];
    $product4 = $_POST['broken_rice'];

// โปรดักไหนที่ไม่ซื้อโปรดเติม 0 ให้ด้วย
    $totalPrice = ($product1*8) + ($product2*8) + ($product3*5) + ($product4*10);
    
    $sql = "INSERT INTO orderproduct (Kg_Product1,        
                                    Kg_Product2,
                                    Kg_Product3,
                                    Kg_Product4,
                                    orderProduct_Date,
                                    total_Product)
    VALUES('$product1',
        '$product2',
        '$product3',
        '$product4',
        NOW(),
        '$totalPrice')
        ";

    $q = mysqli_query($mysqli_p, $sql);
    if (!$q) {
        die("Error: " . mysqli_error($mysqli_p));
    }
}
?>


<!-- link ไป ออเดอร์ดีเทล -->
<!-- เพิ่มว่าใช้โปรโมชั่นหรือไม่ -->
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

	<div class="container"><h1 class="text-center">รายละเอียดการซื้อสินค้า</h1></div>
    <div class="containerBox">
    <form action="OrderProduct.php" method="post" onsubmit="return confirm('ยืนยันการส่งข้อมูล ??')">
		<div class="service_product-details">
			<div class="radio-container">
				<h3><b><center>สินค้า</center></b></h3>
			</div>
			<div class="form-section">
				<div class="radio-group">
					<label class="radio">
						รำข้าว
						<input type="number" name="rice_bran" value="รำข้าว"> กิโลกรัม
					</label>
					<label class="radio">
						แกลบ
						<input type="number" name="Husk" value="แกลบ"> กิโลกรัม
					</label>
					<label class="radio">
						ข้าวท่อน
						<input type="number" name="rice_chunks" value="ข้าวท่อน"> กิโลกรัม
					</label>
					<label class="radio">
						ข้าวปลาย
						<input type="number" name="broken_rice" value="ข้าวปลาย"> กิโลกรัม
					</label>
				</div>
                <button class="btn" name="orderpro" type="submit"> ยืนยัน</button>
			</div>
		</div>
	</div>
    <div>
    <div>
        <center>		
        <input class="btn" type="button" onclick="document.location='summarize.php'" value="สรุปรายการ">
		</center>
    </div>
    </form>
</body>
</html>
<p class="time" id="real-time"></p>
<script src="assets/js/script.js"></script>
