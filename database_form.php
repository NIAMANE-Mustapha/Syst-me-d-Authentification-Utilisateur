<?php
$server_name = "localhost";
$username = "mustapha";
$password = "mustapha123";
$dbname = "ahlame";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    try {
        $con = new PDO("mysql:host=$server_name;dbname=$dbname", $username, $password);

        $stmt=$con->prepare("INSERT INTO stagiaire (num,nom_stagiaire, prenom_stagiaire, email_stagiaire) 
        VALUES (:num,:nom_stagiaire, :prenom_stagiaire, :email_stagiaire)");
        
        $stmt->bindParam(':num', $num);
        $stmt->bindParam(':nom_stagiaire', $nom);
        $stmt->bindParam(':prenom_stagiaire', $prenom);
        $stmt->bindParam(':email_stagiaire', $email);
        $stmt->execute();
        header("Location: welcome.html");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close connection
    $con = null;
}
?>
