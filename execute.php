<?php
  
  class Execute
  
  
  {
  
  public function  dd($data){
	  
	  echo '<pre>';
	  
	  die(var_dump($data));
	  
	  echo '</pre>';
	  
	  
  }
  
  // $parameters - pass an array of $_POST inputs
  public function insert($table, $parameters){
	  
	  $insert = sprintf(
   
            'insert into %s (%s) values (%s)',
            $table, 
			implode(',', array_keys($parameters)), //column names
			
			':'.implode(',:', array_keys($parameters)) //plaseholders
         );
		 
	return $insert;	 
  }
  
  }
  
  
  