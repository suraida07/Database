
<?php  
//1. start session
session_start();
$empno = $_SESSION ['empno'];

//2. connect databese
require_once 'db.php';

//3. query string
$sql = "SELECT * FROM emp WHERE EMPNO = ?";
$statement = $connection->prepare($sql);
$statement->execute([$empno]);
$emp = $statement->fetch(PDO::FETCH_OBJ);
?>

<?php require 'header.php'; ?>
<php?>
<center>
<h3> Profile </h3>
<br>
<div class="container">
<div class="table-responsive">          
<table class="table">
    <thead>
    <tr>
    <div class="container">
        <label for="ENAME">Employee ID :</label>
        <input type="text" value="<?= $emp->EMPNO; ?>"button class="btn">   
    </div>
    </tr>
    </thead>
    <tbody>
    <tr>
    <div class="container">
        <label for="ENAME">Empolyee Name : </label> 
        <input type="text" value="<?= $emp->ENAME; ?>" button class="btn">
    </div>
    </tr>
    </tbody>
    <tbody>
    <tr>
    <div class="container">
        <label for="ENAME">Job : </label> 
        <input type="text" value="<?= $emp->JOB; ?>" button class="btn">
    </div>
    </tr>
    </tbody>
    <tbody>
    <tr>
    <div class="container">
        <label for="ENAME">mgr : </label> 
        <input type="text" value="<?= $emp->MGR; ?>" button class="btn">
    </div>
    </tr>
    </tbody>
    <tbody>
    <tr>
    <div class="container">
        <label for="ENAME">hiredate: </label> 
        <input type="text" value="<?= $emp->HIREDATE; ?>" button class="btn">
    </div>
    </tr>
    </tbody>
    <tbody>
    <tr>
    <div class="container">
        <label for="ENAME">sal: </label> 
        <input type="text" value="<?= $emp->SAL; ?>" button class="btn">
    </div>
    </tr>
    </tbody>
    <tbody>
    <tr>
    <div class="container">
        <label for="ENAME">comm: </label> 
        <input type="text" value="<?= $emp->COMM; ?>" button class="btn">
    </div>
    </tr>
    </tbody>
    <tbody>
    <tr>
    <div class="container">
        <label for="ENAME">deptno: </label> 
        <input type="text" value="<?= $emp->DEPTNO; ?>" button class="btn">
    </div>
    </tr>
    </tbody>
    <tbody>
    <tr>
    <div class="container">
        <label for="ENAME">username: </label> 
        <input type="text" value="<?= $emp->USERNAME; ?>" button class="btn">
    </div>
    </tr>
    </tbody>
    <tbody>
    <tr>
    <div class="container">
        <label for="ENAME">password: </label> 
        <input type="text" value="<?= $emp->PASSWORD; ?>" button class="btn">
    </div>
    </tr>
    </tbody>
    <tbody>
    <tr>
    <div class="container">
        <label for="ENAME">role: </label> 
        <input type="text" value="<?= $emp->ROLE; ?>" button class="btn">
    </div>
    </tr>
    </tbody>
</table>

<div class="form-group"><br>
  <input type="button" class="btn btn-warning" onclick="window.location='index.php'" type="submit" class="form-control" value="ออกจากระบบ"> 
</div>
</div>
</div>
</center>
