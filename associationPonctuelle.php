<?php
// L'association ponctuelle est l'utilisation d'une méthode B de la classe B dans une méthode A 
class A{
    
    public function useB(B $b){
        $b->methodB();// association utilisation d'une méthode de B ponctuel
    }
    
    public function baz(){
        
    }

}

class B{
    public function methodB(){
        echo "hello B";
    }
}

?>
