<?php
// // index.php

// Define la ruta y el puerto
$host = 'localhost';
$port = 3001;

// Función para manejar las rutas
function handleRequest($requestUri) {
    if ($requestUri === '/') {
        // Lógica específica para la ruta "/mi_ruta"
        echo "¡Hola desde la ruta raiz!";
    } else {
        // Devolver el recurso solicitado tal cual está
        return false;
    }
}

// Obtén la ruta de la solicitud actual
$requestUri = $_SERVER['REQUEST_URI'];

// Maneja la solicitud
if (handleRequest($requestUri) === false) {
    // Si no se encontró una ruta personalizada, sirve el archivo solicitado
    $filePath = __DIR__ . $requestUri;
    if (is_file($filePath)) {
        return false;
    } else {
        echo "404 - Recurso no encontrado";
    }
}

// Inicia el servidor web
echo "Servidor PHP escuchando en http://$host:$port\n";
echo "Presiona Ctrl+C para detener el servidor.\n";

// // Ejecuta el servidor
exec("php -S $host:$port index.php");











































































// // Definir el puerto en el que escuchará el servidor
// $port = 8080;

// // Definir la dirección IP en la que se va a escuchar (localhost en este caso)
// $host = '127.0.0.1';

// // Iniciar el servidor HTTP incorporado
// $server = sprintf('http://%s:%d', $host, $port);
// echo "Servidor PHP escuchando en $server\n";
// echo "Puedes acceder a él en tu navegador visitando: $server\n";
// echo "Presiona Ctrl+C para detener el servidor\n";

// // Definir el manejo de la solicitud
// $requestHandler = function ($request, $response) {
//     // Obtener la ruta de la solicitud
//     $path = $request->getPath();

//     // Comprobar la ruta y responder según corresponda
//     if ($path === '/') {
//         $response->writeHead(200, array('Content-Type' => 'text/plain'));
//         $response->end("¡Hola desde el servidor PHP!");
//     } else {
//         $response->writeHead(404, array('Content-Type' => 'text/plain'));
//         $response->end("Ruta no encontrada");
//     }
// };

// // Iniciar el servidor HTTP incorporado
// $httpServer = new http_server();
// $httpServer->on('request', $requestHandler);
// $httpServer->listen($host, $port);
