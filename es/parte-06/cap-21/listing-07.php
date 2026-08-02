function createThumbnailAndIntermediate(string $avatarPath): void
{
    $config = require 'config.php';
    $fileName = basename($avatarPath);
    $uploadDirPath = getUploadDir();
    $thumbnailPath = $uploadDirPath . 'thumbnail_' . $fileName;
    $intermediatePath = $uploadDirPath . 'intermediate_' . $fileName;
    $sourcePath = $uploadDirPath . $fileName;
    $thumbnailWidth = $config['thumbnailWidth'] ?? 120;
    $intermediateWidth = $config['intermediateWidth'] ?? 800;
