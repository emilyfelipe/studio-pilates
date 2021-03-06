<?php

include('PerchDB_MySQL.class.php');
include('PerchDB_MySQLi.class.php');

class PerchDB {
	
	static private $instance;
	
	static public $driver = '';

	public static function fetch()
	{	    
        if (!isset(self::$instance)) {

        	if (defined('PDO::MYSQL_ATTR_LOCAL_INFILE')) {
        		$c = 'PerchDB_MySQL';
        		PerchDB::$driver = 'PDO';
        	}else{
        		$c = 'PerchDB_MySQLi';
        		PerchDB::$driver = 'MySQLi';
        	}
            self::$instance = new $c;
        }

        return self::$instance;
	}
	
}
?>