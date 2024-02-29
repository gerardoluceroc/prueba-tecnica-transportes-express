<?php

// Habilitar CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Define la ruta y el puerto
$host = 'localhost';
$port = 8000;

// Configuración de la base de datos MySQL
$host_database = 'localhost';
$port_database = 3306;
$username_database = 'root';
$password_database = 'root123';
$database_database = 'trips';



// // Intento de conexión a la base de datos MySQL utilizando PDO
// try {
//     $conn = new PDO("mysql:host=$host_database;port=$port_database;dbname=$database_database", $username_database, $password_database);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Conexión exitosa a la base de datos MySQL.";
// } catch(PDOException $e) {
//     echo "Error al conectar a la base de datos MySQL: " . $e->getMessage();
// }




$servername = "localhost";
$username = "root";
$password = "root123";

try {
  $conn = new PDO("mysql:host=$servername;dbname=trips", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}















// Función para manejar las peticiones GET
function handleRequest($requestUri) {
    if ($requestUri === '/') {
        echo "¡Hola desde la ruta raiz!";
    } else {
        // Devolver el recurso solicitado tal cual está
        return false;
    }
}

// Función para manejar las solicitudes POST a la ruta "/trip/save"
function handlePostRequest($requestUri) {
    if ($requestUri === '/trip/save' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener los datos enviados por el cliente
        $postData = file_get_contents('php://input');
        
        // Verificar si se recibieron datos en la solicitud POST
        if (!empty($postData)) {
            // Decodificar el JSON recibido
            $tripData = json_decode($postData, true);
            
            // Conexión a la base de datos MySQL utilizando PDO
            try {
                $conn = new PDO("mysql:host=$host_database;port=$port_database;dbname=$database_database", $username_database, $password_database);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Preparar la consulta SQL para insertar los datos en la tabla
                $stmt = $conn->prepare("INSERT INTO trips (origen, destino, fecha, hora) VALUES (:origen, :destino, :fecha, :hora)");

                // Bind de parámetros
                $stmt->bindParam(':origen', $tripData['origen']);
                $stmt->bindParam(':destino', $tripData['destino']);
                $stmt->bindParam(':fecha', $tripData['fecha']);
                $stmt->bindParam(':hora', $tripData['hora']);

                // Ejecutar la consulta
                $stmt->execute();

                echo "Datos insertados con éxito en la base de datos.";
            } catch(PDOException $e) {
                echo "Error al insertar datos en la base de datos: " . $e->getMessage();
            }
        } else {
            echo "No se recibieron datos en la solicitud POST";
        }
        // Terminar el script después de manejar la solicitud POST
        exit;
    } else {
        // Devolver falso si la solicitud no coincide con esta ruta y método
        return false;
    }
}

// Obtén la ruta de la solicitud actual
$requestUri = $_SERVER['REQUEST_URI'];

// Manejar la solicitud POST
if (handlePostRequest($requestUri) === false) {

    // Si no se encontró una ruta personalizada, sirve el archivo solicitado
    $filePath = __DIR__ . $requestUri;
    if (is_file($filePath)) {
        return false;
    } else {
        echo "404 - Recurso no encontrado";
    }
}

// Ejecuta el servidor
exec("php -S $host:$port index.php");
?>
