<?php
class Math
{
    const pi = 3.14;    
    function constant()
    {
      echo self::pi;
    }
    
}
$math = new Math();
$math->constant();

?>
