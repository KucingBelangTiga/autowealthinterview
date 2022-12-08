<?php
  $arr = [1,2,3,4,5,6,7];

	for($k=1; $k<=3; $k++){
      if(count($arr)>=1 && count($arr)<=105){
        if(max($arr)<=(231-1) && min($arr)>=-231){
          if($k>=1 && $k<=105){
            $rotated[] = array_unshift($arr, array_pop($arr));
          }else{
            echo "number that you've been inputed for loop is higher than 105 or lower than 0";
            break;
          }
        }else{
          echo "number value in array is greater than 230 or lower than -231";
          break;
        }
      }else{
        echo "total value in this array is higher than 105 or lower than 1";
        break;
      }
    }
  print_r($arr);
?>