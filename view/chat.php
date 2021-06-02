<?php include('model/message.php') ?>

<div class="row table-active border-white mt-3">
    <div class="col-lg-12">
        <div class="page-header">
            <h1 id="tables">Live chat Amazin</h1>
        </div>

        <div class="bs-component">
            <table class="table">
                <thead>
                    <tr class="table-light text-dark">
                        <th scope="col" class="col-2">Date</th>
                        <th scope="col" class="col-2">Pseudo</th>
                        <th scope="col" class="col-8">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $messages = findAll();
                    var_dump($messages);
                    die();
                    foreach ($messages as $message) { ?>
                        <tr class="table-light">
                            <td class="col-2"><?= $message['date'] ?></td>
                            <td class="col-2"><?= $message['pseudo'] ?></td>
                            <td class="col-8"><?= $message['message'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>