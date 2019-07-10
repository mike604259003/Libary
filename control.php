<?php
include('class.php');

$db = new manageDB();
$namebook = $_POST["namebook"];
$categorybook = $_POST["categorybook"];
$amountbook = $_POST["amountbook"];
$pricebook = $_POST["pricebook"];

$db->insertBook($categorybook,$namebook,$amountbook,$pricebook);
?>