<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'Object.php';
include_once './fonction/fonctionsGenerales.php';

class Text implements Object
{
    public static $typeName = 'Txt';
    public static $NumName = 1;
    var $_name;
    var $_text;
    var $_size;
    var $_policy;
   
    public function __construct($text, $size, $policy='Times New Roman')
    {
        $this->_name = Text::$typeName . Text::$NumName;
        Text::$NumName++;
        $this->_text = $text;
        $this->_size = $size;
        $this->_policy = $policy;
       ecrirefichier(CSSFILE, $this->cssConstruct());
    }
    
    public function draw()
    {
        echo '<span id="'.$this->_name.'">' . $this->_text . '</span>';
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