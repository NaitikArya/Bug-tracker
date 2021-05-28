<?php
class Connection
{
    private $servername;
    private $dbname;
    private $user;
    private $pass;
    private $dbconn;

    public function __construct()
    {
        try {
            $this->servername = "localhost";
            $this->dbname = "bug_tracking";
            $this->user = "root";
            $this->pass = "";

            $conn = new PDO("mysql:host=$this->servername; dbname=$this->dbname", $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $this->dbconn = $conn;
        } catch (PDOException $e) {
            echo "Database Connection failed: " . $e->getMessage();
        }
    }

    public function insertData($queryString)
    {
        try {
            $this->dbconn->exec($queryString);
        } catch (\Throwable $th) {
            echo "Insert Data Failed: ", $th->getMessage();
        }
    }

    public function updateData($queryString)
    {
        try {
            $this->dbconn->exec($queryString);
        } catch (\Throwable $th) {
            echo "Update Table Failed: ", $th->getMessage();
        }
    }

    public function select($queryString)
    {
        try {
            $stmt =  $this->dbconn->prepare($queryString);
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            return $stmt->fetchAll();
        } catch (\Throwable $th) {
            echo "Select Failed: ", $th->getMessage();
        }
    }
}
