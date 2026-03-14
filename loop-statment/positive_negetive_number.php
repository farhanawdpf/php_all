<form method="post">
    Enter Number: <input type="number" name="num">
    <input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];

    if ($num > 0) {
        echo "Positive Number";
    } elseif ($num < 0) {
        echo "Negative Number";
    } else {
        echo "Number is Zero";
    }
}
?>







<!-- <form method="post">
    <input type="text" name="numbers">
    <input type="submit" name="submit" value="Check">
</form>

<?php
// if (isset($_POST['submit'])) {
//     $input = $_POST['numbers'];

//     $n = explode(",", $input);
//     //explode () string converted to array
//     foreach ($n as $num) {
//         if ($num > 0) {
//             echo $num . " is Positive <br>";
//         } elseif ($num < 0) {
//             echo $num . " is Negative <br>";
//         } else {
//             echo $num . " is Zero <br>";
//         }
//     }
// }
?>