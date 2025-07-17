<?php
// Function to determine the grade based on the score
function getGrade($score) {
    $grade = ""; // Initialize the grade variable

    // Use conditional statements to determine the grade
    if ($score >= 90) {
        $grade = "A";
    } elseif ($score >= 80) {
        $grade = "B";
    } elseif ($score >= 70) {
        $grade = "C";
    } elseif ($score >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    return $grade; // Return the grade
}

// Input score
$score = 90;

// Call the function to determine the grade
$result = getGrade($score);

// Display the result
echo "The grade for a score of $score is: $result";
?>
