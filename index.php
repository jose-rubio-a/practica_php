<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Práctica de HTML5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="mystyle.css">
</head>

<body>
  <div class="header">
    <h1>Contacto</h1>
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <h2>Formulario</h2>
        <form action="store.php" method="post">
          <label>Nombre: <input id="nombre" name="nombre" type="text" placeholder="Introduce tu nombre"></label><br>
          <label>Correo: <input id="correo" name="correo" type="email" placeholder="Introduce tu correo"></label><br>
          <button type="submit" class="submit">Submit</button>
        </form>
      </div>
      <div class="col">
        <h3>Usuarios</h3>
        <table class="table table-striped" id="tablaFor">
          <tr class="table-info">
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
          </tr>
        <?php
        require('conexion.php');
        $sql = "SELECT ID, nombre, correo FROM usuario";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        
        foreach($stmt->fetchAll() as $row){
          echo "<tr><td>".$row['ID']."</td><td>".$row['nombre']."</td><td>".$row['correo']."</td></tr>";
        }

        ?>
        </table>
      </div>
    </div>
  </div>
</body>

</html>