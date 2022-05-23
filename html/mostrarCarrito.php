<?php
    include 'carrito.php';
    define("KEY3","DEVELOTECA");
    define("COD3","AES-128-ECB");
?>
<div class="container">
    <div class="titles">
        <h1>LISTA DEL CARRITO</h1>
    </div>
    <?php if(!empty($_SESSION['CARRITO'])){?>
        <table class="table">
        <tbody>
            <tr>
                <th >Nombre</th>
                <th  class="text-center">Cantidad</th>
                <th  class="text-center">Precio</th>
                <th class="text-center">Total</th>
                <th >----</th>
            </tr>
            <?php $total = 0; ?>
            <?php foreach($_SESSION['CARRITO'] as $indice =>$producto){ ?>
            <tr>
                <td ><?php echo $producto['NOMBRE']?></td>
                <td  class="text-center"><?php echo $producto['CANTIDAD']?></td>
                <td  class="text-center"><?php echo $producto['PRECIO']?></td>
                <td  class="text-center"><?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'],2)?></td>
                <td >
                <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD3,KEY3);?>">
                    <button class="btn btn-danger" name="btnProducto" value="Eliminar" type="submit">Eliminar</button>
                </form>
                </td>
                
            </tr>
            <?php $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']);?>
            <?php } ?>
            <tr>
                <td colspan="3" align="right"><h3>Total</h3></td>
                <td align="right" colspan="2"><h3>$<?php echo number_format($total,2)?></h3></td>
            </tr>
        </tbody>
    </table>
    <?php } else{?>
        <div class="alert">
             No hay productos disponibles en el carrito
        </div>
    <?php }?>
</div>