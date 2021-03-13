<!--
//2021-03-13
//www.seckin.co
//Seçkin Durası 
//https://github.com/durasi/Seckin-Wordpress-Library
-->

<?
// SQL TABLE
//		CREATE TABLE `seckin_veri_yaz` (
//	  `id` int(11) NOT NULL,
//	  `tarih` int(11) DEFAULT NULL,
//	  `ip` text,
//	  `url` text,
//	  `datarate` int(11) NOT NULL DEFAULT '0',
//	  `seconddata` text,
//	  `tp` text,
//	  `sl` text,
//	  `buysel` text,
//	  `nametitle` text,
//	  `durum` int(11) NOT NULL DEFAULT '0'
//	) ENGINE=MyISAM DEFAULT CHARSET=latin1;

?>



<?

	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));


						global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
	    foreach($wp_gelenVeri as $wp_gelenSatir): 
	     
	        $mevcut=$wp_gelenSatir->url;
	        $durum=$wp_gelenSatir->durum+1;
	    endforeach;
	else:
		echo "";
	endif;


	


	if(isset($_POST['seconddata']))
	{
		$tarih=time();
    	$ip=$_SERVER["REMOTE_ADDR"];
    	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));

    	$datarate=$_POST["datarate"];
    	$seconddata=$_POST["seconddata"];
    	$tp=$_POST["tpdata"];
    	$sl=$_POST["sldata"];
    	$buysel=$_POST["buyseltur"];
    	$nametitle=$_POST["nametitle"];

    							
			if(empty($seconddata) || empty($tp) || empty($sl) || empty($nametitle)) 
    		{
				echo "Please fill in all relevant units.";
    		}
    		else
    		{

    			if($mevcut==$url)
    			{

  							

							try{
    					global $wpdb;  

							$veriSql=$wpdb->update('seckin_veri_yaz', array('tarih'=>$tarih, 'ip'=>$ip, 'datarate'=>$datarate, 'seconddata'=>$seconddata, 'tp'=>$tp, 'sl'=>$sl, 'buysel'=>$buysel, 'nametitle'=>$nametitle, 'durum'=>$durum), array('url'=>$url));


							  $veriGir=$wpdb->query($veriSql); 
							  if($veriGir): 
							    echo "Success"; 
							  else:
							    echo "Success"; 
							  endif;
							  }catch(Exception $a){  }

				}
				else
				{
					

						try{
    					global $wpdb;  

    							

							  $veriSql=$wpdb->prepare("INSERT INTO seckin_veri_yaz SET tarih = '{$tarih}', ip='".$_SERVER["REMOTE_ADDR"]."', url = '{$url}', datarate = '{$datarate}', seconddata = '{$seconddata}', tp = '{$tp}', sl = '{$sl}', buysel = '{$buysel}', nametitle = '{$nametitle}'"); 
							  $veriGir=$wpdb->query($veriSql); 
							  if($veriGir): 
							    echo "Success"; 
							  else:
							    throw new Exception("Error!!!");
							  endif;
							  }catch(Exception $a){ echo  "Error :".$a->getMessage(); }



				}


							  	
					 
				
					
					
					
									
			}
    }
    else
    {
    	
			echo '
				<form method="POST">
					
				 		
				 		<p>Data Form</p>
				 		<input type="text" name="nametitle" required placeholder="Data Title" />
				 		<input type="text" name="seconddata" required placeholder="Second Data" />
				 		<input type="text" name="tpdata" required placeholder="TP Data" />
						<input type="text" name="sldata" required placeholder="SL Data" />
						<input type="checkbox" id="datarate" name="datarate" value="1">
	  					<label for="datarate"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male" name="buyseltur" value="buy" required>
						<label for="male">BUY</label><br>
						<input type="radio" id="female" name="buyseltur" value="sell" required>
						<label for="female">SELL</label><br><br>
		            
						<button type="submit" class="qodef-btn qodef-btn-large qodef-btn-solid" name="send" class="btn btn-lg">Save</button>
					
				</form>
			
				';	

	}  
}

?>