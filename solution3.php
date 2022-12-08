<?php
  $arr = [1,2,3,4,5,6,7];

	for($k=1; $k<=3; $k++){
      if(count($arr)>=1 && count($arr)<=105 && max($arr)<=(231-1) && min($arr)>=-231 && $k>=1 && $k<=105){
            $rotated[] = array_unshift($arr, array_pop($arr));
      }
	}
  print_r($arr);
  
?>