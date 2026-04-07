<?php
// /pattern/mpdifier(i-case-insensative)
// preg_match_all
$str = "This Is regular exprsion";
$pattern = "/i/i";
echo preg_match_all($pattern, $str);
echo preg_match($pattern, $str); //return 1
echo "<br>";
$data = "We have a plan";
$p = "/plan/i";
echo preg_replace($p, "idea", $data);
