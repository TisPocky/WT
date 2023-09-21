<?php
   $str="Hello";
   $pattern="/l/i";
   echo preg_match($pattern,$str);
   echo preg_match_all($pattern,$str);
   echo preg_replace($pattern,"World",$str);
?>