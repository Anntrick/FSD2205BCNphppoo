<?php
    require_once 'connection.php';
    require_once 'productos.php';
    require_once 'electrodomesticos.php';

    //Cogemos los datos de la DB y creamos instancias de los productos
    $sql = "SELECT * FROM productos";
    $result = $connection->prepare($sql);
    $result->execute();
    $tasks = $result->fetchAll();

    $productos = [];
    foreach($tasks as $task) {
        //diferenciamos por tipo de producto
        if($task['electrodomestico'] == 1){
            $prod = new Electrodomesticos();
            $prod->nombre = $task['nombre'];
            $prod->descripcion = $task['descripcion'];
            $prod->precio = $task['precio'];
            $prod->imagen = $task['imagen'];
            $prod->potencia = $task['tension'];

            $productos[] = $prod;
        } else{
            $prod = new Productos();
            $prod->nombre = $task['nombre'];
            $prod->descripcion = $task['descripcion'];
            $prod->precio = $task['precio'];
            $prod->imagen = $task['imagen'];

            $productos[] = $prod;
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<body>
    <?php
        foreach($productos as $prod) {
            //mostramos los productos y mostramos los datos
    ?>  
        <div>
            <h1><?php echo $prod->nombre; ?></h1>
            <p><?php echo $prod->descripcion; ?></p>
            <p><?php echo $prod->precio; ?></p>
            <?php
                if(isset($prod->potencia)){
                    echo "<p>". $prod->potencia . "</p>";
                }
            ?>
            <img style="width:100px;" src="<?php echo $prod->imagen; ?>"/>
        </div>
    <?php
        }
    ?>

</body>
</html>