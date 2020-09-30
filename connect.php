<?php 
/*
 * Created on 03-Jan-2014
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
try {
     //Production connection string
    
    /* $hostname = "localhost";
     $dbname = "machi7lu_crm";
     $username = "machi7lu";
     $pw = "+x0j3z2+8e_9C9nE";*/
    
    
    //Development connection string
  //   session_start();
   //date_default_timezone_set('Asia/Calcutta');
   
     //$hostname = "192.168.1.33";
    $hostname = "localhost";
    $dbname = "trivia_db";
   //  $dbname = "machinemachandump";
       // $dbname = "bpscrm22";
    $username = "root";
    $pw = ""; 
    $conn = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$pw");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
}

function printExp($e){
	echo "SQL Error:- " . $e->getMessage() . " at Line ".$e->getLine()." \n";
}

function closeConn($conn, $queries){
	if(isset($conn)){
		unset($conn);
	}
	
	for($x=0; $x<count($queries); $x++){
		if(isset($queries[$x])){
			unset($queries[$x]);
		}
	}
}

?>
