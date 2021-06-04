<div class="row">
    <form action="index.php#form" method="post">
        <div class="row">
            <div class="col-5 form-group">
                <input type="text" class="form-control" id="pseudo" name="pseudo" id="pseudo" placeholder="Entrer votre pseudo" value=<?php if (isset($_POST['pseudo']))  echo $_POST['pseudo'] ?>>
                <?php if (isset($form_error) && $form_error['pseudo'] === 'empty') { ?>
                    <div class="invalid-feedback">Veuillez renseigner ce champ</div>
                <?php } ?>
            </div>
            <div class="col-7 form-group">
                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Entrez votre message"><?php if (isset($_POST['message']))  echo $_POST['message'] ?></textarea>
                <?php if (isset($form_error) && $form_error['message'] === 'empty') { ?>
                    <div class="invalid-feedback">Veuillez renseigner ce champ</div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                <button class="btn btn-primary mb-3" type="submit">Envoyer</button>
                <span id="form"></span>
            </div>
        </div>
    </form>
</div>