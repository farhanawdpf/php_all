<?php
$conn = mysqli_connect("localhost", "root", "", "procidure_db");

if (isset($_POST['btnsubmit'])) {
    $name = $_POST['mname'];
    $addrss = $_POST['maddress'];
    $cont = $_POST['mcontact'];

    $result = $conn->query("call add_manuf('$name','$addrss','$cont')");
}

if (isset($_POST['btnsubmitproduct'])) {
    $n = $_POST['pname'];
    $p = $_POST['price'];
    $m_id = $_POST['manuf'];

    $r = $conn->query("call add_product('$n','$p','$m_id')");
}


if (isset($_POST['btndelete'])) {

    $m_id = $_POST['manuf'];

    $t = $conn->query("delete from manufacturers where id='$m_id'");
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <fieldset>
        <h2>Manufacturer form</h2>
        <form action="#" method="post">
            Name: <br>
            <input type="text" name="mname"><br>
            address: <br>
            <input type="text" name="maddress"><br>
            Contact: <br>
            <input type="text" name="mcontact"><br><br>
            <input type="submit" name="btnsubmit" value="submit manufacture">

        </form>
    </fieldset>

    <fieldset>
        <h2>Product form</h2>
        <form action="#" method="post">
            Name: <br>
            <input type="text" name="pname"><br>
            Price: <br>
            <input type="text" name="price"><br>
            Manufacturer: <br>
            <select name="manuf">
                <?php
                $manu = $conn->query("select * from manufacturers");
                while (list($id, $n) = $manu->fetch_row()) {
                    echo "<option value='$id'>$n</option>";
                }
                ?>
            </select>
            <br><br>
            <input type="submit" name="btnsubmitproduct" value="submit product">

        </form>
    </fieldset>

    <fieldset>
        <h2>After tigger</h2>
        <form action="#" method="post">
            Manufacturer: <br>
            <select name="manuf">
                <?php
                $manu = $conn->query("select * from manufacturers");
                while (list($id, $n) = $manu->fetch_row()) {
                    echo "<option value='$id'>$n</option>";
                }
                ?>
            </select>
            <br><br>
            <input type="submit" name="btndelete" value="Delete">

        </form>
    </fieldset>


    <fieldset>
        <h1>Show Product Info</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>product Name</th>
                <th>Price</th>
                <th>Manufacturer Name</th>
                <th>contact</th>
            </tr>


            <?php
            $manu = $conn->query("select * from show_product");
            while (list($id, $n, $mn, $p, $c) = $manu->fetch_row()) {
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$n</td>";
                echo "<td>$mn</td>";
                echo "<td>$p</td>";
                echo "<td>$c</td>";
                echo "</tr>";
            }
            ?>

        </table>
    </fieldset>
</body>

</html>