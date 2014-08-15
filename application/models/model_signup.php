<?php

class Model_Signup extends Model
{
    private $db;
    function __construct()
    {
        $this->db = mysql_connect("localhost", "twag228", "p3g5vbn7");
    }
    function set_data($data)
    {
        mysql_select_db("twag2240", $this->db);
        return mysql_query ("INSERT INTO users (nick,password,email,name) VALUES('{$data['nick']}','{$data['password']}','{$data['email']}','{$data['name']}')", $this->db);
    }

    function check_data($value)
    {
        mysql_select_db("twag2240", $this->db);
        $result = mysql_query("SELECT id FROM users WHERE nick='$value'",$this->db);
        return empty(mysql_fetch_array($result));
    }
}