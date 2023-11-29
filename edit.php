<?php
include "connect_db.php";


if(isset($_POST['submit'])){

    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $userID = $_GET['userID'];

    $sql = "UPDATE `utilisateurx`SET user_name='$user_name' , email='$email' , role='$role' WHERE userID=$userID ";

    $result = mysqli_query($conn, $sql);


   if($result) {
        header("location: index.php?msg=New record created successfully ");
    }
    else{
        echo "failed: " . mysqli_error($conn);
    }
}
?>


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
    PHP ADD NEW USER 
</nav>

<div class="container">
    <div class="text-center mb-4">
        <h3>Add New User</h3>
        <p class="text-muted"> complete the form to add new user</p>
    </div>
    <div class="container d-flex justify-content-center m-1">
        <a href="index.php" class="btn btn-primary mb-5 m-1"> USERS</a>
        <a href="display1.php" class="btn btn-primary mb-5 m-1"> RESSOURCE</a>
        <a href="displayca.php" class="btn btn-primary mb-5 m-1"> Category </a>
    </div>
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
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="index.php" class="btn btn-danger"> cancel</a>
                </div>
        </form>
    </div>
</div>







<!-- bootstrap link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>








</body>
</html>