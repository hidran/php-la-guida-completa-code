<?php
if ($_FILES["avatar"]["error"] !== UPLOAD_ERR_OK) {
    $errors["avatar"] = "Errore durante il caricamento";
}
