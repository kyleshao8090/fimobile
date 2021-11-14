<?php
include_once "./conn.php";
$conn = new query();
$result = $conn->addCategory();
if ($result) {
    $msg =  json_encode(["message" => "Category submitted", "success" => true]);
    header("Location: ../pages/home.php", $msg);
}
    // $stmt = $conn->prepare("INSERT INTO `category`(`company_name`, `status`) VALUES (?,?)");

    // if($_POST['submitCategory']){
    //     $sql = "INSERT INTO `category`(`company_name`, `status`) VALUES ('','')";

    // }
