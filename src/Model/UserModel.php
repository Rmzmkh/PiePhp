<?php
// namespace UserModel;
// class UserModel
// {
    // private $email;
    // private $password;

    // public function save() {
        
    //     $servername="localhost";
    //     $username="root";
    //     $password="";
    //     $dbname="piephp";
    //     try {
    //         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
    //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //         echo "la connexion à été établie"
    //     }
    //     catch (PDOException $e){
    //         echo "la connexion à échoué: ". $e->getMessage();
    //     }
    //     if(isset($_POST['envoyer']))
    //     {
    //         $id = $_POST['id'];
    //         $email = $_POST['email'];
    //         $password = $_POST['password'];
            
    //         $sql = ("INSERT INTO `users`(`id`, `email`, `password`) VALUES(:id, :email, :password)";
    //         $stmt = $conn->prepare($sql);
    //         $stmt->bindParam(':id', $id);
    //         $stmt->bindParam(':email', $email);
    //         $stmt->bindParam(':password', $password);
    
    //         $stmt->execute();
    //     }

    // }
 
    use Core\Database;
    
    class UserModel extends \Core\Controller {
    
        private $dbh;
        private $email;
        private $password;
    
        public function save() {
    
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="PiePHP";
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "la connexion à été établie"
            }
            catch (PDOException $e){
                echo "la connexion à échoué: ". $e->getMessage();
            }
            if(isset($_POST['envoyer']))
            {
                // $id = $_POST['id'];
                $email = $_POST['email'];
                $password = $_POST['password'];
    
                $sql = ("INSERT INTO users(email, password) VALUES(:email, :password)";
                $stmt = $conn->prepare($sql);
                // $stmt->bindParam(':id', $id);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
    
                $stmt->execute();
            }
    
        }