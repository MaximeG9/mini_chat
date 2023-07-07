<?php

require_once('../utils/connexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //check si le formulaire est soumis avec la methode POST
    $pseudo = $_POST['pseudo'];

    // Check if the user already exists
    $selectUserSql = "SELECT id_user FROM users WHERE pseudo = :pseudo";
    $selectUserQuery = $db->prepare($selectUserSql);
    $selectUserQuery->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $selectUserQuery->execute();
    $user = $selectUserQuery->fetch(PDO::FETCH_ASSOC);
    // // Le code vérifie ensuite si l'utilisateur existe déjà en exécutant une requête SELECT sur 
    // la table 'users', en recherchant un enregistrement avec un 'pseudo' correspondant. 
    // La requête est préparée à l'aide de la méthode PDO prepare et la valeur 'pseudo' 
    // est liée au paramètre ':pseudo'. La requête est ensuite exécutée et le résultat 
    // est récupéré à l'aide de fetch(PDO::FETCH_ASSOC)

    if ($user) {
        $idUser = $user['id_user'];

        // Si l'utilisateur existe (la requête SELECT a renvoyé un résultat), 
        // la valeur 'id_user' est extraite de la ligne extraite et affectée à la variable $idUser.

    } else {
        // User does not exist, insert a new record
        $insertUserSql = "INSERT INTO users (pseudo) VALUES (:pseudo)";
        $insertUserQuery = $db->prepare($insertUserSql);
        $insertUserQuery->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $insertUserQuery->execute();
        $idUser = $db->lastInsertId();

        // Si l'utilisateur n'existe pas (la requête SELECT n'a renvoyé aucun résultat), un nouvel 
        // enregistrement est inséré dans la table 'users' à l'aide d'une requête INSERT. 
        // La valeur 'pseudo' est liée au paramètre ':pseudo' et la requête est exécutée. 
        // La lastInsertId()méthode est ensuite utilisée pour récupérer l'ID généré automatiquement
        // pour l'enregistrement d'utilisateur nouvellement inséré, qui est affecté à la variable $idUser.

    }

    $datehour = $_POST['datehour'];
    $textmessage = $_POST['textmessage'];

    // Insert the message into the messages table
    $insertMessageSql = "INSERT INTO messages (id_user, datehour, textmessage) 
                         VALUES (:id_user, :datehour, :textmessage)";
    $insertMessageQuery = $db->prepare($insertMessageSql);
    $insertMessageQuery->bindValue(':id_user', $idUser, PDO::PARAM_INT);
    $insertMessageQuery->bindValue(':datehour', date('Y-m-d-H:i:s') . ' ' . $datehour, PDO::PARAM_STR); 
    $insertMessageQuery->bindValue(':textmessage', $textmessage, PDO::PARAM_STR);
    $insertMessageQuery->execute();

    // La requête est exécutée à l'aide $insertMessageQuery->execute()de pour insérer le message dans la table 'messages'.

    header('Location: ../index.php');
}
?>




