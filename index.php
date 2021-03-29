<?php
include("data.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Junior</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="container">

  <h2>Турнирная таблица</h2>

    <div class="table-responsive-lg">
      <table class="table table-hover table-dark">
        <thead>
            <tr class="bg-primary">
                <th>№</th>
                <th>Имя пилота</th>
                <th>Город пилота</th>
                <th>Автомобиль</th>
                <th class="sort"><a href="?sort=1">1 попытка</a></th>
                <th class="sort"><a href="?sort=2">2 попытка</a></th>
                <th class="sort"><a href="?sort=3">3 попытка</a></th>
                <th class="sort"><a href="?sort=4">4 попытка</a></th>
                <th class="sort"><a href="?sort=total">Всего очков</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
              foreach ($arr as $k => $item) {                           
            ?>              
                <tr>
                  <td><?= $item["id"]; ?></td>
                  <td><?= $item["name"]; ?></td>
                  <td><?= $item["city"]; ?></td>
                  <td><?= $item["car"]; ?></td>
                  <td><?= $item[0]; ?></td>
                  <td><?= $item[1]; ?></td>
                  <td><?= $item[2]; ?></td>
                  <td><?= $item[3]; ?></td>
                  <td><?= $item[4]; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>

  </div>

  <script src="./jquery.js"></script>
  <script src="./sortPointer.js"></script> 

</body>
</html>