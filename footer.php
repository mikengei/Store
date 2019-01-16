<?php
/**
 * Code behind for the footer 
 */

 //instance of template class
 $myfooter =new Template;

$footer_vars=array(
    'name'  => 'michael',
    'email' => 'michaelnge@gmail.com'
);

 //Assign variables
 $myfooter->assign($footer_vars);
 
 //render output
 $myfooter->render('footer');
 
?>