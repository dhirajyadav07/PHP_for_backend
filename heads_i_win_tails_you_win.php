<?php 
$count_head=0;
$count_tail=0;
for($i=1;$i<=100;$i++){
$rand_no=rand(1,2);
if($rand_no==1)
  $count_head =$count_head +1;
if($rand_no==2) 
   $count_tail =$count_tail + 1;
}

if($count_head>$count_tail)
echo "I win with score $count_head";
elseif($count_head==$count_tail)
echo "match tie with equal score of  $count_head";
else
echo " you win with score of $count_tail";
?>