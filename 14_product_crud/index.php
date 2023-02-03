<?php
$servername = "localhost";
$username = "haseeb";
$password = "Password123#@!";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=products_crud", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
 $statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
 $statement->execute();
 $products = $statement->fetchAll(PDO::FETCH_ASSOC);

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>products crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
</head>
  <body>
    <h1>products crud</h1>
    <p>
        <a href="create.php" class="btn btn-success"> create product </a>
    </p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($products as $i=> $product): ?>

<tr>
    <th scope="row"><?php echo $i + 1 ?></th>
    <td></td>
    <td><?php echo $product['title'] ?></td>
    <td><?php echo $product['price'] ?></td>
    <td><?php echo $product['create_date'] ?></td>
    <td>
    <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
    <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
    </td>
</tr>

<?php endforeach; ?>
  </tbody>
</table>
  </body>
</html>