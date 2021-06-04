<div class="row table-active border-white mt-3">
    <div class="col-lg-12">
        <div class="page-header">
            <h1 id="tables">Live chat Amazin</h1>
        </div>

        <div class="bs-component">
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
                    $messages = findAll();
                    foreach ($messages as $message) {
                    ?>
                        <tr class="table-light">
                            <td><a href="?d=<?= $message['id'] ?>"><button type="button" class="btn btn-outline-dark rounded-circle">X</button></a></td>
                            <td class="col-2"><?php echo formatChatDate($message['date']) ?></td>
                            <td class="col-2"><?= htmlentities($message['pseudo']) ?></td>
                            <td class="col-8"><?= nl2br(htmlentities($message['content'])) ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>