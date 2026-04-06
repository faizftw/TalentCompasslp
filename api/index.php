<?php

/**
 * Vercel Serverless Entry Point for Laravel
 */

define('LARAVEL_START', microtime(true));

// Set storage path to /tmp for Vercel (read-only filesystem)
$_ENV['APP_STORAGE'] = '/tmp';
$_SERVER['APP_STORAGE'] = '/tmp';

// Bootstrap Laravel
require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$request = Illuminate\Http\Request::capture();
$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);
