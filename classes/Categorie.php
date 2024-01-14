<?php

class Categorie extends Database
{
    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        parent::__construct();
    }


    public function insert($categorie_name)
    {
        $this->query("INSERT INTO $this->tableName (categorie_name) VALUES (:categorie_name)");
        $this->bind(':categorie_name', $categorie_name);
        $this->execute();
    }
    public function deleteCategorie($categorie_id)
    {
        $this->query("DELETE FROM $this->tableName WHERE categorie_id  = :id");
        $this->bind(':id', $categorie_id);
        $this->execute();
    }
    public function updateCategorie($categorieId, $categorie_name)
    {
        $this->query("UPDATE $this->tableName SET categorie_name = categorie_name WHERE categorie_id = id");
        $this->bind(':categorie_name', $categorie_name);
        $this->execute();
    }
    public function getCategorie()
    {
        $this->query("SELECT * FROM $this->tableName");
        $this->execute();
        return $this->resultSet();
    }
}
