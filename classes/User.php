<?php

class user
{
    private  $id;
    private $email;
    private  $firstName;
    private  $lastName;
    private $password;
    private $reset_token;
    private $reset_token_expires;


    static public function insert($firstName, $lastName, $password, $email)
    {
        global  $db;
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $result = $db->query("SELECT COUNT(*) as total FROM users");
        $row = $result->fetch_assoc();
        $totalUsers = $row['total'];

        if ($totalUsers === '0') {
            $role = 'admin';
        } else {
            $role = 'author';
        }

        $sql = "INSERT INTO users (firstname, lastname, password, email, role) VALUES (?, ?, ?, ?, ?)";
        $insert = $db->prepare($sql);
        $insert->bind_param("sssss", $firstName, $lastName, $hashedPassword, $email, $role);
        $insert->execute();
    }

    static public function signin($Password, $email)
    {
        global $db;
        $sql_code = "SELECT * FROM users WHERE email = ?";
        $stmt = $db->prepare($sql_code);
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

    static public function logout()
    {
        session_destroy();
        header("index.php?page=login");
    }

    static  public  function  getAll()
    {
        global $db;
        $result = $db->query("SELECT * FROM  users");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
