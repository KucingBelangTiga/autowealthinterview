<?php

  function rightRotation($numbers, $many){
    for($k=0; $k < $many; $k++){
      if(count($numbers)>=1 && count($numbers)<=105){
        if(max($numbers)<=(231-1) && min($numbers)>=-231){
          if($many>=1 && $many<=105){
            $rotated[] = array_unshift($numbers, array_pop($numbers));
            return $numbers;
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
  }

	$arr = [1,2,3,4,5,6,7];
  $result = rightRotation($arr, 1000);
  print_r($result);
  
?>