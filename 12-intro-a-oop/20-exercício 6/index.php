<?php 

class Cachorro {
    
    public $patas;
    public $olhos; 
    public $raca; 


    function __construct($patas, $olhos, $raca){
        $this->patas=$patas; 
        $this->olhos=$olhos; 
        $this->raca=$raca; 
}


}

$pitbull = new Cachorro(4, 2, "pitbull");

echo"O cachorro é da raça $pitbull->raca e tem $pitbull->patas patas e também possui $pitbull->olhos olhos <br>"; 


