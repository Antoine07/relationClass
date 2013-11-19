<?php
/**
 *  Une association est dite permanent lorsque l'utilisation d'une méthode de la classe B dans A par exemple est obligatoire
 */

class A{
    
    public function __construct(B $b){
        $b->methodB(); // utilisation permanente
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
