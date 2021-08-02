<?php

class DBController
{
    // DB Connection Properties
    protected $host = '92.249.45.129';
    protected $user = 'earnvive_administrator';
    protected $password = 'NhnndLECY4ZP@RG';
    protected $database = 'earnvive_phonekart';

    // Connection Property
    public $con = null;

    // Call Constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo 'Failed to connect ' . $this->con->connect_error;
        }
    }

    // Destructor 
    public function __destruct()
    {
        $this->closeConnection();
    }

    // Close the connection
    protected function closeConnection()
    {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}
