<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <script src="./js/jquery-3.3.1.js"></script>
    <script src="./bootstrap/js/bootstrap.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </div>
</nav>

<?php
$str = '
[
  {
    "name": "Bill",
    "age": 28,
    "id": "A001"
  },
  {
    "name": "Peter",
    "age": 32,
    "id": "A002"
  },
  {
    "name": "Carl",
    "age": 29,
    "id": "A003"
  }
]
';



$ar = json_decode($str,true);

?>


<div class="container">
    <table class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th scope="col">name</th>
            <th scope="col">age</th>
            <th scope="col">id</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($ar as $item): ?>
        <tr>
            <td><?= $item['name'] ?></td>
            <td><?= $item['age'] ?></td>
            <td><?= $item['id'] ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


</div>
</body>
</html>
