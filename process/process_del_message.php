<?php

require_once('../utils/connexion.php');

$sql = "DELETE FROM messages";
$query= $db->prepare($sql);
$query->execute();
 

header('Location:../index.php');

?>