<?php

// interface 
interface iProduct{
    public function getPrice();
    public function getName();
    public function setPrice($price);
}

class Book implements iProduct{
    public function getPrice(){
        // du code
    }
    public function getName(){
        // du code
    }
    public function setPrice($price){
        // du code
    }
    // ...more code
}

class Car implements iProduct{
    public function getPrice(){
        // du code
    }
    public function getName(){
        // du code
    }
    public function setPrice($price){
        // du code
    }
    
    // ... more code
}

?>
