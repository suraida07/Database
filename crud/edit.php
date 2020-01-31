<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM emp WHERE id = :id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset($_POST['EMPNO']) && isset($_POST['ENAME']) && isset($_POST['JOB']) 
&& isset($_POST['MGR']) && isset($_POST['HIREDATE']) 
&& isset($_POST['SAL']) && isset($_POST['COMM']) && isset($_POST['DEPTNO']) ) {  
  $ename = $_POST['ENAME'];
  $job = $_POST['JOB'];
  $mgk = $_POST['MGR'];
  $hiredata = $_POST['hiredata'];
  $sal = $_POST['SAL'];
  $comm = $_POST['COMM'];
  $deptno = $_POST['DEPTNO'];
  $sql = 'UPDATE emp SET EMPNO=:EMPNO, ENAME=:ENAME, JOB=:JOB, MGR=:MGR, HIREDATE=:HIREDATE, SAL=:SAL, COMM=:COMM, DEPTNO=:DEPTNO WHERE empno=:empno';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':empno' => $empno, ':ENAME' => $ENAME, ':JOB' => $JOB, ':MGR' => $MGR, ':HIREDATE' => $HIREDATE
  , ':SAL' => $SAL, ':COMM' => $COMM, ':DEPTNO' => $DEPTNO])) {
    header("Location: /");
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
    </div>
        <div class="form-group">
          <label for="EMPNO">รหัสพนักงาน</label>
          <input value="<?= $person->EMPNO; ?>" type="text" name="EMPNO" id="EMPNO" class="form-control">
        </div>
        <div class="form-group">
          <label for="ENAME">ชื่อ-นามสกุล</label>
          <input value="<?= $person->ENAME; ?>" type="text" name="ENAME" id="ENAME" class="form-control">
        </div>
        <div class="form-group">
          <label for="JOB">ตำแหน่ง</label>
          <input type="JOB" value="<?= $person->JOB; ?>" name="JOB" id="JOB" class="form-control">
        </div>
        <div class="form-group">
          <label for="MGR">ผู้จัดการ</label>
          <input value="<?= $person->MGR; ?>" type="text" name="MGR" id="MGR" class="form-control">
        </div>
        </div>
        <div class="form-group">
          <label for="HIREDATE">วันที่เข้าทำงาน</label>
          <input value="<?= $person->HIREDATE; ?>" type="text" name="HIREDATE" id="HIREDATE" class="form-control">
        </div>
        </div>
        <div class="form-group">
          <label for="SAL">เงินเดือน</label>
          <input value="<?= $person->SAL; ?>" type="text" name="SAL" id="SAL" class="form-control">
        </div>
        </div>
        <div class="form-group">
          <label for="COMM">ค่าคอมมิชชั่น</label>
          <input value="<?= $person->COMM; ?>" type="text" name="COMM" id="COMM" class="form-control">
        </div>
        <div class="form-group">
          <label for="DEPTNO">แผนก</label>
          <input value="<?= $person->DEPTNO; ?>" type="text" name="DEPTNO" id="DEPTNO" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update person</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
