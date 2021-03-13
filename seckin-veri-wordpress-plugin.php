<!--
//2021-03-13
//www.seckin.co
//Seçkin Durası 
//https://github.com/durasi/Seckin-Wordpress-Library
//  seckin-veri wordpress plugin
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
//	  `durum` int(11) NOT NULL DEFAULT '0',
//	  `datarate_2` int(11) NOT NULL DEFAULT '0',
//	  `seconddata_2` text,
//	  `tp_2` text,
//	  `sl_2` text,
//	  `buysel_2` text,
//	  `nametitle_2` text,
//	  `datarate_3` int(11) NOT NULL DEFAULT '0',
//	  `seconddata_3` text,
//	  `tp_3` text,
//	  `sl_3` text,
//	  `buysel_3` text,
//	  `nametitle_3` text,
//	  `datarate_4` int(11) NOT NULL DEFAULT '0',
//	  `seconddata_4` text,
//	  `tp_4` text,
//	  `sl_4` text,
//	  `buysel_4` text,
//	  `nametitle_4` text,
//	  `datarate_5` int(11) NOT NULL DEFAULT '0',
//	  `seconddata_5` text,
//	  `tp_5` text,
//	  `sl_5` text,
//	  `buysel_5` text,
//	  `nametitle_5` text,
//	  `datarate_6` int(11) NOT NULL DEFAULT '0',
//	  `seconddata_6` text,
//	  `tp_6` text,
//	  `sl_6` text,
//	  `buysel_6` text,
//	  `nametitle_6` text
//	) ENGINE=MyISAM DEFAULT CHARSET=latin1;

?>


<?
// Create "seckin-veri" folder in "wp-content / plugins /" file path. Move this "seckin-veri-wordpress-plugin.php" file into it.
// Form will be found on the page where you paste the [seckin_veri_yaz] code.
// Code Example: [seckin_veri_yaz]

?>

<?
/*
Plugin Name: Seckin Veri
Plugin URI: https://www.seckin.co
Description: It is coded as a special plugin by Seckin.
Version: Versiyon 0.8
Author: seckin.co
Author URI: seckin.co
License: GNU
*/
error_reporting(0);
add_action("init","seckin_veri_okuyaz_shortcodes");

