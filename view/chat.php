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
                        <th scope="col">Date</th>
                        <th scope="col">Pseudo</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $messages = getMessages();
                    foreach ($messages as $message) { ?>
                        <tr class="table-light">
                            <td><?= $message['date'] ?></td>
                            <td><?= $message['pseudo'] ?></td>
                            <td><?= $message['message'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>