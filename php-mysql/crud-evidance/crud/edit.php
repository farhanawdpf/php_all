<?php
$db = mysqli_connect("localhost", "root", "", "crud-php70");
if ($_GET['id']) {
    $id = $_GET['id'];

    $qury = "SELECT * from users where id ='$id'";
    $result = mysqli_query($db, $qury);
    $datas = mysqli_fetch_assoc($result);
    // database table field
    $uid = $datas['id'];
    $n = $datas['name'];
    $c = $datas['contact'];
}

if (isset($_POST['btnupdate'])) {
    $id = $_POST['id'];
    $unam = $_POST['fname'];
    $uc = $_POST['contact'];
    $query = "UPDATE users SET name='$unam', contact='$uc' where id='$id'";
    if (mysqli_query($db, $query) == TRUE) {
        echo "Update Successfully";
        header("Location:view.php");
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
            <h1>Student Update Form</h1>
            <form action="#" method="post">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="fname" value="<?php echo $n ?>">
                </div>
                <label for="exampleFormControlInput1" class="form-label">Contact</label>
                <input type="text" class="form-control" value="<?php echo $c ?>" name="contact">
                <input type="text" class="form-control" value="<?php echo $uid ?>" name="id" hidden>
                <br>
                <button type="submit" class="btn btn-primary" name="btnupdate">Update</button>
        </div>

        </form>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>