function seckin_veri_okuyaz_shortcodes()
{
	add_shortcode("seckin_veri_yaz", "zvash_seckin_veri_yaz");
	add_shortcode("seckin_veri_oku_url", "zvash_seckin_veri_oku_url");
	add_shortcode("seckin_veri_oku_durum", "zvash_seckin_veri_oku_durum");
	add_shortcode("seckin_veri_oku_datarate", "zvash_seckin_veri_oku_datarate");
	add_shortcode("seckin_veri_oku_seconddata", "zvash_seckin_veri_oku_seconddata");
	add_shortcode("seckin_veri_oku_tp", "zvash_seckin_veri_oku_tp");
	add_shortcode("seckin_veri_oku_sl", "zvash_seckin_veri_oku_sl");
	add_shortcode("seckin_veri_oku_buysel", "zvash_seckin_veri_oku_buysel");
	add_shortcode("seckin_veri_oku_nametitle", "zvash_seckin_veri_oku_nametitle");

	add_shortcode("seckin_veri_oku_datarate_2", "zvash_seckin_veri_oku_datarate_2");
	add_shortcode("seckin_veri_oku_seconddata_2", "zvash_seckin_veri_oku_seconddata_2");
	add_shortcode("seckin_veri_oku_tp_2", "zvash_seckin_veri_oku_tp_2");
	add_shortcode("seckin_veri_oku_sl_2", "zvash_seckin_veri_oku_sl_2");
	add_shortcode("seckin_veri_oku_buysel_2", "zvash_seckin_veri_oku_buysel_2");
	add_shortcode("seckin_veri_oku_nametitle_2", "zvash_seckin_veri_oku_nametitle_2");

	add_shortcode("seckin_veri_oku_datarate_3", "zvash_seckin_veri_oku_datarate_3");
	add_shortcode("seckin_veri_oku_seconddata_3", "zvash_seckin_veri_oku_seconddata_3");
	add_shortcode("seckin_veri_oku_tp_3", "zvash_seckin_veri_oku_tp_3");
	add_shortcode("seckin_veri_oku_sl_3", "zvash_seckin_veri_oku_sl_3");
	add_shortcode("seckin_veri_oku_buysel_3", "zvash_seckin_veri_oku_buysel_3");
	add_shortcode("seckin_veri_oku_nametitle_3", "zvash_seckin_veri_oku_nametitle_3");

	add_shortcode("seckin_veri_oku_datarate_4", "zvash_seckin_veri_oku_datarate_4");
	add_shortcode("seckin_veri_oku_seconddata_4", "zvash_seckin_veri_oku_seconddata_4");
	add_shortcode("seckin_veri_oku_tp_4", "zvash_seckin_veri_oku_tp_4");
	add_shortcode("seckin_veri_oku_sl_4", "zvash_seckin_veri_oku_sl_4");
	add_shortcode("seckin_veri_oku_buysel_4", "zvash_seckin_veri_oku_buysel_4");
	add_shortcode("seckin_veri_oku_nametitle_4", "zvash_seckin_veri_oku_nametitle_4");

	add_shortcode("seckin_veri_oku_datarate_5", "zvash_seckin_veri_oku_datarate_5");
	add_shortcode("seckin_veri_oku_seconddata_5", "zvash_seckin_veri_oku_seconddata_5");
	add_shortcode("seckin_veri_oku_tp_5", "zvash_seckin_veri_oku_tp_5");
	add_shortcode("seckin_veri_oku_sl_5", "zvash_seckin_veri_oku_sl_5");
	add_shortcode("seckin_veri_oku_buysel_5", "zvash_seckin_veri_oku_buysel_5");
	add_shortcode("seckin_veri_oku_nametitle_5", "zvash_seckin_veri_oku_nametitle_5");

	add_shortcode("seckin_veri_oku_datarate_6", "zvash_seckin_veri_oku_datarate_6");
	add_shortcode("seckin_veri_oku_seconddata_6", "zvash_seckin_veri_oku_seconddata_6");
	add_shortcode("seckin_veri_oku_tp_6", "zvash_seckin_veri_oku_tp_6");
	add_shortcode("seckin_veri_oku_sl_6", "zvash_seckin_veri_oku_sl_6");
	add_shortcode("seckin_veri_oku_buysel_6", "zvash_seckin_veri_oku_buysel_6");
	add_shortcode("seckin_veri_oku_nametitle_6", "zvash_seckin_veri_oku_nametitle_6");
}	


