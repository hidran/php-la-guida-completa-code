<input type="hidden" name="MAX_FILE_SIZE" value="<?= getConfig('maxFileSize') ?>">
<input type="file" accept="<?= implode(',', getConfig('mimeTypes')) ?>" id="avatar" class="form-control"
       value="<?= $user['avatar'] ?>" name="avatar">
