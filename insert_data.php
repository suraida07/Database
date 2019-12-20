<?php
$empno = $_POST['empno'];
$ename = $_POST['ename'];
$job = $_POST['job'];
$deptno = $_POST['deptno'];
$sal = 0;
// connect to database
$host = "127.0.0.1";
$user = "root";
$passwd = "";
$dbname = "practice";
$conn = mysqli_connect($host, $user, $passwd, $dbname);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into emp (EMPNO, ENAME,JOB, MGR, HIREDATE, SAL, COMM, DEPTNO) 
values ($empno, $ename, $job,NULL,'', $sal, NULL, $deptno)";

echo $sql;

if (mysqli_query($conn, $sql)){
    echo "Insert successfull";
}else{
    echo "Insert Fail";
}


?>