function zvash_seckin_veri_yaz($e,$content){
	

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


    	$datarate_2=$_POST["datarate_2"];
    	$seconddata_2=$_POST["seconddata_2"];
    	$tp_2=$_POST["tpdata_2"];
    	$sl_2=$_POST["sldata_2"];
    	$buysel_2=$_POST["buyseltur_2"];
    	$nametitle_2=$_POST["nametitle_2"];

    	$datarate_3=$_POST["datarate_3"];
    	$seconddata_3=$_POST["seconddata_3"];
    	$tp_3=$_POST["tpdata_3"];
    	$sl_3=$_POST["sldata_3"];
    	$buysel_3=$_POST["buyseltur_3"];
    	$nametitle_3=$_POST["nametitle_3"];

    	$datarate_4=$_POST["datarate_4"];
    	$seconddata_4=$_POST["seconddata_4"];
    	$tp_4=$_POST["tpdata_4"];
    	$sl_4=$_POST["sldata_4"];
    	$buysel_4=$_POST["buyseltur_4"];
    	$nametitle_4=$_POST["nametitle_4"];

    	$datarate_5=$_POST["datarate_5"];
    	$seconddata_5=$_POST["seconddata_5"];
    	$tp_5=$_POST["tpdata_5"];
    	$sl_5=$_POST["sldata_5"];
    	$buysel_5=$_POST["buyseltur_5"];
    	$nametitle_5=$_POST["nametitle_5"];

    	$datarate_6=$_POST["datarate_6"];
    	$seconddata_6=$_POST["seconddata_6"];
    	$tp_6=$_POST["tpdata_6"];
    	$sl_6=$_POST["sldata_6"];
    	$buysel_6=$_POST["buyseltur_6"];
    	$nametitle_6=$_POST["nametitle_6"];
    							
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

							$veriSql=$wpdb->update('seckin_veri_yaz', array('tarih'=>$tarih, 'ip'=>$ip, 'datarate'=>$datarate, 'seconddata'=>$seconddata, 'tp'=>$tp, 'sl'=>$sl, 'buysel'=>$buysel, 'nametitle'=>$nametitle, 'datarate_2'=>$datarate_2, 'seconddata_2'=>$seconddata_2, 'tp_2'=>$tp_2, 'sl_2'=>$sl_2, 'buysel_2'=>$buysel_2, 'nametitle_2'=>$nametitle_2, 'datarate_3'=>$datarate_3, 'seconddata_3'=>$seconddata_3, 'tp_3'=>$tp_3, 'sl_3'=>$sl_3, 'buysel_3'=>$buysel_3, 'nametitle_3'=>$nametitle_3, 'datarate_4'=>$datarate_4, 'seconddata_4'=>$seconddata_4, 'tp_4'=>$tp_4, 'sl_4'=>$sl_4, 'buysel_4'=>$buysel_4, 'nametitle_4'=>$nametitle_4, 'datarate_5'=>$datarate_5, 'seconddata_5'=>$seconddata_5, 'tp_5'=>$tp_5, 'sl_5'=>$sl_5, 'buysel_5'=>$buysel_5, 'nametitle_5'=>$nametitle_5, 'datarate_6'=>$datarate_6, 'seconddata_6'=>$seconddata_6, 'tp_6'=>$tp_6, 'sl_6'=>$sl_6, 'buysel_6'=>$buysel_6, 'nametitle_6'=>$nametitle_6, 'durum'=>$durum), array('url'=>$url));


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

    							

							  $veriSql=$wpdb->prepare("INSERT INTO seckin_veri_yaz SET tarih = '{$tarih}', ip='".$_SERVER["REMOTE_ADDR"]."', url = '{$url}', datarate = '{$datarate}', seconddata = '{$seconddata}', tp = '{$tp}', sl = '{$sl}', buysel = '{$buysel}', nametitle = '{$nametitle}', datarate_2 = '{$datarate_2}', seconddata_2 = '{$seconddata_2}', tp_2 = '{$tp_2}', sl_2 = '{$sl_2}', buysel_2 = '{$buysel_2}', nametitle_2 = '{$nametitle_2}', datarate_3 = '{$datarate_3}', seconddata_3 = '{$seconddata_3}', tp_3 = '{$tp_3}', sl_3 = '{$sl_3}', buysel_3 = '{$buysel_3}', nametitle_3 = '{$nametitle_3}', datarate_4 = '{$datarate_4}', seconddata_4 = '{$seconddata_4}', tp_4 = '{$tp_4}', sl_4 = '{$sl_4}', buysel_4 = '{$buysel_4}', nametitle_4 = '{$nametitle_4}', datarate_5 = '{$datarate_5}', seconddata_5 = '{$seconddata_5}', tp_5 = '{$tp_5}', sl_5 = '{$sl_5}', buysel_5 = '{$buysel_5}', nametitle_5 = '{$nametitle_5}', datarate_6 = '{$datarate_6}', seconddata_6 = '{$seconddata_6}', tp_6 = '{$tp_6}', sl_6 = '{$sl_6}', buysel_6 = '{$buysel_6}', nametitle_6 = '{$nametitle_6}'"); 
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
    	if(stristr($_SERVER['REQUEST_URI'],"firsat"))
		{
			echo '
				<form method="POST">
					
				 		
				 		<p>1. Data</p>
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
		else if(stristr($_SERVER['REQUEST_URI'],"data-6"))
		{
			echo '
				<form method="POST">
					
				 		
				 		<p>1. Data</p>
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

				 		<p>2. Data</p>
				 		<input type="text" name="nametitle_2" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_2" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_2" required placeholder="TP Data" />
						<input type="text" name="sldata_2" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_2" name="datarate_2" value="1">
	  					<label for="datarate_2"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male2" name="buyseltur_2" value="buy" required>
						<label for="male2">BUY</label><br>
						<input type="radio" id="female2" name="buyseltur_2" value="sell" required>
						<label for="female2">SELL</label><br><br>

						<p>3. Data</p>
				 		<input type="text" name="nametitle_3" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_3" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_3" required placeholder="TP Data" />
						<input type="text" name="sldata_3" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_3" name="datarate_3" value="1">
	  					<label for="datarate_3"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male3" name="buyseltur_3" value="buy" required>
						<label for="male3">BUY</label><br>
						<input type="radio" id="female3" name="buyseltur_3" value="sell" required>
						<label for="female3">SELL</label><br><br>

						<p>4. Data</p>
				 		<input type="text" name="nametitle_4" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_4" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_4" required placeholder="TP Data" />
						<input type="text" name="sldata_4" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_4" name="datarate_4" value="1">
	  					<label for="datarate_4"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male4" name="buyseltur_4" value="buy" required>
						<label for="male4">BUY</label><br>
						<input type="radio" id="female4" name="buyseltur_4" value="sell" required>
						<label for="female4">SELL</label><br><br>

						<p>5. Data</p>
				 		<input type="text" name="nametitle_5" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_5" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_5" required placeholder="TP Data" />
						<input type="text" name="sldata_5" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_5" name="datarate_5" value="1">
	  					<label for="datarate_5"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male5" name="buyseltur_5" value="buy" required>
						<label for="male5">BUY</label><br>
						<input type="radio" id="female5" name="buyseltur_5" value="sell" required>
						<label for="female5">SELL</label><br><br>

						<p>6. Data</p>
				 		<input type="text" name="nametitle_6" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_6" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_6" required placeholder="TP Data" />
						<input type="text" name="sldata_6" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_6" name="datarate_6" value="1">
	  					<label for="datarate_6"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male6" name="buyseltur_6" value="buy" required>
						<label for="male6">BUY</label><br>
						<input type="radio" id="female6" name="buyseltur_6" value="sell" required>
						<label for="female6">SELL</label><br><br>
		            
						<button type="submit" class="qodef-btn qodef-btn-large qodef-btn-solid" name="send" class="btn btn-lg">Save</button>
					
				</form>
			
				';
		}
		else if(stristr($_SERVER['REQUEST_URI'],"data-5"))
		{
			echo '
				<form method="POST">
					
				 		
				 		<p>1. Data</p>
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

				 		<p>2. Data</p>
				 		<input type="text" name="nametitle_2" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_2" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_2" required placeholder="TP Data" />
						<input type="text" name="sldata_2" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_2" name="datarate_2" value="1">
	  					<label for="datarate_2"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male2" name="buyseltur_2" value="buy" required>
						<label for="male2">BUY</label><br>
						<input type="radio" id="female2" name="buyseltur_2" value="sell" required>
						<label for="female2">SELL</label><br><br>

						<p>3. Data</p>
				 		<input type="text" name="nametitle_3" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_3" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_3" required placeholder="TP Data" />
						<input type="text" name="sldata_3" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_3" name="datarate_3" value="1">
	  					<label for="datarate_3"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male3" name="buyseltur_3" value="buy" required>
						<label for="male3">BUY</label><br>
						<input type="radio" id="female3" name="buyseltur_3" value="sell" required>
						<label for="female3">SELL</label><br><br>

						<p>4. Data</p>
				 		<input type="text" name="nametitle_4" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_4" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_4" required placeholder="TP Data" />
						<input type="text" name="sldata_4" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_4" name="datarate_4" value="1">
	  					<label for="datarate_4"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male4" name="buyseltur_4" value="buy" required>
						<label for="male4">BUY</label><br>
						<input type="radio" id="female4" name="buyseltur_4" value="sell" required>
						<label for="female4">SELL</label><br><br>

						<p>5. Data</p>
				 		<input type="text" name="nametitle_5" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_5" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_5" required placeholder="TP Data" />
						<input type="text" name="sldata_5" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_5" name="datarate_5" value="1">
	  					<label for="datarate_5"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male5" name="buyseltur_5" value="buy" required>
						<label for="male5">BUY</label><br>
						<input type="radio" id="female5" name="buyseltur_5" value="sell" required>
						<label for="female5">SELL</label><br><br>
		            
						<button type="submit" class="qodef-btn qodef-btn-large qodef-btn-solid" name="send" class="btn btn-lg">Save</button>
					
				</form>
			
				';
		}
		else if(stristr($_SERVER['REQUEST_URI'],"data-4"))
		{
			echo '
				<form method="POST">
					
				 		
				 		<p>1. Data</p>
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

				 		<p>2. Data</p>
				 		<input type="text" name="nametitle_2" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_2" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_2" required placeholder="TP Data" />
						<input type="text" name="sldata_2" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_2" name="datarate_2" value="1">
	  					<label for="datarate_2"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male2" name="buyseltur_2" value="buy" required>
						<label for="male2">BUY</label><br>
						<input type="radio" id="female2" name="buyseltur_2" value="sell" required>
						<label for="female2">SELL</label><br><br>

						<p>3. Data</p>
				 		<input type="text" name="nametitle_3" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_3" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_3" required placeholder="TP Data" />
						<input type="text" name="sldata_3" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_3" name="datarate_3" value="1">
	  					<label for="datarate_3"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male3" name="buyseltur_3" value="buy" required>
						<label for="male3">BUY</label><br>
						<input type="radio" id="female3" name="buyseltur_3" value="sell" required>
						<label for="female3">SELL</label><br><br>

						<p>4. Data</p>
				 		<input type="text" name="nametitle_4" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_4" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_4" required placeholder="TP Data" />
						<input type="text" name="sldata_4" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_4" name="datarate_4" value="1">
	  					<label for="datarate_4"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male4" name="buyseltur_4" value="buy" required>
						<label for="male4">BUY</label><br>
						<input type="radio" id="female4" name="buyseltur_4" value="sell" required>
						<label for="female4">SELL</label><br><br>
		            
						<button type="submit" class="qodef-btn qodef-btn-large qodef-btn-solid" name="send" class="btn btn-lg">Save</button>
					
				</form>
			
				';
		}
		else if(stristr($_SERVER['REQUEST_URI'],"data-3"))
		{
			echo '
				<form method="POST">
					
				 		
				 		<p>1. Data</p>
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

				 		<p>2. Data</p>
				 		<input type="text" name="nametitle_2" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_2" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_2" required placeholder="TP Data" />
						<input type="text" name="sldata_2" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_2" name="datarate_2" value="1">
	  					<label for="datarate_2"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male2" name="buyseltur_2" value="buy" required>
						<label for="male2">BUY</label><br>
						<input type="radio" id="female2" name="buyseltur_2" value="sell" required>
						<label for="female2">SELL</label><br><br>

						<p>3. Data</p>
				 		<input type="text" name="nametitle_3" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_3" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_3" required placeholder="TP Data" />
						<input type="text" name="sldata_3" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_3" name="datarate_3" value="1">
	  					<label for="datarate_3"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male3" name="buyseltur_3" value="buy" required>
						<label for="male3">BUY</label><br>
						<input type="radio" id="female3" name="buyseltur_3" value="sell" required>
						<label for="female3">SELL</label><br><br>
		            
						<button type="submit" class="qodef-btn qodef-btn-large qodef-btn-solid" name="send" class="btn btn-lg">Save</button>
					
				</form>
			
				';
		}
		else if(stristr($_SERVER['REQUEST_URI'],"data-2"))
		{
			echo '
				<form method="POST">
					
				 		
				 		<p>1. Data</p>
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

				 		<p>2. Data</p>
				 		<input type="text" name="nametitle_2" required placeholder="Data Title" />
				 		<input type="text" name="seconddata_2" required placeholder="Second Data" />
				 		<input type="text" name="tpdata_2" required placeholder="TP Data" />
						<input type="text" name="sldata_2" required placeholder="SL Data" />
						<input type="checkbox" id="datarate_2" name="datarate_2" value="1">
	  					<label for="datarate_2"> Check if Rate Down</label><br>
	  					<br>
	  					<input type="radio" id="male2" name="buyseltur_2" value="buy" required>
						<label for="male2">BUY</label><br>
						<input type="radio" id="female2" name="buyseltur_2" value="sell" required>
						<label for="female2">SELL</label><br><br>
		            
						<button type="submit" class="qodef-btn qodef-btn-large qodef-btn-solid" name="send" class="btn btn-lg">Save</button>
					
				</form>
			
				';
		}

	}  
}
function zvash_seckin_veri_oku_url($e_url,$content_url){
	

$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));

	global $wpdb;
