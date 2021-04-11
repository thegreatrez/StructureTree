<?php 

function Tree($array,$depth = 0){
     $FINAL = " └ ";
     $ENTRY = " ├ " ;
     $SKIP = " ┊ ";
     $KEY = ": ";
     $output = "";
     if (is_array($array)){
         $final = count($array) -1;
         $current = 0;
         foreach($array as $k=>$v){
             foreach(range(0,$depth) as $i){
                  if (!$depth == $i){
                      $output .= $SKIP;
                  }
               }
                  if ($current == $final){
                      $output .= $FINAL;
                  }else{
                      $output .= $ENTRY;
                       $current +=1;
                  }
                  if (is_array($v)){
                      $output = $output . $k .$KEY. PHP_EOL . Tree($v, $depth +1 );
                  }else{
                      $output = $output . $k .$KEY. Tree($v, $depth +1 ).PHP_EOL;
                  }
            }   
         }else{
          $output = $array;
     }
   return $output;
}

?>
