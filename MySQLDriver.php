<?php 
require_once'abstract/DBCommonMethods.php';
require_once'interface/DBInterface.php';

class MySQLDriver extends DBCommonMethods implements DBInterface { 

    public function __construct($host, $db, $password)
    {
        parent::__construct($host, $db, $password);
    } 
    public function db_connect(){
        echo 'Database connect successfully';
    }
    public function delete($where){

    } 
    public function insert($data){

    }
    public function read($where){

    } 
    public function update($where){

    } 
}

$db = new MySQLDriver('localhost','wpcafe','root');
$db->db_connect();
$db->insert();


?>