$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
if(count($wp_gelenVeri)):
    foreach($wp_gelenVeri as $wp_gelenSatir): 
     
        echo $wp_gelenSatir->url;
 

    endforeach;
else:
	echo "";
endif;	
}

function zvash_seckin_veri_oku_durum($e_durum,$content_durum){
	

$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));

	global $wpdb;
$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
if(count($wp_gelenVeri)):
    foreach($wp_gelenVeri as $wp_gelenSatir): 
     
        echo $wp_gelenSatir->durum;
  
    endforeach;
else:
	echo "";
endif;
		
}







function zvash_seckin_veri_oku_datarate($e_datarate,$content_datarate){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->datarate;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_seconddata($e_seconddata,$content_seconddata){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_seconddata=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_seconddata)):
    	foreach($wp_gelenVeri_seconddata as $wp_gelenSatir_seconddata): 
     		$datarate_seconddata=$wp_gelenSatir_seconddata->datarate;
			if($datarate_seconddata>=1)
	        {
	        	echo "<b style='color:red!important;'>".$wp_gelenSatir_seconddata->seconddata."<b>";
	        }
	        else
	        {
	        	echo "<b style='color:green!important;'>".$wp_gelenSatir_seconddata->seconddata."<b>";
	        }       
    	endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_tp($e,$content){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_tp=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_tp)):
    	foreach($wp_gelenVeri_tp as $wp_gelenSatir_tp): 
     		echo "<b style='color:white!important;'>".$wp_gelenSatir_tp->tp."<b>";
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_sl($e,$content){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->sl;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_buysel($e,$content){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->buysel;
			if($wp_gelenSatir->buysel=="sell")
     		{
     			echo "<style> .buyesil{display:none!important;}</style>";	
		    }
		    else
		    {
		     	echo "<style> .sellkirmizi{display:none!important;}</style>";	
		    }
    	endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_nametitle($e_nametitle,$content_nametitle){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_nametitle=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_nametitle)):
    	foreach($wp_gelenVeri_nametitle as $wp_gelenSatir_nametitle): 
     		echo $wp_gelenSatir_nametitle->nametitle;
		endforeach;
	else:
	echo "";
	endif;
}



















