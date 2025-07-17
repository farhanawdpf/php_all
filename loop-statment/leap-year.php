<?php 
// Input value of year
$year = 2020; // Replace 2020 with the desired year to check

// Check if the year is a leap year
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}
?>