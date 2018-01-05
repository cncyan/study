<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/4 0004
 * Time: 19:01
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Hello extends CI_Controller{
    public function index(){
        $data['title']='cyan';
        $data['content']='ok,you are big';
        $this->load->view('hello.html',$data);
    }
}