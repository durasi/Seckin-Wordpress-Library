<!--
//2021-03-13
//www.seckin.co
//Seçkin Durası 
//https://github.com/durasi/Seckin-Wordpress-Library
-->

<?
	$datenow=time();
    $ip=$_SERVER["REMOTE_ADDR"];
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	try{
		global $wpdb;  
		$sql=$wpdb->update('seckin', array('datenow'=>$datenow, 'ip'=>$ip), array('url'=>$url));
		$sqldata=$wpdb->query($sql); 
		if($sqldata):
			echo "Success.";
			else:
			throw new Exception("Erorr!!!");
			endif;
		}catch(Exception $a){ echo  "Erorr :".$a->getMessage(); }
?>