<?php

class User extends Database
{
    private  $id;
    private $email;
    private  $firstName;
    private  $lastName;
    private $password;



    static public function insert($firstName, $lastName, $password, $email)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $result = $this->dbh->query("SELECT COUNT(*) as total FROM users");
        $row = $result->fetch_assoc();
        $totalUsers = $row['total'];

        if ($totalUsers === '0') {
            $role = 'admin';
        } else {
            $role = 'author';
        }

        $sql = "INSERT INTO users (firstname, lastname, password, email, role) VALUES (?, ?, ?, ?, ?)";
        $insert = $dbh->prepare($sql);
        $insert->bind_param("sssss", $firstName, $lastName, $hashedPassword, $email, $role);
        $insert->execute();
    }

    static public function isEmailAdmin($email)
    {

        $sql_code = "SELECT role FROM users WHERE email =  ? ";
        $stmt = $this->dbh->prepare($sql_code);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if ($row['role'] === 'admin') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    static public function signin($Password, $email)
    {
        $sql_code = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->dbh->prepare($sql_code);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];
            if (password_verify($Password, $hashedPassword)) {
                return true;
            } else {
                return false;
            }
        }
    }


    public function getAll()
    {
        $result = $this->dbh->query("SELECT * FROM  users");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
