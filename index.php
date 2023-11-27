<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>my projet crud</title>
</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5 " style="background-color: #00ff5573;">
    PHP Complete CRUD Application  
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
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADD NEW
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">add new user</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width: 300px">
            <div class="row">
                <div class="col">
                    <label class="form-label">user_name </label>
                    <input type="text" class="form-control" name="user_name"
                    placeholder="khalid">
                </div>

                <div class="col">
                    <label class="form-label">email </label>
                    <input type="text" class="form-control" name="email"
                    placeholder="khalid@domaine.com">
                </div>
            </div>
                <div class="form-group mb-3"> 
                    <label> role :</label> &nbsp;
                    <input type="radio" class="form-check-input" name="role"
                    id="user" value="user" >
                    <label for="user" class="form-input-label"> user</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="role"
                    id="admin" value="admin" >
                    <label for="admin" class="form-input-label"> admin</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">save</button>
                    <a href="index.php" class="btn btn-danger"> cancel</a>
                </div>
        </form>
    </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    <table class="table table-hover text-center mt-5">
  <thead class="table-dark">
    <tr>
      <th scope="col">userID</th>
      <th scope="col">user_name</th>
      <th scope="col">email</th>
      <th scope="col">role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "connect_db.php";
        $sql = "SELECT * FROM `utilisateurx`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            ?>
         <tr>
      <td><?php echo $row['userID'] ?></td>
      <td><?php echo $row['user_name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['role'] ?></td>
      <td>
        <a href="edit.php?userID=<?php echo $row['userID'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
        <a href="delete.php?userID=<?php echo $row['userID'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5 "></i></a>
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