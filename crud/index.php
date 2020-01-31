<?php
require 'db.php';
$sql = 'SELECT * FROM emp';
$statement = $connection->prepare($sql);
$statement->execute();
$emp = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All people</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>รหัสพนักงาน</th>
          <th>ชื่อ-นามสกุล</th>
          <th>ตำแหน่ง</th>
          <th>ผู้จัดการ</th>
          <th>วันที่เข้าทำงาน</th>
          <th>เงินเดือน</th>
          <th>ค่าคอมมิชชั่น</th>
          <th>แผนก</th>
        </tr>
        <?php foreach($emp as $person): ?>
          <tr>            
            <td><?= $person->EMPNO; ?></td>
            <td><?= $person->ENAME; ?></td>
            <td><?= $person->JOB; ?></td>
            <td><?= $person->MGR; ?></td>
            <td><?= $person->HIREDATE; ?></td>
            <td><?= $person->SAL; ?></td>
            <td><?= $person->COMM; ?></td>
            <td><?= $person->DEPTNO; ?></td>
            <td>
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->empno ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
