<?php
$conn = mysqli_connect("localhost", "root", "", "dashboard");
if (!$conn) {
    echo "connection error";
}

class database
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "dashboard";

    public function __construct()
    {
        $conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        if(!$conn){
            return "error in connection";
        }
        return $conn;
    }
}
class query extends database
{
    public function getData($table)
    {
        $result = parent::__construct()->query("SELECT * FROM $table");
        return $result;
    }
    public function insertData($table, $values)
    {
        $fields_str = "";
        $values_str = "";
        foreach ($values as $key => $val) {
            if($key=="submit"){
                continue;
            }
            if($key=="submitCategory"){
                continue;
            }
            $fields_str = $fields_str . ", `" . $key . "`";
            $values_str = $values_str . ", '" . $val . "'";
        }
        $fields_str =  ltrim($fields_str, ",");
        $values_str =  ltrim($values_str, ",");

        $sql = "INSERT INTO $table ($fields_str) VALUES ($values_str)";
        $result = parent::__construct()->query($sql);
        return $result;
    }
    public function getTaskList($id)
    {

        $result = parent::__construct()->query("SELECT *, task.status AS taskstatus FROM task JOIN category ON task.category = category.id WHERE category = $id");
        return $result->fetch_all();
        // $stmt = parent::__construct()->prepare("SELECT *, task.status AS taskstatus FROM task JOIN category ON task.category = category.id WHERE category = ?");
        // if ($stmt) {
        //     $num = 1;
        //     $stmt->bind_param("i", $id);
        //     // $stmt->store_result();
        //     $stmt->execute();
        //     // $stmt->bind_param("i", $num);
        //     // $data = $stmt->execute();
        //     $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        //     return $data;
        // } else {
        //     return "prepare error";
        // }
    }
    public function addCategory(){
        extract($_POST);
        $result = parent::__construct()->query("INSERT INTO `category`(`company_name`) VALUES ('$categoryName')");
        return $result;
    }
}
