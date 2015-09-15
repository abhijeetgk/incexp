<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller 
 { 
   //set the class variable.
   var $template  = array();
   var $data      = array();
   //Load layout    
   
   public function layout($arr) {
    $layout=$this->layout_folder;
     // making temlate and send data to view.
      if(isset($arr['header']))  $this->template['header']   = $this->load->view($layout.'/header', $this->data, true);
      if(isset($arr['left']))    $this->template['left']   = $this->load->view($layout.'/left', $this->data, true);
      if(isset($arr['middle']))  $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
      if(isset($arr['footer']))  $this->template['footer'] = $this->load->view($layout.'/footer', $this->data, true);
     $this->load->view($layout.'/index', $this->template);
   }
}