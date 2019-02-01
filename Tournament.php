<?php
  function play($arr){
    $array_size = count($arr);
    if($array_size <= 1){
      return 'Tournamnet Cancelled';
    }
    $names = array();
    $n = $array_size;

    foreach($arr as $key=>$value){
      if($value != 'P' && $value != 'R' && $value != 'S'){
        return 'Tournamnet Invalid';
      }
      array_push($names,$key);
    }
    while($n > 1){
      $sz = 0;
      for($i = 0 ; $i < $n ; $i+=2){
        if($i+1 == $n){
          $names[$sz++] = $names[$i];
        } else if($arr[$names[$i]] == $arr[$names[$i+1]]){
          $names[$sz++] = $names[$i];
        } else if($arr[$names[$i]] == 'R'){
          if($arr[$names[$i+1]] == 'P'){
            $names[$sz++] = $names[$i+1];
          } else{
            $names[$sz++] = $names[$i];
          }
        } else if($arr[$names[$i]] == 'P'){
          if($arr[$names[$i+1]] == 'S'){
            $names[$sz++] = $names[$i+1];
          } else{
            $names[$sz++] = $names[$i];
          }
        } else if($arr[$names[$i]] == 'S'){
          if($arr[$names[$i+1]] == 'R'){
            $names[$sz++] = $names[$i+1];
          } else{
            $names[$sz++] = $names[$i];
          }
        }
      }
      if($sz == 1){
        return $names[0];
      }
      $n = $sz;
    }
  }
?>