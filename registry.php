<?php

class Reg
{
  protected static $registry = [];
	
	public static function set($key, $value)
	{
	
	     self::$registry[$key]=$value;
	     
	}
    

    public static function get($key)
	{
	  if (! array_key_exists($key, self::$registry)){
	     throw new Exeption("No {$key} is found");
		}
		
	   return self::$registry[$key];	
	
	}



}