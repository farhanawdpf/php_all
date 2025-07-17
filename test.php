<?php

$he = 'Bob';
$she = 'Alice';

$text = <<<TEXT
$he said "PHP is awesome".
"Of course" $she agreed.".'fgdg'
TEXT;

echo $text;

$str = <<<'IDENTIFIER'
place a "string" here
it can span multiple lines
and include single quote ' and double quotes "
IDENTIFIER;
echo $str;