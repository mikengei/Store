<?php

class Template {
   private $vars = array();

 
   public function assign($myvars){
    //take array
      $this->vars=$myvars;
      var_dump($this->vars);
      
      foreach($a as $key => $value) {
          # code...
          echo $key;
      }
   }


//Ouput file contents
   public function render($template_name){

      //get path
        $path=$template_name .'.tpl.php';

        //check if file exists
        if(file_exists($path)){
           $contents =file_get_contents($path);
           
           //for each elements in arrary var
             //replace key with value 
             //print_r($this->vars);
           foreach($this->vars as $key => $value) {
               $contents = preg_replace('/\[' .$key. '\]/', $value, $contents);   
           }
          //echo would work for html only
            //eval allows php
           eval('?>'.$contents.'<?php');

        }else{
            exit('Error file not found');
        }
   }

   //function that will 
}

?>