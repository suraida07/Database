<?php 
 if(isset($_POST['submit'])){
    require_once 'db.php';
    $empno = $_POST['empno'];
    $ename = $_POST['ename'];
    $username = $_POST['username'];
    $password = MD5($_POST['password']);
    $sql = "INSERT INTO emp (EMPNO,ENAME,USERNAME,PASSWORD) VALUES (?,?,?,?)";
    $statement = $connection->prepare($sql);
    if ($statement->execute([$empno, $ename, $username, $password])) 
      {
      echo 'ลงทะเบียนเสร็จเรียบร้อย';
      }
} 
?>

<?php require 'header.php'; ?>
<br><br>
<div class="offset-sm-6 col-sm-5"> 
    <h2 style="color:rgb(255,0,0)" >สร้างบัญชีใหม่</h2>
    </div>
    <div class="offset-sm-6 col-sm-5">
      <?php if(!empty($message)): ?>
        <div class="aoffset-sm-6 col-sm-5">
        <?= $message; ?>
        </div>
      <?php endif; ?>
<form name="register" action="" method="post">
<div>
  <input type="text" class="form-control" name="empno" placeholder="รหัสพนักงาน" required>
</div>
<div>
  <input type="text" class="form-control" name="ename" placeholder="ชื่อ" required>
</div>
<div>
  <input type="text" class="form-control" name="username" placeholder="อีเมล" required>
</div>
<div>
  <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required>
</div>
<br>
<div>
<input type="submit" name='submit' value="สมัคร" style="background-color:rgb(0,255,0)" class="form-control">
</div>
</form>
