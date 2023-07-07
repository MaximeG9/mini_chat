<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once('./utils/connexion.php');
    ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-9">
                <div>
                    <?php
                    include_once('./display_message.php');
                    ?>
                </div>
                <div class="mt-5">
                    <?php
                    include_once('./message_pseudo.php');
                    ?>
                </div>
            </div>
            <div class="col-3">
                <?php
                include_once('./display_pseudos.php');
                ?>
            </div>
        </div>
    </div>

    <div class="container">

    </div>
</body>

</html>