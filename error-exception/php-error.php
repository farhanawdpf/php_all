<h1>
<pre> 
Types of PHP Errors
There are primarily four types of errors in PHP - 

1.Fatal run-time errors
2.Warning errors
3.Parse errors (Syntax errors)
4.Notice errors
</pre>
</h1>


<?php 
//perse error(syntax error) and fatal error(programming error),E_NOTICE(Run-time notices. The script found something that might be an error, but could also happen when running a script normally(variable not generate))

// function info(){ 
//  echo "done";
// }

// echo info();

// tomorrow someone adds this
// function show(){ 
//     return "hello";
// }
// echo "hi"//Parse error: syntax error
// echo show();//Fatal error:

// include('header.php');//warring
        if(isset($n)){ 
            return $a=$n+2;
        }else{ 
            trigger_error('$n is notice error');//notice error
        }

?>