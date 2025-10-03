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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <title>Table users</title>
</head>

<body>

  <nav class="navbar navbar-light bg-light">
    <div class="container">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <div class="col">
        <a href="forms.php" class="btn btn-dark m-5">Add New</a>
      </div>

      <div class="col justify-content-md-end">
        <a href="forms.php" class="btn btn-dark m-5">Lixeira</a>
      </div>
    </div>
  </nav>

  <div class="container">
    <table class="table mb-3">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Email</th>
          <th scope="col">Pass</th>
          <th scope="col">Acctions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $lista = $user->getAll();
        foreach ($lista as $item):
          ?>
          <tr>
            <th scope="row"><?php echo $item['id'] ?></th>
            <td><?php echo $item['nome'] ?></td>
            <td><?php echo $item['email'] ?></td>
            <td><?php echo $item['senha'] ?></td>
            <td>
              <button class="btn btn-primary">
                <a href="./acctions/excluir.php?id=<?php echo $item['id']; ?>">
                  <i class="bi bi-pencil-square text-white"></i>
                </a>

              </button>

              <button class="btn btn-danger">
                <a href="./acctions/excluir.php?id=<?php echo $item['id']; ?>">
                  <i class="bi bi-trash text-white"></i>
                </a>
              </button>

            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>