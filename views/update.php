<?php
require "../Curd.php";
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$phone = $_REQUEST['phone'];
$gender = $_REQUEST['gender'];
$Request = ["name" => $name, "address" => $address, "phone" => $phone, "gender" => $gender];
updateUser($id, $Request);

header('Location:./index.php');
