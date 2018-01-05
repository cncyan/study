<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/4 0004
 * Time: 20:32
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Loader extends CI_Loader{
    protected $_theme='default/';
    public function switch_themes_on(){
        $this->_ci_view_paths=array(FCPATH.THEMES_DIR.$this->_theme=> TRUE);
    }
    public function switch_themes_off(){

    }
}