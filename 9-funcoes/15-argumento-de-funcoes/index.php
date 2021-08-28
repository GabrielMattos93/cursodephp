<?php 

function soma($a, $b) {

    print_r(func_get_args());
   
   echo func_num_args() . "<br>";   // Informa os argumentos passados na função

return $a + $b; 

}

soma(2, 4); 