<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Text
{
    public static $typeName = 'Txt';
    public static $NumName = 1;
    var $_name;
    var $_text;
    var $_size;
    var $_policy;
   
    public function __construct($text, $size, $policy='time')
    {
        $this->_name = Text::$typeName & Text::$NumName;
        
        $this->_text = $text;
        $this->_size = $size;
        $this->_policy = $policy;
    }
    
    public function draw()
    {
        echo $this->_text;
    }
}

?>