<?php
include_once "conn.php";
$conn = new query();
// $taskName = $_POST['taskName'];
// $status = $_POST['status'];
// $category = $_POST['category'];
// $link = $_POST['link'];
// $startedAt = $_POST['startedAt'];

// $values_arr = [
//     "taskName" => $_POST['taskName'],
//     "status" => $_POST['status']
// ];

if(isset($_POST['submit'])){
    $res = $conn->insertData("task",$_POST);
    echo $res;
}else if(isset($_POST['alltask'])){
    
    $res = $conn->getTaskList($_POST['categoryId']);
    // $data =[];
    // foreach($res as $row){
    //     array_push($data,$row);
    // }
    echo json_encode($res);
}

// if(isset($_GET['submit'])){
//     $res = $conn->insertData("task",$_GET);
//     echo $res;
// }else if(isset($_GET['alltask'])){
//     $res = $conn->getTaskList($_GET['categoryId']);
//     echo print_r($res);
// }

// echo $_POST['taskName'];

