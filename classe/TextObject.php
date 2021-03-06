<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'Object.php';
include_once './fonction/fonctionsGenerales.php';

class TextObject implements Object
{
    public static $typeName = 'Txt';
    public static $NumName = 1;
    private $_name;
    private $_text;
    private $_size;
    private $_policy;
   
    public function __construct($text, $size, $policy='Times New Roman')
    {
        $this->_name = TextObject::$typeName . TextObject::$NumName;
        TextObject::$NumName++;
        $this->_text = $text;
        $this->_size = $size;
        $this->_policy = $policy;
       ecrirefichier(CSSFILE, $this->cssConstruct());
    }
    
    public function draw()
    {
        return '<span id="'.$this->_name.'">' . $this->_text . '</span>';
        
    }
    
    public function cssConstruct()
    {
        $ret = '#' . $this->_name . '{';
        $ret .= 'font-size: '.$this->_size.'px;';
        $ret .= 'font-family: "' . $this->_policy.'";'; 
        $ret .= '}';
        return ($ret);
    }
}

?>