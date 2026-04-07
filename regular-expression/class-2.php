<?php
// preg_match_all();
requrment:
$phone = "01912345678";
$p = "/^01[3-9][0-9]{8}$/";
echo preg_match($p, $phone);

//mail validation
$mail = "farhan-lucky@gmail.com";
$p = "/^[a-zA-Z0-9._+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
echo preg_match($p, $mail);



// Explanation of the regex:
// ^ → Start of the string
// [a-zA-Z0-9._%+-]+ → The username part: can contain letters, numbers, dots, underscores, percent, plus, minus. The + means at least one character.
// @ → The literal @ symbol
// [a-zA-Z0-9.-]+ → The domain name part: letters, numbers, dots, and hyphens
// \. → A literal dot before the TLD
// [a-zA-Z]{2,} → The top-level domain (TLD): at least 2 letters
// $ → End of the string