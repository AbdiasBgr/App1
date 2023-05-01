<?php
// Paramètre de Connexion à la base de données
$servername = 'localhost';
$username = 'root';
$dbname = 'inscription1';

// Connexion à la base de données
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,);
    // Configuration des options de PDO pour générer des exceptions en cas d'erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Récupérer les valeurs soumises
      $nom = htmlspecialchars($_POST["nom"]);
      $prenom = htmlspecialchars($_POST["prenom"]);
      $date_naissance = htmlspecialchars($_POST["date_naissance"]);

      // Vérifier si les valeurs sont valides
      if (!empty($nom) && !empty($prenom) && !empty($date_naissance)) {
          // Préparer la requête SQL pour insérer les données dans la table
          $stmt = $conn->prepare("INSERT INTO apprenants (nom, prenom, date_naissance) VALUES (:nom, :prenom, :date_naissance)");
          $stmt->bindParam(':nom', $nom);
          $stmt->bindParam(':prenom', $prenom);
          $stmt->bindParam(':date_naissance', $date_naissance);

          // Exécuter la requête
          $stmt->execute();

          // Afficher un message de confirmation
          echo "Merci pour votre inscription, $prenom $nom !";
          
      } else {
          // Afficher un message d'erreur si les données sont manquantes
          echo "Veuillez remplir tous les champs du formulaire.";
      }
    }
} catch(PDOException $e) {
    // Afficher une erreur en cas de problème de connexion à la base de données
    echo "Erreur : " . $e->getMessage();
}

// Fermer la connexion à la base de données
$conn = null;
?>
