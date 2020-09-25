<?php
$server='localhost';
$user='root';
$pass='';
$csdl='cit_qlsv';
$con=mysqli_connect($server,$user,$pass,$csdl)or die('không thể kết nối được');
mysqli_select_db($con,$csdl);
mysqli_query($con,"SET NAMES utf8");

?>