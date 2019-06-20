<?php
session_start();

class Database
{

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $database = 'keamanan_sistem';
    public $connetion;

    function __construct()
    {
        // $this->connetion = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
        $this->connetion = new mysqli($this->host, $this->user, $this->pass, $this->database);
        if ($this->connetion->connect_error) {
            echo "Koneksi ke database gagal!<br>";
            echo "Mohon periksa pengaturan database anda!!!";
            die;
        }
    }

    public function get_connetion()
    {
        return $this->connetion;
    }

    public function auth($username, $user_password)
    {
        $data = [];
        $sql = "SELECT * FROM users WHERE username='{$username}' AND user_password='{$user_password}'";
        $result = $this->get_connetion()->query($sql);
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            $_SESSION['logged'] = true;
            $_SESSION['user_id'] = $user['id'];
            return true;
        }
        return false;
    }
}
