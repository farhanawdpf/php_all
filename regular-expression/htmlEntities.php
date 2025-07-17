<?php
$str = "A 'quote' is <b>bold</b> <p>this is p tag</p>
";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);


?>