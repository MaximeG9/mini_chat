<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Qui chat en ce moment ?</h3>
    <div class="container">
        <?php
        require_once('./utils/connexion.php');

        $request = $db->query('SELECT * FROM users');
        $users = $request->fetchAll();

        foreach ($users as $user) :
            echo $user['pseudo'] . '<br>';

        endforeach;
        ?>
    </div>
</body>

</html>