<?php
$empno = $_POST['empno'];
$ename = $_POST['ename'];
$job = $_POST['job'];
$deptno = $_POST['deptno'];

$host = "127.0.0.1";
$user = "root";
$password = "";
$dbname  = "practice";
$conn = mysqli_connect ($host, $user, $password, $dbname); 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into emp (EMPNO, ENAME, JOB, MGR, HIREDATE, SAL, COMM, DEPTINO)
values ($empno, $ename, $job, NULL, '',$sal,  $deptno)";

echo $sql;

if (mysql_query($conn, $sql)){
    echo "Insert successfull";
else {
    echo "Insert Fail";
}

}

?>