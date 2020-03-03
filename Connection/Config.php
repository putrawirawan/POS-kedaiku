<?php

/**
 **(Connection Database KedaiKU)
 */
class Connect
{
    const SERVERNAME = "localhost";
    const USERNAME = "root";
    const PASSWORD = "";
    const DATABASE = "db_kedaiku";
    public $conn;

    function start()
    {
        $this->conn = new mysqli(self::SERVERNAME, self::USERNAME, self::PASSWORD, self::DATABASE);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        // echo "Connected successfully";
        return $this->conn;
    }

    function stop()
    {
        $this->conn->close();
    }
}

/**
 **(Test Connection Database)
 */


// $koneksi = new Connect();
// $start = $koneksi->start();
// if ($start) {
//     echo "Success";
// }
