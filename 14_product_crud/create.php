<?php
$servername = "localhost";
$username = "haseeb";
$password = "Password123#@!";

if ($SERVER['REQUEST_METHOD'] === 'POST'){

$title = $_POST ['title'];
$description = $_POST ['description'];
$price = $_POST ['price'];
$date = date('y-m-d H:i:s');
try {
  $pdo = new PDO("mysql:host=$servername;dbname=products_crud", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
            VALUES (:title, :image, :description, :price, :date) ");
            $statement->bindValue(':title', $title);
            $statement->bindValue(':image', '');
            $statement->bindValue(':description', $description);
            $statement->bindValue(':price', $price);
            $statement->bindValue(':date', $date);
            $statement->execute();
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

}

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
    <h1>create new product</h1>
    <form action ="" method ="post">
  <div class="mb-3">
    <label class="form-label">Image</label>
    <br>
    <input type="file" name ="Image">
  </div>
  <div class="mb-3">
    <label class="form-label">Product Title</label>
    <input type="text" class="form-control" name ="title">
  </div>
  <div class="mb-3">
    <label class="form-label">Product description</label>
    <textarea class="form-control" name="description"></textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Price </label>
    <input type="number" step=".01" name="price" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </body>
</html>