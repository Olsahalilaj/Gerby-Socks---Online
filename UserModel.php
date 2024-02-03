<?php
class UserModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getUserByEmail($email) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser($name, $surname, $email, $pass) {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO users (name, lastname, email, password) VALUES (:name, :surname, :email, :password)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':surname', $surname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $pass);
            $stmt->execute();


            return true;
                } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false; 
        }
    }

}
?>