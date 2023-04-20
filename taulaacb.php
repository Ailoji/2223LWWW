<?php

$json = unserialize(file_get_contents('miarray.txt'));

$data = json_decode($json, true);
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">

    <table class="table">
      <thead>
        <tr>
          <th>Equipo</th>
          <th>Dorsal</th>
          <th>Nombre</th>
          <th>Posición</th>
          <th>Nacionalidad</th>
          <th>Licencia</th>
          <th>Altura</th>
          <th>Edad</th>
          <th>Temporadas</th>
          <th>Foto</th>
        </tr>
      </thead>
      <tbody>

        <?php foreach ($data as $row) : ?>
          <tr>
            <td scope="row"><?php echo $row['equip']; ?></td>
            <td><?php echo $row['dorsal']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['posición']; ?></td>
            <td><?php echo $row['nacionalitat']; ?></td>
            <td><?php echo $row['llicencia']; ?></td>
            <td><?php echo $row['alçada']; ?></td>
            <td><?php echo $row['edat']; ?></td>
            <td><?php echo $row['temporades']; ?></td>
            <td><img src="<?php echo $row['foto']; ?>" alt="Foto"></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>