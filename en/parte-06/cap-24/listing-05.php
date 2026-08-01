function base64_url_encode(string $bytes): string
{
    $res = base64_encode($bytes);
    $res = strtr($res, ['+' => '-', '/' => '_']);

    return rtrim($res, '=');
}
