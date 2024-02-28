<?php 

function Tree($array, $depth = 0){
    $FINAL = " └ ";
    $ENTRY = " ├ ";
    $SKIP = " │ ";
    $KEY = ": ";
    $output = "";

    if (is_array($array)){
        $final = count($array) - 1;
        $current = 0;

        foreach($array as $k => $v){
            for ($i = 0; $i <= $depth; $i++){
                if ($i != $depth){
                    $output .= $SKIP;
                }
                else {
                    if ($current == $final){
                        $output .= $FINAL;
                    } else {
                        $output .= $ENTRY;
                        $current += 1;
                    }
                }
            }

            if (is_array($v)){
                $output .= $k . $KEY . PHP_EOL . Tree($v, $depth + 1);
            } else {
                $output .= $k . $KEY . $v . PHP_EOL;
            }
        }
    } else {
        $output = $array;
    }

    return $output;
}

?>

