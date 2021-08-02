<?php

class DBController
{
    // DB Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = 'mysql';
    protected $database = 'phonekart';

    // Connection Property
    public $con = null;

    // Call Constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->con->connect_error){
            echo 'Failed to connect ' . $this->con->connect_error;
        }
    }

    // Destructor 
    public function __destruct(){
        $this->closeConnection();
    }

    // Close the connection
    protected function closeConnection(){
        if($this->con != null){
            $this->con->close();
            $this->con = null;
        }
    }
}