<?php

include_once('../../datos.php');
class connectDB
{
    private $conn;
    public function connect()
    {
        $this->conn =new mysqli(HOST,USER,PASSWORD,DB);

        if(!$this->conn){
            echo'Error al conectarse al server';
            $this->conn->connect_error;
            return;
        }
        //echo 'DB ready!';
        //acentos ...
        $this->conn->set_charset('utf8');
    }
    public function close ()
    {
        if($this->conn) $this->conn->close();

    }
    public function insert($sql)
    {
        $result = $this->conn->query($sql);
        return $result ? $result : "Error" .
        $this->conn->error;
    }
    public function update($sql)
    {
        $result = $this->conn->query($sql);
        return $result ? $result : "Error" .
        $this->conn->error;
    }
    public function delete($sql)
    {
        $result = $this->conn->query($sql);
        return $result ? $result: "Error" .
        $this->conn->error;
    }
    public function select($sql)
    {
        $result = $this->conn->query($sql);
        return $result ? $result->fetch_all(MYSQLI_ASSOC) : "Error:" .
        $this->conn->error;
    }
}
/*$db = new connectDB();
$db -> connect();
print_r($db -> select("select * from users"));
$db -> close();*/