function zvash_seckin_veri_oku_datarate_2($e_datarate_2,$content_datarate_2){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->datarate_2;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_seconddata_2($e_seconddata_2,$content_seconddata_2){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_seconddata=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_seconddata)):
    	foreach($wp_gelenVeri_seconddata as $wp_gelenSatir_seconddata): 
     		$datarate_seconddata=$wp_gelenSatir_seconddata->datarate_2;
			if($datarate_seconddata>=1)
	        {
	        	echo "<b style='color:red!important;'>".$wp_gelenSatir_seconddata->seconddata_2."<b>";
	        }
	        else
	        {
	        	echo "<b style='color:green!important;'>".$wp_gelenSatir_seconddata->seconddata_2."<b>";
	        }       
    	endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_tp_2($e_2,$content_2){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_tp=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_tp)):
    	foreach($wp_gelenVeri_tp as $wp_gelenSatir_tp): 
     		echo "<b style='color:white!important;'>".$wp_gelenSatir_tp->tp_2."<b>";
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_sl_2($e_2,$content_2){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->sl_2;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_buysel_2($e_2,$content_2){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->buysel_2;
			if($wp_gelenSatir->buysel_2=="sell")
     		{
     			echo "<style> .buyesil2{display:none!important;}</style>";	
		    }
		    else
		    {
		     	echo "<style> .sellkirmizi2{display:none!important;}</style>";	
		    }
    	endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_nametitle_2($e_nametitle_2,$content_nametitle_2){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_nametitle=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_nametitle)):
    	foreach($wp_gelenVeri_nametitle as $wp_gelenSatir_nametitle): 
     		echo $wp_gelenSatir_nametitle->nametitle_2;
		endforeach;
	else:
	echo "";
	endif;
}

















