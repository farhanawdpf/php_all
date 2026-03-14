<?php
$marry = array(
    array(3, 6, 4, 2,),
    array(6, 8, 7, 3,),
    array(3, 6, 4, 2,)
);

print_r($marry);

echo "<br>";
$arr = [
    ["A", "t", "r", "r", "W"],
    ["B", "C", "y", "s", "j"],
    ["3", "5", "2", '1', "7"],
];

print_r($arr);
echo "<br>";
echo $arr[1][4];
for ($row = 0; $row < 3; $row++) {
    echo "<p><b>Category - $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $arr[$row][$col] . "</li>";
    }
    echo "</ul>";
}
