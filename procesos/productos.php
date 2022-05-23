<?php

include '../procesos/conexionBD.php';
$action = $_POST['action'];
$response = [];

if (isset($action)) {
    switch($action) {
        case 'select':
            $response['status'] = 'ok';
        case 'insert':
            $response['status'] = '';
            break;
        case 'update':
            $response['status'] = 'ok';
            break;
        case 'delete';
            $stmt = $baseDatos->prepare('DELETE FROM productos WHERE id = :id');
            $deleted = $stmt->execute([':id' => $_POST['id']]);
            $response['status'] = $deleted ? 'ok' : 'error';
        break;
    }
}

echo json_encode($response);