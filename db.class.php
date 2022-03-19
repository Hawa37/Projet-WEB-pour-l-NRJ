<?php
class DB{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'GreenMarket';

    public __construct($host = null, $username = null, $password = null, $database = null){
        if($host != null){
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }
    }
    
}