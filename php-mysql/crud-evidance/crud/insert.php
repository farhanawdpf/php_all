<?php
$db = mysqli_connect("localhost", "root", "", "batch-m70");

if (isset($_POST['btnsubmit'])) {
    $_n = $_POST['fname'];
    $_c = $_POST['contact'];
    $brand_id = $_POST['brand_id'];
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp, "uploads/" . $image);
    $q = "INSERT INTO users (name,contact,f_image,brand_id)VALUES('$_n','$_c', '$image','$brand_id')";
    if (mysqli_query($db, $q) == true) {
        header("Location:view.php");
        exit();
    } else {
        "Data is not Inserted";
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
            <h1>Student Form</h1>
            <form action="insert.php" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="fname" id="exampleFormControlInput1"
                        placeholder="name">
                </div>
                <label for="exampleFormControlInput1" class="form-label">Contact</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contact"
                    name="contact">
                <div class="mb-3">
                    <select name="brand_id">
                        <?php
                        $manufac = $db->query("select * from brand");
                        while (list($_mid, $_mname) = $manufac->fetch_row()) {
                            echo "<option value='$_mid'>$_mname</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">File Upload</label>
                    <input type="file" class="form-control" name="image" id="exampleFormControlInput1"
                        placeholder="name">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="btnsubmit">insert</button>
        </div>

        </form>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>