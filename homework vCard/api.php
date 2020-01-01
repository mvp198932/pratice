<?php
// print_r($_FILES);

copy($_FILES['who']['tmp_name'], "upload/" . $_FILES['who']['name']);
copy($_FILES['QR']['tmp_name'], "upload/" . $_FILES['QR']['name']);


$tmp = $_POST; //session、cookie全域  post顯示到全部
$tmp['who'] = $_FILES['who']['name'];
$tmp['QR'] = $_FILES['QR']['name'];

session_start();
$_SESSION['info'] = $tmp;
// print_r($_SESSION);


header('location:preview.php');
