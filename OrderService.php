<?php
session_start();
include('include/config.php');

if (isset($_POST['orderser'])) {
    mysqli_query($mysqli_p, "SET NAMES UTF8");

    $selected_member_id = $_SESSION['selected_member_id'];

    $servise = $_POST['SP001'];
    $riceweigth = $_POST['Rice_weight'];

    $basePricePerKg = 0;

    // You can adjust the price based on the selected option
    switch ($servise) {
        case "สีข้าว":
            $basePricePerKg += 0; // You can set your own additional price
            break;
        case "คัด/ฝัดเมล็ดข้าว":
            $basePricePerKg += 3; // You can set your own additional price
            break;
        case "อบข้าว":
            $basePricePerKg += 10; // You can set your own additional price
            break;
        case "สีข้าว และ คัด/ฝัดเมล็ดข้าว":
            $basePricePerKg += 3; // You can set your own additional price
            break;
        case "คัด/ฝัดเมล็ดข้าว และ อบข้าว":
            $basePricePerKg += 13; // You can set your own additional price
            break;
        case "สีข้าว และ คัด/ฝัดเมล็ดข้าว และ อบข้าว":
            $basePricePerKg += 13; // You can set your own additional price
            break;

        // No additional cost for default case
        default:
            break;
    }
    $totalPrice = $riceweigth * $basePricePerKg;

    $sql = "INSERT INTO orderservice (member_Id,Bucket_Service, ServiceProduct_Id, orderServicet_Date, total_Service)
    VALUES('$selected_member_id','$riceweigth', '$servise', NOW(), '$totalPrice')";

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

    <div class="container">
        <h1 class="text-center">รายละเอียดการใช้บริการ</h1>
    </div>
    <div class="containerBox">
        <div class="service_product-details">
            <div class="checkbox-container">
                <div class="radio-container">
                    <h3><b><center>บริการ</center></b></h3>
                </div>
            </div><br>
            <form action="OrderService.php" method="post" onsubmit="return confirm('ยืนยันการส่งข้อมูล ??')">
                น้ำหนักข้าว : &nbsp;
                <input type="number" name="Rice_weight">ถัง
                <div class="form-section">
                    <div class="radio-group">
                        <label class="radio">
                            <input type="radio" name="SP001" value="สีข้าว"> สีข้าว
                        </label>
                        <label class="radio">
                            <input type="radio" name="SP001" value="คัด/ฝัดเมล็ดข้าว"> คัด/ฝัดเมล็ดข้าว
                        </label>
                        <label class="radio">
                            <input type="radio" name="SP001" value="อบข้าว"> อบข้าว
                        </label>
                        <label class="radio">
                            <input type="radio" name="SP001" value="สีข้าว และ คัด/ฝัดเมล็ดข้าว"> สีข้าว และ คัด/ฝัดเมล็ดข้าว
                        </label>
                        <label class="radio">
                            <input type="radio" name="SP001" value="สีข้าว และ อบข้าว"> สีข้าว และ อบข้าว
                        </label>
                        <label class="radio">
                            <input type="radio" name="SP001" value="คัด/ฝัดเมล็ดข้าว และ อบข้าว"> คัด/ฝัดเมล็ดข้าว และ อบข้าว
                        </label>
                        <label class="radio">
                            <input type="radio" name="SP001" value="สีข้าว และ คัด/ฝัดเมล็ดข้าว และ อบข้าว"> สีข้าว และ คัด/ฝัดเมล็ดข้าว และ อบข้าว
                        </label>
                    </div>
                </div>
                <button class="btn" name="orderser" type="submit"> ยืนยัน</button>
            </form>
        </div>
    </div>
    <div> <center>
            <input class="btn" type="button" onclick="document.location='index.html'" value="ย้อนกลับ">
            <input class="btn" type="button" onclick="document.location='summarize.php'" value="สรุปรายการ">
            <input class="btn" type="button" onclick="document.location='OrderProduct.php'" value="ถัดไป">
    </div></center>
    <p class="time" id="real-time"></p>
    <script src="assets/js/script.js"></script>
</body>

</html>
