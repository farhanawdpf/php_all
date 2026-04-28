<?php
$db = mysqli_connect("localhost", "root", "", "batch-m70");

if (isset($_GET['viedt'])) {
    $deleteid = $_GET['viedt'];

    $sql = "DELETE FROM  users WHERE id = $deleteid";
    if (mysqli_query($db, $sql) == TRUE) {
        header('location:view.php');
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <a href="insert.php">

                <button type="button" class="btn btn-success">insert</button>
            </a>
            <h1>Desplay Student Info</h1>
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                <?php
                $u = $db->query(" select * from users");
                while (list($_id, $n, $c, $img) = $u->fetch_row()) {
                    echo "<tr>

                    <td>$_id</td>
                    <td>$n</td>
                    <td>$c</td>
                     <td><img src='uploads/$img' width='80'></td>
                    <td>
                    <span class='btn btn-danger'>
                         <a href='view.php?viedt=$_id' class='text-white text-decoration-none'>Delete</a>
                    </span>

                     <span class='btn btn-info'>
                         <a href='edit.php?id=$_id' class='text-white text-decoration-none'>Edit</a>
                    </span>

                     <span class='btn btn-secondary'>
                     
                         <a href='single_view.php?id=$_id' class='text-white text-decoration-none'>View</a>
                    </span>
                    
                    </td>

                </tr>";
                }

                ?>
            </table>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>