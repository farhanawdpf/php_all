<?php
$db = mysqli_connect("localhost", "root", "", "batch-m70");

if (isset($_GET['viedt'])) {
    $deleteid = $_GET['viedt'];

    $sql = "DELETE FROM  users WHERE id = $deleteid";
    if (mysqli_query($db, $sql) == TRUE) {
        header('location:view.php');
    }
}

// $con_table = $db->query("select i.id, i.barcode,i.name,t.name,u.name,c.name,i.manufacturer,i.description,i.photo from item i,item_category c,item_type t,item_uom u where c.id=i.category_id and t.id=i.type_id and u.id=i.uom_id order by i.id desc");

// echo "<table class='table'>";
// echo "<tr><th>Id</th><th>Barcode</th><th>Name</th><th>Type</th><th>UoM</th><th>Category</th><th>Manufacturer</th><th>Description</th></tr>";

// while (list($id, $barcode, $item_name, $type, $uom, $category, $mfg, $desc, $photo) = $con_table->fetch_row()) {

//     //$added_on=date("d M Y h:i A",strtotime($added_on));


//     echo "<tr><td>$id</td><td>$barcode</td><td>$item_name</td><td>$type</td><td>$uom</td><td>$category</td><td>$mfg</td><td>$desc</td><td><img src='img/$photo' height='50' /></td></tr>";
// }

// echo "</table>";

//         $sql = "SELECT products.*, brand.name AS brand_name 
// FROM products 
// JOIN brand ON products.brand_id = brand.id";

//         $result = mysqli_query($conn, $sql);

//         while ($row = mysqli_fetch_assoc($result)) {
//             echo $row['name'] . " - " . $row['price'] . " - " . $row['brand_name'];
//             echo "<br><img src='uploads/" . $row['product_image'] . "' width='100'><br>";
//         }

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
                    <th>brand id</th>
                    <th>Action</th>
                </tr>
                <?php
                $u = $db->query(" select * from users");
                while (list($_id, $n, $c, $img, $i) = $u->fetch_row()) {
                    echo "<tr>

                    <td>$_id</td>
                    <td>$n</td>
                    <td>$c</td>
                    <td><img src='uploads/$img' width='80'></td>
                    <td>$i</td>
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