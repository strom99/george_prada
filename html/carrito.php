<?php
define("KEY1","DEVELOTECA");
define("COD1","AES-128-ECB");
$mensaje = "";
if (isset($_POST['btnProducto'])) {
    switch ($_POST['btnProducto']) {
        case 'Agregar':
            if(is_numeric(openssl_decrypt($_POST['id'],COD1,KEY1))){
                $ID = openssl_decrypt($_POST['id'],COD1,KEY1);
                $mensaje.= "OK ID Correcto"." ".$ID."</br>";
            }else{
                $mensaje.= "Upss.... ID Incorrecto"." ".$ID."<br>";
            }
            if(is_string(openssl_decrypt($_POST['nombre'],COD1,KEY1))){
                $NOMBRE = openssl_decrypt($_POST['nombre'],COD1,KEY1);
                $mensaje.= "OK Nombre Correcto"." ".$NOMBRE."</br>";
            }else{
                $mensaje.= "Upss.... Nombre Incorrecto"." ".$NOMBRE."<br>";
            }
            if(is_string(openssl_decrypt($_POST['marca'],COD1,KEY1))){
                $MARCA = openssl_decrypt($_POST['marca'],COD1,KEY1);
                $mensaje.= "OK Marca Correcta"." ".$MARCA."</br>";
            }else{
                $mensaje.= "Upss.... Marca Incorrecta"." ".$MARCA."<br>";
            }
            if(is_numeric(openssl_decrypt($_POST['precio'],COD1,KEY1))){
                $PRECIO = openssl_decrypt($_POST['precio'],COD1,KEY1);
                $mensaje.= "OK Precio Correcto"." ".$PRECIO."</br>";
            }else{
                $mensaje.= "Upss.... Precio Incorrecto"." ".$Precio."<br>";
            }
            if(is_string(openssl_decrypt($_POST['categoria'],COD1,KEY1))){
                $CATEGORIA = openssl_decrypt($_POST['categoria'],COD1,KEY1);
                $mensaje.= "OK Categoria Correcta"." ".$CATEGORIA."</br>";
            }else{
                $mensaje.= "Upss.... Categoria Correcta"." ".$CATEGORIA."<br>";
            }
            if(is_string(openssl_decrypt($_POST['categoria'],COD1,KEY1))){
                $CATEGORIA = openssl_decrypt($_POST['categoria'],COD1,KEY1);
                $mensaje.= "OK Categoria Correcta"." ".$CATEGORIA."</br>";
            }else{
                $mensaje.= "Upss.... Categoria InCorrecta"." ".$CATEGORIA."<br>";
            }
            if(is_numeric(openssl_decrypt($_POST['cantidad'],COD1,KEY1))){
                $CANTIDAD = openssl_decrypt($_POST['cantidad'],COD1,KEY1);
                $mensaje.= "OK Cantidad Correcta"." ".$CANTIDAD."</br>";
            }else{
                $mensaje.= "Upss.... Cantidad InCorrecta"." ".$CANTIDAD."<br>";
            }
            if(is_string(openssl_decrypt($_POST['genero'],COD1,KEY1))){
                $GENERO = openssl_decrypt($_POST['genero'],COD1,KEY1);
                $mensaje.= "OK Genero Correcto"." ".$GENERO."</br>";
            }else{
                $mensaje.= "Upss.... Genero InCorrecto"." ".$GENERO."<br>";
            }
            if(is_string(openssl_decrypt($_POST['descripcion'],COD1,KEY1))){
                $DESC = openssl_decrypt($_POST['descripcion'],COD1,KEY1);
                $mensaje.= "OK Descripcion Correcta"." ".$DESC."</br>";
            }else{
                $mensaje.= "Upss.... Descripcion InCorrecta"." ".$DESC."<br>";
            }

            if (!isset($_SESSION['CARRITO'])) {
                  $producto = array(
                    'ID' => $ID,
                    'NOMBRE' => $NOMBRE,
                    'MARCA' => $MARCA,
                    'PRECIO' => $PRECIO,
                    'CATEGORIA' => $CATEGORIA,
                    'CANTIDAD' => $CANTIDAD,
                    'GENERO' => $GENERO,
                    'DESC' => $DESC
                  );
                  $_SESSION['CARRITO'][0]=$producto;
                  $mensaje = "PRODUCTO AGREGADO AL CARRITO";
            }else {
                $idProductos = array_column($_SESSION['CARRITO'],"ID");
                if(in_array($ID, $idProductos)){
                        echo "El producto ya ha sido seleccionado";
                        $mensaje = "";
                }else {
                    $numeroProductos = count($_SESSION['CARRITO']);
                    $producto = array(
                        'ID' => $ID,
                        'NOMBRE' => $NOMBRE,
                        'MARCA' => $MARCA,
                        'PRECIO' => $PRECIO,
                        'CATEGORIA' => $CATEGORIA,
                        'CANTIDAD' => $CANTIDAD,
                        'GENERO' => $GENERO,
                        'DESC' => $DESC
                      );
                    $_SESSION['CARRITO'][$numeroProductos] = $producto;
                    $mensaje = "<script>alert('Producto agregado al carrito')</script>";
                }
            }
            break;
            case 'Eliminar':
                if(is_numeric(openssl_decrypt($_POST['id'],COD1,KEY1))){
                    $ID = openssl_decrypt($_POST['id'],COD1,KEY1);
                    foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                          if($producto['ID'] == $ID){
                                unset($_SESSION['CARRITO'][$indice]);
                                echo "<script>alert('Elemento borrado......')</script>";
                          }  
                    }
                }else{
                    $mensaje.= "Upss.... ID Incorrecto"." ".$ID."<br>";
                }
            break;

    }
    
}



?>