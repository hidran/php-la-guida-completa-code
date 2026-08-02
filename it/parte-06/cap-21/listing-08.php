function deleteUserImages(string $avatarPath): void
{
    if (!$avatarPath) {
        return;
    }
    $uploadDir = getUploadDir();
    $fileName = basename($avatarPath);
    $avatarFile = $uploadDir . $fileName;
    $thumbnail = $uploadDir . 'thumbnail_' . $fileName;
    $intermediate = $uploadDir . 'intermediate_' . $fileName;
