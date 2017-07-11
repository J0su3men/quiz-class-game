<?php
include("controldb.php"); 
$texto="holamundo";
$qbaney = mysql_query("SELECT * FROM quimica"); 
mt_srand(time()); 
$max = mysql_num_rows($qbaney); 
$rand = mt_rand(1,$max); 
$sqldo = mysql_query("SELECT * FROM quimica WHERE ID_QUIMICA='1'"); 
 while($ban = mysql_fetch_assoc($sqldo)) { 

echo $ban['OPCION_A'];

	 
 } 


?>