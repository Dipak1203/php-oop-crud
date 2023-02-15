<?php

class Database
{
    // For creating the Connection Variable
    private $server =  'localhost';
    private $username =  'root';
    private $password =  '';
    private $db = 'oop-crud';
    private $conn;


    public function __construct()
    {
        $this->conn = mysqli_connect($this->server, $this->username, $this->password, $this->db);
        if (!$this->conn) {
            echo "Connection UnSuccess";
        }
    }

    public function insert($sql)
    {
        if (mysqli_query($this->conn, $sql)) {
            return 'Added';
        } else {
            echo "Error during the adding data";
        }
    }

    public function viewData($table)
    {
        $sql = "SELECT * FROM $table";
        $result  = mysqli_query($this->conn, $sql);
        $data = [];

        if ($result) {
            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row;
                }
            }
            return $data;
        } else {
            echo "Error during fetching the data";
        }
    }
}
