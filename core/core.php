<?php
class core
{
    public $result;
    private $rows;
    public $db;


    public function __construct()
    {
        try {
            $hng = 'b15_24511948_hng';
            $servername = "sql113.byethost15.com";
            $this->db = new PDO("mysql:host=$servername;dbname=$hng", 'b15_24511948', 'danielmabs');
            // set the PDO error mode to exception
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public function query($sql)
    {

        $this->result = $this->db->prepare($sql);
        $this->result->execute();
        $result = $this->result->setFetchMode(PDO::FETCH_ASSOC);

        if ($this->result) {
            return $this->result;
        } else {
            trigger_error('Invalid query: ' . $this->db->error);
        }
    }
    public function check_email($sql)
    {
        $results = $this->db->query($sql);
        for ($i = 1; $i <= $this->db->affected_rows; $i++) {
            $this->rows[] = $results->fetch_assoc();
        }
        if ($this->rows !== NULL) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function Login($sql)
    {
        # code...
    }
}
