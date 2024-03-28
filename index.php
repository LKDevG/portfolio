<?php
session_start();


function doGet() 
{
  return HtmlService.createTemplateFromFile('index')
  .evaluate()
  .addMetaTag('viewport', 'width=device-width, initial-scale=1')
  .setXFrameOptionsMode(HtmlService.XFrameOptionsMode.ALLOWALL);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เว็ปผลงานของ Lattaphon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
  *{font-family: 'Kanit', sans-serif;}
</style>
  </head>
  <body style="background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);">
    <div class="d-flex justify-content-center align-items-center vh-100">
      <div class="bg-white p-5 rounded-5 shadow">
        <div class=" text-center">
          <img src='images/logo.jpg' style="width: 200px;">
        </div>
        <div class="text-center fs-2 fw-bold">ลัทธพล คำแพง</div>
        
        <div class="input-group mt-4">
          <div class="input-group-text bg-info">
            <i class="fa-solid fa-user"></i></div>
            <form method="POST" action="index">
        <input type="password" name="phone" class="form-control" required placeholder="กรอกข้อมูลแบบรหัสผ่าน">
        </div>
        <div class="input-group mt-2">
        </div>
        <input type="submit" name="submit" class="btn btn-info text-white w-100 mt-4" value="เช็คข้อมูลในฟรอม">
        <a class="btn btn-secondary text-white w-100 mt-4" href="index"> ไปยังต่ำแหน่ง</a>
      </div>
      <?php
if(isset($_SESSION["Error"]))
{
    echo "<div class='text-danger'>";
    echo $_SESSION["Error"];
    echo"</div>";
}

?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>