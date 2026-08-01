<?php
$perPage = (int) ($_GET["per_page"] ?? 10);
$page = max(1, (int) ($_GET["page"] ?? 1));
$offset = ($page - 1) * $perPage;
