<?php

$uri = rawurldecode(
    parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/'
);

$publicDir = realpath(__DIR__ . '/../public');

$staticExtensions = [
    'css', 'js', 'mjs', 'map',
    'png', 'jpg', 'jpeg', 'gif', 'svg',
    'ico', 'webp', 'avif',
    'woff', 'woff2', 'ttf', 'eot', 'otf',
    'pdf', 'txt', 'xml', 'json', 'webmanifest',
    'mp3', 'mp4'
];

$extension = strtolower(pathinfo($uri, PATHINFO_EXTENSION));

if (
    $publicDir !== false &&
    $uri !== '/' &&
    in_array($extension, $staticExtensions, true)
) {
    $candidate = realpath(
        $publicDir . DIRECTORY_SEPARATOR . ltrim($uri, '/')
    );

    $allowedRoots = [$publicDir];

    $storagePublic = realpath(__DIR__ . '/../storage/app/public');

    if ($storagePublic !== false) {
        $allowedRoots[] = $storagePublic;
    }

    $allowed = false;

    foreach ($allowedRoots as $root) {
        if (
            $candidate !== false &&
            str_starts_with(
                $candidate,
                $root . DIRECTORY_SEPARATOR
            )
        ) {
            $allowed = true;
            break;
        }
    }

    if ($allowed && is_file($candidate)) {
        header(
            'Content-Type: ' .
            (mime_content_type($candidate) ?: 'application/octet-stream')
        );
        header('X-Content-Type-Options: nosniff');
        header('Cache-Control: public, max-age=3600');

        readfile($candidate);
        exit;
    }
}

require __DIR__ . '/../public/index.php';