<?php

class Model_Signup extends Model
{
    function set_data($data)
    {
        $db = mysql_connect("localhost", "twag228", "p3g5vbn7");
        mysql_select_db("twag2240", $db);

        {
            $nick = $data['nick'];
        }

    }
}