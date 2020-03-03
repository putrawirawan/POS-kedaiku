<?php

require_once("Connection/Config.php");

class Users extends Connect
{
    public $conn;
    protected $table = 'tb_user';

    function __construct()
    {
        $this->conn = parent::start();
    }

    function all($field = '*')
    {
        $sql = "SELECT $field FROM " . $this->table;
        $result = $this->conn->query($sql);
        return $result;
    }

    function find($id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE id = $id";
        $result = $this->conn->query($sql);
        return $result;
        // return $sql;
    }

    function create($payloads)
    {
        $password = password_hash($payloads['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO " . $this->table . " (username, email, password, address, phone, gender, user_pict) VALUES (
            '" . $payloads['username'] . "',
            '" . $payloads['email'] . "',
            '" . $password . "',
            '" . $payloads['address'] . "',
            '" . $payloads['phone'] . "',
            '" . $payloads['gender'] . "',
            '" . $payloads['user_pict'] . "'
        )";

        return $this->conn->query($sql);
    }

    function update($id, $payloads)
	{
		$sql = "UPDATE ". $this->table ." SET ".
			"username = '". $payloads['username'] ."',
			email = '". $payloads['email'] ."',
			address = '". $payloads['address'] ."',
			phone = '". $payloads['phone'] ."',
			gender = '". $payloads['gender'] ."',
			user_pict = ". $payloads['user_pict']
		." WHERE id = $id";

		return $this->conn->query($sql);
    }
    
    function delete($id)
	{
		$sql = "DELETE FROM ". $this->table ." WHERE id = $id";
		return $this->conn->query($sql);
	}


    function login($payloads)
    {
        $sql = "SELECT * FROM tb_user WHERE username='" . $payloads['username'] . "' OR email ='" . $payloads['email'] . "'";

        return $this->conn->query($sql);
    }

      function count()
    {
        $sql = "SELECT count(id) as jumlah FROM " . $this->table. " " ;
            $result = $this->conn->query($sql);
            $data=mysqli_fetch_assoc($result);
            return $data['jumlah'];
    }

    // function ceklogin($username, $password)
    // {
    //     $sql = "SELECT * FROM tb_user WHERE username='" . $username . "' AND password='" . $password . "'";

    //     return $this->conn->query($sql);
    // } 
}
