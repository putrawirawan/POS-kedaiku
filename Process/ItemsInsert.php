<?php

require_once("Connection/Config.php");

class Items extends Connect
{
    public $conn;
    protected $table = 'tb_items';

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
        $sql = "SELECT * FROM " . $this->table . " WHERE id_items = $id";
        $result = $this->conn->query($sql);
        return $result;
        // return $sql;
    }

    function create($payloads)
    {
        $sql = "INSERT INTO " . $this->table . " (items_name, description, quantity, price_buy, price_sell, status) VALUES (
			'" . $payloads['items_name'] . "',
			'" . $payloads['description'] . "',
			'" . $payloads['quantity'] . "',
            '" . $payloads['price_buy'] . "',
            '" . $payloads['price_sell'] . "',
			'" . $payloads['status'] . "'
		)";

        return $this->conn->query($sql);
    }

    function update($id, $payloads)
    {
        $sql = "UPDATE " . $this->table . " SET " .
            "items_name = '" . $payloads['items_name'] . "',
			description = '" . $payloads['description'] . "',
			quantity = '" . $payloads['quantity'] . "',
            price_buy = '" . $payloads['price_buy'] . "',
            price_sell = '" . $payloads['price_sell'] . "',
			status = " . $payloads['status']
            . " WHERE id_items = $id";

        return $this->conn->query($sql);
    }

    function delete($id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE id_items = $id";
        return $this->conn->query($sql);
    }
}
