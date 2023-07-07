<main>
    <section>
        <form action="./process/process_messagepseudo.php" method="post">

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Pseudo" name="pseudo" id="">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Message" name="textmessage" id="">
            </div>

            <div class="mb-3">
                <input type="hidden" name="datehour" value="<?php date_default_timezone_set('Europe/Paris');
                                                            $date = date('d-m-y H:i:s'); ?>">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">ENVOYER</button>
            </div>

        </form>
        <form action="./process/process_del_message.php">
            <button type="submit" class="btn btn-danger">SUPPRIMER</button>
        </form>
    </section>
</main>