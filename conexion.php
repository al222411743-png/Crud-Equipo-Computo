<?php

try {
    $pdo = new PDO(
        "mysql:host=127.0.0.1;port=3306;dbname=inventario_computo;charset=utf8mb4",
        "root",
        "",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    http_response_code(500);
    header("Content-Type: application/json; charset=utf-8");
    exit(json_encode(["error" => "No se pudo conectar a la base de datos."]));
}
