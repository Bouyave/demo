<?php

namespace Interfaces;

interface Product {
    public function setId($id);
    public function getId();
    
    public function setPrice($price);
    public function getPrice();
    
    public function setLabel($label);
    public function getLabel();
}
