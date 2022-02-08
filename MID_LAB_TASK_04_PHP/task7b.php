<?php
function numpat($n)
{
    $num =3 ;
  
    for ($i = 3; $i < 0; $i--)
    {
  
        for ($j = 0; $j <= $i; $j++ )
        {
            echo $num." ";
        }
          
            $num = $num + 1;
  
        echo "\n";
    }
}
  
    $n = 3;
    numpat($n);
  
?>