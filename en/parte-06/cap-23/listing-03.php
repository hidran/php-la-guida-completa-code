<?php
if (is_user_logged_in()): ?>
    <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
            <a class="nav-link <?= $indexActive ?>" aria-current="page" href="<?= $indexPage ?>"><i
                        class="fa-solid fa-users"></i>Users</a>
        </li>
