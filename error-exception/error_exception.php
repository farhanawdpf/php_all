<?php
// Definition and Usage
// The Exception() constructor is used to create an Exception object and set some of its properties.

// Syntax
// new Exception(message, code, previous)
// getMessage — Gets the Exception message


// Definition and Usage
// The getMessage() method returns a description of the error or behaviour that caused the exception to be thrown.

// Syntax
// $exception->getMessage()
// try {
//     tryStatements
//   } catch (exceptionVar) {
//     catchStatements
//   } finally {
//     finallyStatements
// }

// <?php
// try {
//     throw new Exception("Some error message");
// } catch(Exception $e) {
//     echo $e->getMessage();
// }
// 
$a = 10;


try{ 
if ($a<30){ 
 throw new Exception("valid Number"); 
}else { 
    throw new Exception("invalid Number");
}
}
catch(Exception $e){ 
    echo "Your error is:".$e->getMessage()."<br>";
}
finally{ 
    echo "This is finally done my work";
}
?>