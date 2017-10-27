<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace KataCatalogue;

/**
 * Description of StartKataCatalogue
 *
 * @author Administrator
 */
class StartKataCatalogue {
    const KATA_CATALOGUE_NAME = 'Kata catalogue';
    //put your code here
    private $name = null;
    
    public function __construct($name = self::KATA_CATALOGUE_NAME ) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }


}
