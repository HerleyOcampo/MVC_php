<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>bienvenidos, ingrese ó registrese</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Habitaciones</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //
            foreach ($data["houses"] as $info) {

                echo "<tr>";
                echo "<td>" . $info["name"] . "</td>";
                echo "<td>" . $info["description"] . "</td>";
                echo "<td>" . $info["rooms"] . "</td>";
                echo "<td>" . $info["price"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>

    </table>

</body>

</html>