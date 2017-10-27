<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KataCatalogue;

//include "..".DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."StartKataCatalogue.php";

//include ".".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."StartKataCatalogue.php";
//include '..\src\StartKataCatalogue.php';
//include '../src/StartKataCatalogue.php';
//include 'src/StartKataCatalogue.php'; // ok
include 'src\StartKataCatalogue.php';
use PHPUnit\Framework\TestCase;
//use KataCatalogue\StartKataCatalogue;
//use KataCatalogue\StartKataCatalogue;
/**
 * Description of StartKataCatalogueTest
 *
 * @author Administrator
 */
class StartKataCatalogueTest extends TestCase{
    //put your code here
    /**
     * Nome function inizia per test
     * eseguito da linea di comando..
     * 
     * in windows
     * Pattern AAT
     */
    public function testItWorks(){
//        $this->assertTrue(true);
//        echo 'pippo';
//        die;
        //ARRANGE
        $skc = new StartKataCatalogue();        
        //ACT
        $name = $skc->getName();
//        print_r($name);
//        die;
        //TEST
        $this->assertEquals($name, StartKataCatalogue::KATA_CATALOGUE_NAME);
        
    }
}
