<?php
class core
{
    // protected $result;
    public $result;
    private $rows;
    public $db;


    public function __construct()
    {
        $this->db = new PDO("mysql:host='localhost';dbname='hng'", 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }
    public function query($sql)
    {
        // $this->result = $this->db->query($sql);
        // $this->result = mysqli_query($this->db, $sql);
        $this->result = $this->db->prepare($sql);
        $this->result->execute();
        $result = $$this->result->setFetchMode(PDO::FETCH_ASSOC);
        var_dump($result);

        // $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
        // $stmt->execute();
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