function zvash_seckin_veri_oku_datarate_3($e_datarate_3,$content_datarate_3){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->datarate_3;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_seconddata_3($e_seconddata_3,$content_seconddata_3){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_seconddata=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_seconddata)):
    	foreach($wp_gelenVeri_seconddata as $wp_gelenSatir_seconddata): 
     		$datarate_seconddata=$wp_gelenSatir_seconddata->datarate_3;
			if($datarate_seconddata>=1)
	        {
	        	echo "<b style='color:red!important;'>".$wp_gelenSatir_seconddata->seconddata_3."<b>";
	        }
	        else
	        {
	        	echo "<b style='color:green!important;'>".$wp_gelenSatir_seconddata->seconddata_3."<b>";
	        }       
    	endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_tp_3($e_3,$content_3){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_tp=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_tp)):
    	foreach($wp_gelenVeri_tp as $wp_gelenSatir_tp): 
     		echo "<b style='color:white!important;'>".$wp_gelenSatir_tp->tp_3."<b>";
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_sl_3($e_3,$content_3){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->sl_3;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_buysel_3($e_3,$content_3){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->buysel_3;
			if($wp_gelenSatir->buysel_3=="sell")
     		{
     			echo "<style> .buyesil3{display:none!important;}</style>";	
		    }
		    else
		    {
		     	echo "<style> .sellkirmizi3{display:none!important;}</style>";	
		    }
    	endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_nametitle_3($e_nametitle_3,$content_nametitle_3){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_nametitle=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_nametitle)):
    	foreach($wp_gelenVeri_nametitle as $wp_gelenSatir_nametitle): 
     		echo $wp_gelenSatir_nametitle->nametitle_3;
		endforeach;
	else:
	echo "";
	endif;
}
















