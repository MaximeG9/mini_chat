<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        require_once('./utils/connexion.php');

        $request = $db->query('SELECT pseudo, datehour, textmessage FROM messages INNER JOIN users ON messages.id_user = users.id_user');
        while ($i = $request->fetch()) {
            echo $i['pseudo'] . ' ' . $i['datehour'] . ' ' . $i['textmessage'] . '<br>';
        }

        ?>
    </div>
</body>

</html>