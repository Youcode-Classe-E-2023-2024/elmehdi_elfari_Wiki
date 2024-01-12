<?php
include 'Database.php';

class User extends Database
{
    private $id;
    private $email;
    private $firstName;
    private $lastName;
    private $password;

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        parent::__construct();
    }

    public function insert($firstName, $lastName, $password, $email)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $this->query("SELECT COUNT(*) AS total FROM $this->tableName");
        $row = $this->single();
        if ($row['total'] === '0') {
            $role = 'admin';
        } else {
            $role = 'author';
        }

        $this->query("INSERT INTO users (firstname, lastname, password, email, role) VALUES (:firstName, :lastName, :hashedPassword, :email, :role)");
        $this->bind(':firstName', $firstName);
        $this->bind(':lastName', $lastName);
        $this->bind(':hashedPassword', $hashedPassword);
        $this->bind(':email', $email);
        $this->bind(':role', $role);
        $this->execute();
    }

    public function isEmailAdmin($email)
    {
        $this->query("SELECT role FROM users WHERE email = :email");
        $this->bind(':email', $email);
        $this->execute();
        $result = $this->stmt->single();

        if ($result && $result['role'] === 'admin') {
            return true;
        } else {
            return false;
        }
    }

    public function signin($password, $email)
    {
        $this->query("SELECT * FROM users WHERE email = :email");
        $this->bind(':email', $email);
        $this->stmt->execute();
        $result = $this->stmt->single();

        if ($result && password_verify($password, $result['password'])) {
            return true;
        } else {
            return false;
        }
    }

    public function getAll()
    {
        $this->query("SELECT * FROM $this->tableName");
        return $this->resultSet();
    }
}
