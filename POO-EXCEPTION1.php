<?php

function divide ($a,$b){
    if($b==0)
        throw new Exception("Division by zero !!!");

        echo"$a / $b=".$a/$b ;

}
try {
    divide(10, 2);
    echo"<br>";
    divide(7, 0);
}
catch (Exception $e)
{
    echo$e->getMessage();
}
