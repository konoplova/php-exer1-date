<?php
$items = array(3,5,15,3,2,6,7,50,1,4,5,2,100,9,3,2,6,7,13,18);


function bubbleSort ($items) {
$length = count($items);

     for ($i=0; $i<$length-1; $i++) {
          for ($j=$length-1; $j>$i; $j--) {
               if ($items[$j] < $items[$j-1]) {
                   $tmp = $items[$j];
                   $items[$j] = $items[$j-1];
                   $items[$j-1] = $tmp;

               }
          }
     }
     return $items;
 }

 var_export(bubbleSort($items));
