<?php
$db = mysqli_connect("localhost", "root", "", "batch-m70");

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $q = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($db, $q);

    $row = mysqli_fetch_assoc($result);

    // if ($row) {
    //     echo "<h2>User Details</h2>";
    //     echo "ID: " . $row['id'] . "<br>";
    //     echo "Name: " . $row['name'] . "<br>";
    //     echo "Contact: " . $row['contact'] . "<br>";
    //     echo "<div><img src='uploads/" . $row['f_image'] . "' width='120'></div>";
    // } else {
    //     echo "User not found!";
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div>
        <a href="view.php">

            <button type="button" class="btn btn-success">view all</button>
        </a>
    </div>
    <div class="card" style="width: 18rem; margin:50px auto;">
        <img src="uploads/<?php echo $row['f_image']; ?>" class="card-img-top">
        <div class="card-body text-center">
            <h5 class="card-title"><?php echo $row['name']; ?></h5>
            <p class="card-text">Contact: <?php echo $row['contact']; ?></p>
            <p class="card-text">ID: <?php echo $row['id']; ?></p>
        </div>
    </div>
</body>

</html>