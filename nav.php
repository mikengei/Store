<?php

/**
 * COde behind
 */

 //instance of template class
$mynav =new Template;

//Assign variables
$mynav->assign(
  'navigation',
  '<a>home</a>' 
);

//render output
$mynav->render('nav');


?>