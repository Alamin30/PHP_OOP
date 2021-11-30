<?php
abstract class DBCommonMethods
{
    private $host;
    private $db;
    private $password;
    public function __construct($host, $db, $password)
    {
        $this->host     = $host;
        $this->db       = $db;
        $this->password = $password;
    }
}
?>