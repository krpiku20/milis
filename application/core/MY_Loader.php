<?php

class MY_Loader extends CI_Loader {

     public function __construct() {
         parent::__construct();
         $_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
         $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    }
  
    public function template($template_name, $data = array(), $return = FALSE)
    {
        //$content  = $this->view('includes/common_include', $data, $return);
        $content  = $this->view('includes/common', $data, $return);
        $content = $this->view('includes/header', $data, $return);
        $content = $this->view($template_name, $data, $return);
        $content = $this->view('includes/footer', $data, $return);

        if ($return){
          return $content;
        }
    }
    public function common($template_name, $data = array(), $return = FALSE)
    {
        $content  = $this->view('includes/common', $data, $return);

        if ($return)
        {
            return $content;
        }
    }
   
    
   
}
?>