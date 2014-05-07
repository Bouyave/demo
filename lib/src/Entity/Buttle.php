<?php

namespace Entity;
use Interfaces\Product;

class Buttle implements Product{
    
    private $id;
    private $label;
    private $price;
    
    public function __construct() {
        $this->id = null;
        $label = '';
        $price = 0;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;        
        return $this;
    }
    
    public function getLabel() {
        return $this->label;
    }
    
    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }
    
    public function getPrice() {
        return $this->price;
    }
    
    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }
}
