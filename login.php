<?php
//1.connect databese
require_once 'db.php';
//2.get data form login from
$username = $_POST['username'];
$password = MD5($_POST['password']);
//3.sql query string
$sql = "SELECT EMPNO, USERNAME, PASSWORD, ROLE FROM emp
WHERE USERNAME = ? AND PASSWORD = ? ";
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);
$emp = $statement->fetch(PDO::FETCH_OBJ);
//make session
session_start();
$_SESSION['empno'] = $emp->EMPNO;
//4.check username&password from databese table compare with login
if($emp){
    if($emp->ROLE=='admin'){
        header ("Location:display_emp.php");
    }elseif($emp->ROLE=='sale'){
        header ("Location:pos.php");
    }
}else{
    header ("Location:index.php");
}

?>