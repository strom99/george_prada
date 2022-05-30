<?php

include '../procesos/conexionBD.php';
$action = $_POST['action'];
$response = ['data' => $_POST];


function submirImagen ($postImage) {
    $uploaded = false;
    $nombre = '';
    if (isset($postImage)) {
        $extension = pathinfo($postImage['name'], PATHINFO_EXTENSION);
        $nombre = uniqid('img_') . '.' . $extension;
        $ruta = '../uploads/productos/' . $nombre;
        $uploaded = move_uploaded_file($postImage['tmp_name'], $ruta);
    }
    return [
        'uploaded' => $uploaded,
        'nombre' => $nombre
    ];
}

if (isset($action)) {
    switch($action) {
        case 'select':
            $response['status'] = 'ok';
        case 'create':
            $stmt = $baseDatos->prepare('INSERT INTO productos (nombre, marca, precio, categoria, cantidad, genero, descripcion, imagen) VALUES (:nombre, :marca, :precio, :categoria, :cantidad, :genero, :descripcion, :imagen)');
            $stmt->bindParam(':nombre', $_POST['nombre']);
            $stmt->bindParam(':marca', $_POST['marca']);
            $stmt->bindParam(':precio', $_POST['precio']);
            $stmt->bindParam(':categoria', $_POST['categoria']);
            $stmt->bindParam(':cantidad', $_POST['cantidad']);
            $stmt->bindParam(':genero', $_POST['genero']);
            $stmt->bindParam(':descripcion', $_POST['descripcion']);

            $upload = submirImagen($_FILES['imagen']);

            if ($upload['uploaded']) {
                $stmt->bindParam(':imagen', $upload['nombre']);
            }

            $response['status'] = $stmt->execute() ? 'ok' : 'error';
            $response['error_message'] = $stmt->errorInfo();
            break;
        case 'update':
            $stmt = $baseDatos->prepare('UPDATE productos SET nombre = :nombre, marca = :marca, precio = :precio, categoria = :categoria, cantidad = :cantidad, genero = :genero, descripcion = :descripcion, imagen = :imagen WHERE id = :id');
            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':nombre', $_POST['nombre']);
            $stmt->bindParam(':marca', $_POST['marca']);
            $stmt->bindParam(':precio', $_POST['precio']);
            $stmt->bindParam(':categoria', $_POST['categoria']);
            $stmt->bindParam(':cantidad', $_POST['cantidad']);
            $stmt->bindParam(':genero', $_POST['genero']);
            $stmt->bindParam(':descripcion', $_POST['descripcion']);

            $upload = submirImagen($_FILES['imagen']);

            if ($upload['uploaded']) {
                $stmt->bindParam(':imagen', $upload['nombre']);
            }

            $response['status'] = $stmt->execute() ? 'ok' : 'error';
            $response['error_message'] = $stmt->errorInfo();
            break;
        case 'delete';
            $stmt = $baseDatos->prepare('DELETE FROM productos WHERE id = :id');
            $deleted = $stmt->execute([':id' => $_POST['id']]);
            $response['status'] = $deleted ? 'ok' : 'error';
            $response['error_message'] = $stmt->errorInfo();
            break;
        default: 
            $response['status'] = 'error';
        break;
    }
}

echo json_encode($response);