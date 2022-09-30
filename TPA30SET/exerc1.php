<?php
/*
$i = 1;

while($i != 37){
    
    echo $v = random_int(0, 50);
    echo " ";
    $i++;
    if ($v == 37) {
        break;
    }
}

*/

while(true){
    
    $v = random_int(0, 50);
    if ($v == 37) {
        echo $v;
        break;
    }
    echo $v . " ";
}


?>