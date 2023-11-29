<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>my ressource</title>
</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5 " style="background-color: #00ff5573;">
    PHP CRUD Ressource  
</nav>

<div class="container">
    <?php
    if(isset($_GET['msg'])){
        $msg = $_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        '.$msg.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <div class="container d-flex justify-content-center m-1">
        <a href="index.php" class="btn btn-primary mb-5 m-1"> USERS</a>
        <a href="display1.php" class="btn btn-primary mb-5 m-1"> RESSOURCE</a>
        <a href="category.php" class="btn btn-primary mb-5 m-1"> Category </a>
    </div>
    <a href="user.php" class="btn btn-dark mb-3">Add New</a>


    <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ressourcesID</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">ressource</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "connect_db.php";
        $sql = "SELECT * FROM `ressources`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            ?>
         <tr>
      <td><?php echo $row['ressourcesID'] ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['description'] ?></td>
      <td><?php echo $row['ressource'] ?></td>
      <td>
        <a href="update1.php?ressourcesID=<?php echo $row['ressourcesID'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
        <a href="delete1.php?ressourcesID=<?php echo $row['ressourcesID'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5 "></i></a>
      </td>
    </tr>
            <?php
        }
    ?>
  </tbody>
</table>
</div>







<!-- bootstrap link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>








</body>
</html>