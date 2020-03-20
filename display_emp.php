<?php
require 'db.php';
$sql = 'SELECT * FROM emp';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<?php require 'header.php'; ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<br>
  <h2>All people</h2>
  
  <table class="table">
    <thead class="table table-bordered">
      <tr>
        <th>รหัสพนักงาน</th>
        <th>ชื่อ</th>
        <th>อาชีพ</th>
        <th>หัวหน้า</th>
        <th>วันที่เข้าทำงาน</th>
        <th>เงินเดือน</th>
        <th>คอมมิชชั่น</th>
        <th>แผนก</th>
      </tr>
        <?php foreach($people as $person):?>
          <tr>
            <td><?= $person->EMPNO; ?></td>
            <td><?= $person->ENAME; ?></td>
            <td><?= $person->JOB; ?></td>
            <td><?= $person->MGR; ?></td>
            <td><?= $person->HIREDATE; ?></td>
            <td><?= $person->SAL; ?></td>
            <td><?= $person->COMM; ?></td>
            <td><?= $person->DEPTNO;?></td>
            <td>
              <a href="edit.php?EMPNO=<?= $person->EMPNO ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?EMPNO=<?= $person->EMPNO ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>

<div class="form-group"><br>
  <center><input type="button" class="btn btn-warning" onclick="window.location='index.php'" type="submit" class="form-control" value="ออกจากระบบ">
  </center> 
</div>
<?php require 'footer.php'; ?>