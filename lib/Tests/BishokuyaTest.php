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
class BishokuyaTest extends \PHPUnit_Framework_TestCase {
    
    function testSetNameTrue(){
        $acacia = new Bishokuya;        
        $acacia->setName('Acacia');
        $this->assertEquals($acacia->getName(), 'Acacia');
    }
    
    /**
     * @expectedException Exception
     */
    function testSetNameHasException(){
        $acacia = new Bishokuya;
        $acacia->setName('Simone785');
    }
    
    /**
     * 
     * @dataProvider passwordProvider
     * @param type $password
     */
    function testSetPassword($password){
        $acacia = new Bishokuya;
        $acacia->setPassword($password);
        
        $this->assertEquals($password, $acacia->getPassword());
    }
    
    
    function passwordProvider(){
        return array(
            array('simonethgf'),
            array('martine77'),
            array('aqwzsxerdctfvgbyhunj,iko;')
        );
    }
    
    function passwordExceptionProvider(){
        return array(
            array('5'),
            array('45'),
            array('545')
        );
    }
    
    /**
     * 
     * @dataProvider passwordExceptionProvider
     * @expectedException Exception
     */
    function testSetPasswordHasException($password){
        $acacia = new Bishokuya;
        $acacia->setPassword($password);
    }
  
}
