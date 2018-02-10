<?php

include_once "lib/Database.php";
class Shout{
  private $db;
  public function __construct(){
    $this->db = new Database();
  }
  public function getAllData(){
    $query = "SELECT * FROM shoutbox_tbl ORDER BY id DESC";
    $result = $this->db->select($query);
    return $result;
  }
  public function insertData($data){
    $name = mysqli_real_escape_string($this->db->link, $data['name']);
    $msg = mysqli_real_escape_string($this->db->link, $data['msg']);
    date_default_timezone_set('Asia/Dhaka');
    $time = date('h:i:s', time());
    $query = "INSERT INTO shoutbox_tbl (name_col, time_col, message_col) VALUES ('$name', '$time', '$msg')";
    $this->db->insert($query);
    header("Location: index.php");
  }
}
?>