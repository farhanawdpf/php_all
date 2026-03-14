<form method="post">
    Enter Marks: <input type="number" name="marks">
    <input type="submit" name="submit" value="Check Grade">
</form>

<?php
if (isset($_POST['submit'])) {
    $marks = $_POST['marks'];

    if ($marks >= 80) {
        echo "Grade: A+";
    } elseif ($marks >= 70) {
        echo "Grade: A";
    } elseif ($marks >= 60) {
        echo "Grade: A-";
    } elseif ($marks >= 50) {
        echo "Grade: B";
    } elseif ($marks >= 40) {
        echo "Grade: C";
    } elseif ($marks >= 33) {
        echo "Grade: D";
    } else {
        echo "Grade: F";
    }
}
?>