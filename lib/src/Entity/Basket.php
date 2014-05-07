<?php

namespace Entity;
use Interfaces\Product;

class Basket{
    
    private $products;
    private $quantities;
    
    public function __construct() {
        $this->products = array();
        $this->quantities = array();
    }
    
    public function getProducts(){
        return $this->products;
    }
    
    public function getProduct(Product $product){
        return $this->products[$product->getId()];
    }


    public function addProduct(Product $product){
       if(array_key_exists($product->getId(), $this->products)){
           $this->quantities[$product->getId()] ++;
           
       }else{
           $this->products[$product->getId()] = $product;
           $this->quantities[$product->getId()] = 1;
       }
       
       return $this;
   }
   
    public function removeProduct(Product $product){
        if(array_key_exists($product->getId(), $this->products)){
            unset($this->products[$product->getId()]);
        }

        return $this;
    } 

    public function getQuantities(){
         return $this->quantities;
     }
    
    public function getQuantity(Product $product){
        return $this->quantities[$product->getId()];
    }
    
    public function addQuantity(Product $product, $number){
        if(array_key_exists($product->getId(), $this->products)){
            $this->quantities[$product->getId()] += $number;
        }
        
        return $this;
    }
    
    public function removeQuantity(Product $product, $number){
        if(array_key_exists($product->getId(), $this->products)){
            $this->quantities[$product->getId()] -= $number;
            
            if($this->quantities[$product->getId()] <= 0){
                $this->removeProduct($product);
            }
        }
        
        return $this;
    }
    
    public function clearBasket(){
        $this->products = array();
        $this->quantities = array();
        
        return $this;
    }
}
