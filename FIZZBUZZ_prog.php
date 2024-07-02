<?php
for($i=1;$i<=100;$i++){
    if($i%3==0)
      echo "FIZZ ";
    elseif($i%5==0)
      echo "BUZZ ";
    elseif(($i%3==0) && ($i%5==0))
      echo "FIZZ BUZZ ";
    else
        echo $i ." " ;
    
}


?>