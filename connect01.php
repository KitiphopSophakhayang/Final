<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrapc.min.css ">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">👨🏻‍🎓นักศึกษานักล่าปริญญา</a>
    <div class="collapse navbar-collapse" id="navbarColor01">
     
    <ul class="navbar-nav me-auto">
      
    
      </ul>
    </div>
  </div>
</nav>
<form action="successedconnect01.php" method="GET">
<p>
<label for="Username">ชื่อผู้ใช้</label>
<input type="text" name="Username" id="Username" value=""/>
</p>
<p>
<label for="password">รหัสผ่าน</label>
<input type="text" name="password" id="password" value=""/>
</p>
<p>
<label for="gender">เพศ</label>
<input type="radio" name="gender">เพศชาย 
<input type="radio" name="gender">เพศหญิง
</p>
<p>
<label for="education">การศึกษา</label>
<p>
<input type="checkbox" name="education" id="education" value="" />
<label for="education"> ป.ตรี  </label><br>
<input type="checkbox" id="education" name="education" value="">
<label for="education"> ป.โท </label><br>
<input type="checkbox" id="education" name="education" value="">
<label for="education"> ป.เอก</label><br><br>

</p>
<p>
<label for="email">อีเมล</label>
<input type="text" name="email" id="email" value="" />
</p>
<label for="hobby">งานอดิเรก</label>
<input type="text" name="hobby" id="hobby" value="" />
</p>
<p>
    <input type="submit">
</p>
</form>
</body>
</html>