<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <title>Docker | PHP | Node</title>
  </head>

  <body>
    <?php
  $res = file_get_contents('http://node-container:3000/products');
  $products = json_decode($res)
  ?>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>name</th>
            <th>price</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($products as $product) : ?>
          <tr>
            <td><?= $product->name; ?></td>
            <td><?= $product->price; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
