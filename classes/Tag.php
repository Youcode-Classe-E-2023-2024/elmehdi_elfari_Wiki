<?php

class Tag extends Database
{
    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        parent::__construct();
    }


    public function insert($tag_name)
    {
        $this->query("INSERT INTO $this->tableName (tag_name) VALUES (:tag_name)");
        $this->bind(':tag_name', $tag_name);
        $this->execute();
    }
    public function deleteTags($tag_id)
    {
        $this->query("DELETE FROM $this->tableName WHERE tag_id  = :id");
        $this->bind(':id', $tag_id);
        $this->execute();
    }
    public function getTag()
    {
        $this->query("SELECT * FROM $this->tableName");
        $this->execute();
        return $this->resultSet();
    }
}
