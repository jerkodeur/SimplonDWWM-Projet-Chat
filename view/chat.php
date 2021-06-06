<div class="row table-active border-white mt-3">
    <div class="col-lg-12">
        <div class="page-header">
            <h1 id="tables">Live chat Amazin</h1>
        </div>

        <div class="bs-component">
            <form name="update_mess" action="index.php" method="POST">
                <table class="table">
                    <thead>
                        <tr class="table-light text-dark">
                            <th scope="col"></th>
                            <th scope="col" class="col-2">Date</th>
                            <th scope="col" class="col-2">Pseudo</th>
                            <th scope="col" class="col-8">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($messages as $message) {
                        ?>
                            <input type="hidden" name="pseudo" value=<?= $message['pseudo'] ?> />
                            <input type="hidden" name="id" value=<?= $message['id'] ?> />
                            <input type="hidden" name="update" />

                            <tr class="table-light">
                                <td><a href="?d=<?= $message['id'] ?>"><button type="button" class="btn btn-outline-dark rounded-circle">X</button></a></td>
                                <td class="col-2"><?php echo formatChatDate($message['date']) ?></td>
                                <td class="col-2"><?= htmlentities($message['pseudo']) ?></td>
                                <td class="col-8">
                                    <div>
                                        <?php if (isset($_GET['m']) && $_GET['m'] == $message['id']) { ?>
                                            <textarea rows="3" class="form-control" name="message"><?= htmlspecialchars($message['content']) ?></textarea>
                                        <?php    } else {
                                            echo nl2br(htmlentities($message['content']));
                                        } ?>
                                    </div>
                                    <div class="text-right">
                                        <?php if (isset($_GET['m']) && $_GET['m'] == $message['id']) { ?>
                                            <a class="custom-link" href=<?= $_SERVER["HTTP_REFERER"] ?>><small>Annuler</small></a>&nbsp;-&nbsp;
                                            <a class="custom-link" href="#" onclick="document.forms['update_mess'].submit();"><small>Remplacer le message</small></a>
                                        <?php    } else { ?>
                                            <a class="custom-link" href=<?= "?m=" . $message['id'] ?>><small>Modifier</small></a>
                                        <?php } ?>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>