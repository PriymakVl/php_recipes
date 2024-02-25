<?php

class Model 
{
    public static $db;

    public static function connect()
    {
        $host_dbname = "mysql:host=localhost;dbname=recipes";
        $username = "root";
        $password = "";

        self::$db = new PDO($host_dbname, $username, $password);
    }

    public static function findAll() 
    {
        self::connect();
        $table = static::getTable();
        $sql = "SELECT * FROM `$table`";

        $stmt = self::$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findOne($id) 
    {
        $data = ["id" => $id];
        //unset($data['error']);
        self::connect();
        $table = static::getTable();
        $sql = "SELECT * FROM `$table` WHERE `id` = :id";

        $stmt = self::$db->prepare($sql);
        $stmt->execute($data);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function findMany($id_arr) 
    {
        if (!$id_arr) return [];
        self::connect();
        $table = static::getTable();
        $id_str = implode(",", $id_arr); 
        $sql = "SELECT * FROM `$table` WHERE `id` IN ($id_str)"; 
        $stmt = self::$db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public static function delete($id) 
    {
        $data = ['id' => $id];
        self::connect();
        $table = static::getTable();
        $sql = "DELETE FROM `$table` WHERE `id` = :id";
        $stmt = self::$db->prepare($sql);
        return $stmt->execute($data);
    }

    public static function execute($sql, $data)
    {
        self::connect();
        $stmt = self::$db->prepare($sql);
        $result =  $stmt->execute($data);
    }

    public static function updateColumn($name, $value, $id)
    {
        self::connect();
        $table = static::getTable();
        $sql = "UPDATE `$table` SET `$name` = '$value' WHERE `id` = '$id'";
        return self::$db->exec($sql);
    }
}