<!DOCTYPE html>

<html lang='eng'>
<head>
   <meta charset='UTF-8'>
   <title>Document</title>
   <style>
      header {
		  
		  background: #e3e3e3;
		  padding: 2em;
		  text-align: center;
	  }
	</style>  
</head>
  <body>
     
	<header>
     
        <h1>TEST</h1>

    </header>
    
	<form action="" method="post">
        Name: <input type="text" name="name"><br>
      E-mail: <input type="text" name="email"><br>
              <input type="submit">
    </form>

	
	
	
	
	
	<?php var_dump($input) ?>
	<?php Execute::dd(Reg::get('config')) ?>
	
  
  </body>
</html>
