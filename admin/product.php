<?php
    include("config.php");
    $query = "SELECT * FROM product;";
    $result = mysqli_query($conn, $query);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Table</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <table class="table table-border">
            <thead>
                <tr>
                    <th>Product_ID</th>
                    <th>ProductName</th>
                    <th>category</th>
                    
              

                </tr>
            </thead>
            <tbody>
                <?php
                while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $data["prodId"]?></td>
                        <td><?php echo $data["productName"]?></td>
                        <td><?php echo $data["category"]?></td>
                        

                        <?php
                }
                
                ?>
                </tr>
            </tbody>
        </table>
    </body>
    </html>