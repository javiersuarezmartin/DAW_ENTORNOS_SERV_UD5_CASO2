<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporada</title>
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
</head>
<body>
    <div class="container"> 

        <?php
    
            // Incluimos el archivo con el código el objeto Equipo
            include 'Equipo.php';
            
            // Declaramos un nuevo objeto Equipo
            $equipo = new Equipo();
    
            // Creamos los 9 jugdores con bucle FOR
            for ($i = 1; $i<=9; $i++) {
                $jugador = new Jugador($i);
                // Añadimos los puntos correspondientes a cada jugador
                $jugador->addPtos(rand(20, 100));
                // Añadimos el jugador al equipo
                $equipo->addJug($jugador);
               
            };
            
            // Calculamos el total de puntos
            $total = $equipo->getTotal();
            
            // Imprimimos los datos en una tabla llamando a la función.
            imprimirEquipo($equipo);
            
            //  Funciones auxiliares
    
            function imprimirEquipo($equipo) {
                echo ('<h1>Tabla puntuaci&oacute;n jugadores</h1>');
                echo ('<table><thead><tr><th>Nº Jugador</th><th>Puntos</th></tr></thead><tbody>');
                
                // Guardamos el array de jugadores del equipo en una variable.
                $jugadores = $equipo->getJugadores();
                
                // Recorremos el array de jugadores para imprimirlos.
                foreach ($jugadores as $valor) {
                    echo ('<tr>');
                    echo ('<td>Jugador - ' . $valor->getNumJug() . '</td>');
                    echo ('<td>' . $valor->getPtos() . '</td>');
                    echo ('</tr>');
                };           
    
                echo ('</tbody></table>');
                echo ('<h2>TOTAL ' . $equipo->getTotal() . ' PUNTOS</h2>');            
                           
            };
        ?>
        
        <a href="../html/index.html" class="btn">Volver</a>
    </div>
    
</body>
</html>