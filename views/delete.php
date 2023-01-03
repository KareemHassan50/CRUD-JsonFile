<?php
require "../Curd.php";
$id = $_REQUEST["id"];
destroy($id);
header('Location:./index.php');
