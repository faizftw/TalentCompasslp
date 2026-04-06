<?php

/**
 * Vercel Serverless Entry Point for Laravel
 * Handles both static file serving and PHP routing.
 */

define('LARAVEL_START', microtime(true));

// --- Serve static files directly from public/ ---
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$urlPath = parse_url($requestUri, PHP_URL_PATH);
$staticFile = __DIR__ . '/../public' . $urlPath;

if ($urlPath !== '/' && file_exists($staticFile) && is_file($staticFile)) {
    $ext = strtolower(pathinfo($staticFile, PATHINFO_EXTENSION));
    $mimeTypes = [
        'css'   => 'text/css; charset=utf-8',
        'js'    => 'application/javascript; charset=utf-8',
        'png'   => 'image/png',
        'jpg'   => 'image/jpeg',
        'jpeg'  => 'image/jpeg',
        'gif'   => 'image/gif',
        'webp'  => 'image/webp',
        'svg'   => 'image/svg+xml',
        'ico'   => 'image/x-icon',
        'woff'  => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf'   => 'font/ttf',
        'json'  => 'application/json',
        'txt'   => 'text/plain',
    ];

    if (isset($mimeTypes[$ext])) {
        header('Content-Type: ' . $mimeTypes[$ext]);
        header('Cache-Control: public, max-age=31536000, immutable');
        readfile($staticFile);
        exit;
    }
}

// --- Bootstrap Laravel for everything else ---
$_ENV['APP_STORAGE'] = '/tmp';
$_SERVER['APP_STORAGE'] = '/tmp';

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$request = Illuminate\Http\Request::capture();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
