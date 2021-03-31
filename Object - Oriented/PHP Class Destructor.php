<?php
class TestMe 
{
 public function __construct() 
 { 
 	echo "2"; }
  public function __destruct() 
  { 
  	echo "1"; 
  	} 
 } $test = new TestMe(); 
unset($test);
?>