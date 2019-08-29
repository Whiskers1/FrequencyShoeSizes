<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 5/3/2019
 * Time: 09:22
 */

class Database
{
    var $host = 'localhost';
    var $user = 'root';
    var $pass = 'admin';
    var $db = 'h1_frequency_shoe_sizes';
    var $myconn;

    /**
     * @return mysqli
     */
    function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;
            //echo 'Connection established!';
        }
        return $this->myconn;
    }
}