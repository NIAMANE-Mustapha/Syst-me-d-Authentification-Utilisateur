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


        // Construct the query with placeholders
        $query = "SELECT * FROM stagiaire WHERE num = :num AND nom_stagiaire = :nom AND prenom_stagiaire = :prenom AND email_stagiaire = :email";
        
        // Prepare the statement
        $statement = $con->prepare($query);
        
        // Bind the parameters
        $statement->bindParam(':num', $num);
        $statement->bindParam(':nom', $nom);
        $statement->bindParam(':prenom', $prenom);
        $statement->bindParam(':email', $email);

        // Execute the statement
        $statement->execute();

        // Fetch the results
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        if ($results) {
            foreach ($results as $row) {
                header("Location: login_success.html");
            }
        } else {
            header("Location: log_in_failed.html");
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close connection
    $con = null;
}
?>
