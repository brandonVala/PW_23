<?php
 class user{
    private $ncontrol, $name, $table = 'users';

    public function __construct ($ncontrol = null, $name = null)
    {
        $this ->ncontrol = $ncontrol;
        $this ->name =$name;
    }
    //getters and setters
    public function getName ()
    {
        return $this ->name;
    }
    public function getNcontrol ()
    {
        return $this ->ncontrol;
    }
    public function setName ($name)
    {
        return $this ->name;
    }
    public function setNcontrol ($ncontrol)
    {
        return $this ->ncontrol;
    }
    public function insertuserSql()
    {
        return "INSERT INTO $this->table VALUES('$this->ncontrol','$this->name')";
    }
    public function updateuserSql()
    {
        return "UPDATE $this->table SET name ='$this->name' WHERE ncontrol='$this->ncontrol' ";
    }
    public function deleteuserSql()
    {
        return "DELETE FROM $this->table WHERE ncontrol='$this->ncontrol' ";
    }
    public function selectuserSql()
    {
        return "SELECT * FROM $this->table WHERE ncontrol='$this->ncontrol'";
    }
    public function selectusersSql()
    {
        return "SELECT * FROM $this->table";
    }
 }
 /*
 $user = new user('05940028','JUAN PEREZ');
 //$user->setNcontrol('05940028');
 //$user->setName('05940028');
 //print_r($user);
 echo $user->insertuserSql() . '<br/>';
 echo $user->updateuserSql() . '<br/>';
 echo $user->deleteuserSql() . '<br/>';
 echo $user->selectusersSql() . '<br/>';
 echo $user->selectuserSql() . '<br/>';
 */