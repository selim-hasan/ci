<?php

/**
 * Description of hello
 *
 * @author SOJIB
 */
class Hello extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        echo 'this is my home page';
    }

        public function show () {
        echo 'Hello World';
        
    }
    public function test(){
        $this->load->view('message');
    }
}