function zvash_seckin_veri_oku_datarate_4($e_datarate_4,$content_datarate_4){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->datarate_4;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_seconddata_4($e_seconddata_4,$content_seconddata_4){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_seconddata=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_seconddata)):
    	foreach($wp_gelenVeri_seconddata as $wp_gelenSatir_seconddata): 
     		$datarate_seconddata=$wp_gelenSatir_seconddata->datarate_4;
			if($datarate_seconddata>=1)
	        {
	        	echo "<b style='color:red!important;'>".$wp_gelenSatir_seconddata->seconddata_4."<b>";
	        }
	        else
	        {
	        	echo "<b style='color:green!important;'>".$wp_gelenSatir_seconddata->seconddata_4."<b>";
	        }       
    	endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_tp_4($e_4,$content_4){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_tp=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_tp)):
    	foreach($wp_gelenVeri_tp as $wp_gelenSatir_tp): 
     		echo "<b style='color:white!important;'>".$wp_gelenSatir_tp->tp_4."<b>";
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_sl_4($e_4,$content_4){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->sl_4;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_buysel_4($e_4,$content_4){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->buysel_4;
			if($wp_gelenSatir->buysel_4=="sell")
     		{
     			echo "<style> .buyesil4{display:none!important;}</style>";	
		    }
		    else
		    {
		     	echo "<style> .sellkirmizi4{display:none!important;}</style>";	
		    }
    	endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_nametitle_4($e_nametitle_4,$content_nametitle_4){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_nametitle=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_nametitle)):
    	foreach($wp_gelenVeri_nametitle as $wp_gelenSatir_nametitle): 
     		echo $wp_gelenSatir_nametitle->nametitle_4;
		endforeach;
	else:
	echo "";
	endif;
}












