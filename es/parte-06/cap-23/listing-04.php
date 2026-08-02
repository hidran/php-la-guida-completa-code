<?php
if (user_can_update()): ?>
    <div class="row">

        <div class="col-6">
            <a class="btn btn-success" href="?id=<?= $user['id'] ?>&action=edit&<?= $navParams ?>">
                <i class="fa fa-pen"></i>
                UPDATE
            </a>
        </div>
