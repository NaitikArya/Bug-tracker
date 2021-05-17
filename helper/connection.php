<?php
    class database_connection {
        private $servername;
        private $dbname;
        private $user; 
        private $pass;

        public function __construct()
        {
           try {
                $this->servername = "localhost";
                $this->dbname = "bug_tracking";
                $this->user = "root";
                $this->pass = "";

                $dbcon = new PDO("mysql:host=$this->servername; dbname=$this->dbname",$this->user,$this->pass);
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $dbcon->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

                return $dbcon;
            } 
            catch (PDOException $e) {
               echo "Database Connection failed: ". $e->getMessage();
            }
            
        }

    }
