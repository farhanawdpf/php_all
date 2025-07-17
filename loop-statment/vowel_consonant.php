<!DOCTYPE html>
<html>
<head>
    <title>Vowel or Consonant Checker</title>
</head>
<body>
    <h1>Vowel or Consonant Checker</h1>
    <form method="post">
        <label for="input">Enter a letter:</label>
        <input type="text" name="input">
        <button type="submit">Check</button>
    </form>
 
    <?php
    if($_POST) {
        $input = $_POST["input"];
        if (preg_match('/^[a-zA-Z]$/', $input)) {
            $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
            if (in_array($input, $vowels)) {
                echo "<p>{$input} is a vowel.</p>";
            } else {
                echo "<p>{$input} is a consonant.</p>";
            }
        } else {
            echo "<p>Please enter a single letter.</p>";
        }
    }
    ?>
 </body>
</html>