<?php
function switch($a,$froms,$tos){
      $f = $froms;
      $t = $tos;
      $from = $a[$f];
      $temp = $a[$t];
      $a[$t] = $from;
      $a[$f] = $temp;
      return $a;
}
?>
