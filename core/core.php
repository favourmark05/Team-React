<?php
class core
{
    // protected $result;
    public $result;
    private $rows;
    public $db;


    public function __construct()
    {
        $this->db = new mysqli('localhost', 'root', '', 'hng');
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }
    public function query($sql)
    {
        // $this->result = $this->db->query($sql);
        $this->result = mysqli_query($this->db, $sql);
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
