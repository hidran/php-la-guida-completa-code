$extension = $mimeMap[$mimeType];
$fileName = ($userId ? $userId . '_' : '') . bin2hex(random_bytes(8)) . '.' . $extension;
$res = move_uploaded_file($file['tmp_name'], $uploadDirPath . $fileName);
return $res ? $uploadDir . '/' . $fileName : null;
