<?php
// Define o diretório raiz do seu projeto Laravel
$root = __DIR__ . '/';
// Carrega o autoloader do Composer
require $root . '/vendor/autoload.php';
// Inicializa o aplicativo Laravel
$app = require_once $root . '/bootstrap/app.php';

// Executa o aplicativo Laravel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();
$kernel->terminate($request, $response);
