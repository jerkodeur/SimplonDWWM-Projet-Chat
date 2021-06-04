<div class="row">
    <form action="index.php" method="post">
        <div class="row">
            <div class="col-4 form-group">
                <input type="text" class="form-control" id="pseudo" name="pseudo" id="pseudo" placeholder="Entrer votre pseudo" value=<?php if ($_POST['pseudo'])  echo $_POST['pseudo'] ?>>
                <?php if ($form_error['pseudo'] === 'empty') { ?>
                    <div class="invalid-feedback">Veuillez renseigner ce champ</div>
                <?php } ?>
            </div>
            <div class="col-8 form-group">
                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Entrez votre message"><?php if ($_POST['message'])  echo $_POST['message'] ?></textarea>
                <?php if ($form_error['message'] === 'empty') { ?>
                    <div class="invalid-feedback">Veuillez renseigner ce champ</div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                <button class="btn btn-primary" type="submit">Envoyer</button>
            </div>
        </div>
    </form>
</div>