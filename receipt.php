<!DOCTYPE html>
<html lang="th">
<head>
  <title>Tech City</title>
	<link rel="stylesheet" href="assets/css/receipt.css">
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
  <meta charset="utf-8">
</head>
<body>
  <div class="container">
    <div class="header">
      <img onclick="document.location='index.html'" src="img/TechTeam.png" alt="Logo" class="logo" >
      <h1 class="company-name">TECH TEAM</h1>
      <p class="company-address">25 ม.4 ต.ทะนง อ.โพทะเล จ.พิจิตร</p>
    </div>
    <div class="customer-info">
      <h2 class="customer-name">คุณ อัครเดช โชคชัยนา</h2>
      <p class="customer-phone">เบอร์โทรศัพท์: 123-456-7890</p><span id="current-date"></span></p>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>รายการ</th>
          <th>จำนวน(ตัน)</th>
          <th>จำนวน(กิโลกรัม)</th>
          <th>ราคา/หน่วย</th>
          <th>ราคา</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
    <div class="total">
      <p>รวม: </p>
      <p>คะแนนสะสม :</p>
      <p>ทั้งหมด: </p>
    </div>
    <div class="footer">
      <p>ขอบคุณที่ใช้บริการ</p>
    </div>
    <!-- Print button -->
  </div>
  <input type="button" class="print-button" value="พิมพ์ใบเสร็จ" onclick="javascript:this.style.display='none';window.print();">
  <br><br>
  <!-- กด Logo ถ้าต้องการยกเลิก หรือ กลับไปหน้าอื่น -->
  <script src="assets/js/receipt.js"></script>
</body>
</html>