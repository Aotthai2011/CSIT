<html lang="en">
<head>
  <title>ระบบบันทึกภาพนักศึกษา</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--เป้นส่วนของการเรียกใช้ ไฟล์  css ,js ของ bootstrap จากภายในระบบทำให้ระบบไม่ต้องอาศัยการเรียกboostrap 
  จากภายนอก
  -->
   <?php echo css_asset('bootstrap.min.css');?>
  <?php echo js_asset('jquery.min.js');?>
 <?php echo js_asset('bootstrap.min.js');?> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">
    <h2 ><center>ข้อมูลเบื้องต้นนักศึกษา </center></h2>

    
    <form action="<?php echo site_url('register_std/add_student');?>" method="post" >
    <div class="form-group-addon">
      <label for="std_id">รหัสประจำตัวนักศึกษา:&#10024</label>

      <input type="text" class="form-control" id="std_id" placeholder="รหัสประจำตัวนักศึกษา" name="std_id">
     
    </div>
    <div class="form-group">
      <label for="std_fname">ชื่อนักศึกษา:&#10024</label>
      <input type="text" class="form-control" id="std_fname" placeholder="ชื่อนักศึกษา" name="std_fname">
    </div>
 <div class="form-group">
      <label for="std_lname">นามสกุลนักศึกษา:&#10024</label>
      <input type="text" class="form-control" id="std_lname" placeholder="นามสกุลนักศึกษา" name="std_lname">
    </div>
      <!--
      <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
  </div>
      -->
      <center>
          <button type="submit" class="btn btn-primary">&nbsp;ยืนยัน&nbsp;</button>
    &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;
    <button type="reset" class="btn btn-danger">&nbsp;ยกเลิก&nbsp;</button>
      </center>
  </form>
</div>

</body>
</html>