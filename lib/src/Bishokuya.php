<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Acacia
 *
 * @author Administrateur
 */
class Bishokuya {
    //put your code here
    private $name;
    private $password;
    
    public function getName(){
        return $this->name;
    }
    
    /**
     * 
     * @param type $name
     * @return \Bishokuya
     * @throws Exception
     */    
    public function setName($name){
        if(!preg_match("/^[a-zA-Z\s-]+$/", $name)){
            throw new Exception('Le nom est incorrect');
        }
        
        $this->name = $name;
        return $this;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function setPassword($password){
        if(strlen($password) < 8){
            throw new Exception('Password incorrect');
        }
        
        $this->password = $password;
        return $this;
    }
}
