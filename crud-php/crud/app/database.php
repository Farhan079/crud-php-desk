<?php
namespace App;

class Database{
    private $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect("localhost","root","","crud" );
    }

    public function getData(){
        $qry = "SELECT * FROM user_data";
        $rslt = mysqli_query($this->conn, $qry);
        $all_data = mysqli_fetch_all($rslt, MYSQLI_ASSOC);
        return $all_data;
    }

    // add data
    public function addData($name, $email, $dob){
        $qry = "INSERT INTO user_data(name, email, dob) VALUES
        ('$name', '$email', '$dob')";
        mysqli_query($this->conn, $qry);
    }
}
?>