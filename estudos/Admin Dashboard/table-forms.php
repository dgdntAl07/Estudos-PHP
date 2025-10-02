<?php

include 'crud.php';
$user = new Students();

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <title>Hello, world!</title>
</head>

<body>
  <div class="container">
    <a href="#" class="btn btn-dark m-5">Add New</a>

    <table class="table mb-3">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Email</th>
          <th scope="col">Pass</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $lista = $user->getAll();
          foreach ($lista as $item):
        ?>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>@Otto</td>
            <td>ancenakm</td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>
</body>

</html>