function zvash_seckin_veri_oku_datarate_5($e_datarate_5,$content_datarate_5){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->datarate_5;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_seconddata_5($e_seconddata_5,$content_seconddata_5){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_seconddata=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_seconddata)):
    	foreach($wp_gelenVeri_seconddata as $wp_gelenSatir_seconddata): 
     		$datarate_seconddata=$wp_gelenSatir_seconddata->datarate_5;
			if($datarate_seconddata>=1)
	        {
	        	echo "<b style='color:red!important;'>".$wp_gelenSatir_seconddata->seconddata_5."<b>";
	        }
	        else
	        {
	        	echo "<b style='color:green!important;'>".$wp_gelenSatir_seconddata->seconddata_5."<b>";
	        }       
    	endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_tp_5($e_5,$content_5){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_tp=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_tp)):
    	foreach($wp_gelenVeri_tp as $wp_gelenSatir_tp): 
     		echo "<b style='color:white!important;'>".$wp_gelenSatir_tp->tp_5."<b>";
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_sl_5($e_5,$content_5){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->sl_5;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_buysel_5($e_5,$content_5){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->buysel_5;
			if($wp_gelenSatir->buysel_5=="sell")
     		{
     			echo "<style> .buyesil5{display:none!important;}</style>";	
		    }
		    else
		    {
		     	echo "<style> .sellkirmizi5{display:none!important;}</style>";	
		    }
    	endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_nametitle_5($e_nametitle_5,$content_nametitle_5){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_nametitle=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_nametitle)):
    	foreach($wp_gelenVeri_nametitle as $wp_gelenSatir_nametitle): 
     		echo $wp_gelenSatir_nametitle->nametitle_5;
		endforeach;
	else:
	echo "";
	endif;
}













function zvash_seckin_veri_oku_datarate_6($e_datarate_6,$content_datarate_6){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->datarate_6;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_seconddata_6($e_seconddata_6,$content_seconddata_6){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_seconddata=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_seconddata)):
    	foreach($wp_gelenVeri_seconddata as $wp_gelenSatir_seconddata): 
     		$datarate_seconddata=$wp_gelenSatir_seconddata->datarate_6;
			if($datarate_seconddata>=1)
	        {
	        	echo "<b style='color:red!important;'>".$wp_gelenSatir_seconddata->seconddata_6."<b>";
	        }
	        else
	        {
	        	echo "<b style='color:green!important;'>".$wp_gelenSatir_seconddata->seconddata_6."<b>";
	        }       
    	endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_tp_6($e_6,$content_6){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_tp=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_tp)):
    	foreach($wp_gelenVeri_tp as $wp_gelenSatir_tp): 
     		echo "<b style='color:white!important;'>".$wp_gelenSatir_tp->tp_6."<b>";
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_sl_6($e_6,$content_6){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->sl_6;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_buysel_6($e_6,$content_6){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->buysel_6;
			if($wp_gelenSatir->buysel_6=="sell")
     		{
     			echo "<style> .buyesil6{display:none!important;}</style>";	
		    }
		    else
		    {
		     	echo "<style> .sellkirmizi6{display:none!important;}</style>";	
		    }
    	endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_veri_oku_nametitle_6($e_nametitle_6,$content_nametitle_6){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri_nametitle=$wpdb->get_results("SELECT * from seckin_veri_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri_nametitle)):
    	foreach($wp_gelenVeri_nametitle as $wp_gelenSatir_nametitle): 
     		echo $wp_gelenSatir_nametitle->nametitle_6;
		endforeach;
	else:
	echo "";
	endif;
}







?>