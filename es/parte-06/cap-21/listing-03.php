<?php
if ($_FILES["avatar"]["error"] !== UPLOAD_ERR_OK) {
    $errors["avatar"] = "Error durante la carga";
}
