<?php
// id undefined
// chat 
    $id = $_POST["user_id"];
    include("config.php");
    $usersQuery = "SELECT * FROM users where id = $id";
    $userData =  mysqli_query($conn, $usersQuery);
    $users =  mysqli_fetch_array( $userData);
    $query = "SELECT * FROM user_role";
    $result = mysqli_query($conn, $query);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <form class="form w-50 mt-5  mx-auto" action="edit user.php" method="post">
        <h1 class="ms-5 ">Edit Users</h1>
        <input value="<?php echo $users["user_id"]?>" placeholder="Enter your name" type="hidden" class="form-control p-1 mt-2" name="id">
        <input value="<?php echo $users["user_name"]?>" placeholder="Enter your name" type="text" class="form-control p-1 mt-2" name="user_name">
        <input value="<?php echo $users["user_email"]?>" placeholder="Enter your email" type="email" class="form-control p-1 mt-2" name="user_email">
        <input value="<?php echo $users["user_passwordd"]?>" placeholder="Enter your password"  type="password" class="form-control p-1 mt-2" name="user_passwordd">
        <input value="<?php echo $users["user_address"]?>"  placeholder="Enter your address"  type="text" class="form-control p-1 mt-2" name="user_address">
        <input value="<?php echo $users["Phone"]?>"  placeholder="Enter your address"  type="text" class="form-control p-1 mt-2" name="Phone">

               <select name="role_id" id="" class="form-control mt-2" >
        <?php
                while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <option value="<?php echo $data["id"]?>" <?php echo $users["role_id"] == $data["id"]
                     ? "selected" : "" ?>><?php echo $data["role_name"]?></option>
                    <?php
                }
                ?>
                </select>
                <br>
                <button class="btn btn-warning" type="submit" name="submit">Submit</button>

    </form>
</body>
</html>