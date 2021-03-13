<!--
//2021-03-13
//www.seckin.co
//Seçkin Durası 
//https://github.com/durasi/Seckin-Wordpress-Library
//  seckin-editor wordpress plugin
-->

<?
// SQL TABLE
//	  CREATE TABLE `seckin_editor_yaz` (
//	  `id` int(11) NOT NULL,
//	  `tarih` int(11) DEFAULT NULL,
//	  `ip` text,
//	  `url` text,
//	  `par1` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par1yan` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par2` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par2yan` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par3` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par3yan` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par4` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par4yan` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par5` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par5yan` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par6` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par6yan` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par7` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par7yan` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par8` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par8yan` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par9` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par9yan` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par10` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `par10yan` text CHARACTER SET utf8 COLLATE utf8_turkish_ci,
//	  `durum` int(11) NOT NULL DEFAULT '0'
//	) ENGINE=MyISAM DEFAULT CHARSET=latin1;

?>


<?
// Create "seckin-editor" folder in "wp-content / plugins /" file path. Move this "seckin-editor-wordpress-plugin.php" file into it.
// The editor will be found on the page where you paste the [seckin_editor_duzenle] code.
// Code Example: [seckin_editor_duzenle]

?>

<?
/*
Plugin Name: Seckin Editor
Plugin URI: https://www.seckin.co
Description: It is coded as a special plugin by Seckin.
Version: Versiyon 0.1
Author: seckin.co
Author URI: seckin.co
License: GNU
*/
error_reporting(0);
add_action("init","seckin_editor_shortcodes");

function seckin_editor_shortcodes()
{
	add_shortcode("seckin_editor_goster_par1", "zvash_seckin_editor_goster_par1");
	add_shortcode("seckin_editor_goster_par1yan", "zvash_seckin_editor_goster_par1yan");
	add_shortcode("seckin_editor_goster_par2", "zvash_seckin_editor_goster_par2");
	add_shortcode("seckin_editor_goster_par2yan", "zvash_seckin_editor_goster_par2yan");
	add_shortcode("seckin_editor_duzenle", "zvash_seckin_editor_duzenle");
}	


function zvash_seckin_editor_goster_par1yan($e_orandustu,$content_orandustu){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_editor_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->par1yan;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_editor_goster_par1($e_orandustu,$content_orandustu){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_editor_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->par1;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_editor_goster_par2yan($e_orandustu,$content_orandustu){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_editor_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->par2yan;
  		endforeach;
	else:
	echo "";
	endif;	
}

function zvash_seckin_editor_goster_par2($e_orandustu,$content_orandustu){
	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
	global $wpdb;
	$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_editor_yaz where url='".$url."'",OBJECT);
	if(count($wp_gelenVeri)):
    	foreach($wp_gelenVeri as $wp_gelenSatir): 
     		echo $wp_gelenSatir->par2;
  		endforeach;
	else:
	echo "";
	endif;	
}


function zvash_seckin_editor_duzenle($e_durum,$content_durum){

?>
<style type="text/css">
	
.ta-editor {
  min-height: 300px;
  height: auto;
  overflow: auto;
  font-family: inherit;
  font-size: 100%;
}

</style>


<?



$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));


						global $wpdb;
$wp_gelenVeri=$wpdb->get_results("SELECT * from seckin_editor_yaz where url='".$url."'",OBJECT);
if(count($wp_gelenVeri)):
    foreach($wp_gelenVeri as $wp_gelenSatir): 
     
        $mevcut=$wp_gelenSatir->url;
        $durum=$wp_gelenSatir->durum+1;
    endforeach;
else:
	echo "";
endif;


	if(isset($_POST['gonder']))
	{
		$tarih=time();
    	$ip=$_SERVER["REMOTE_ADDR"];
    	$url = end(explode('/', trim($_SERVER['REQUEST_URI'], '/')));

    	$par1=$_POST["htmlcontent"];
    	$par1yan=$_POST["baslik"];
    	$par2=$_POST["htmlcontent2"];
    	$par2yan=$_POST["baslik2"];
    	$par3=$_POST["htmlcontent3"];
    	$par3yan=$_POST["baslik3"];
    	$par4=$_POST["htmlcontent4"];
    	$par4yan=$_POST["baslik4"];
    	$par5=$_POST["htmlcontent5"];
    	$par5yan=$_POST["baslik5"];
    	$par6=$_POST["htmlcontent6"];
    	$par6yan=$_POST["baslik6"];
    	$par7=$_POST["htmlcontent7"];
    	$par7yan=$_POST["baslik7"];
    	$par8=$_POST["htmlcontent8"];
    	$par8yan=$_POST["baslik8"];
    	$par9=$_POST["htmlcontent9"];
    	$par9yan=$_POST["baslik9"];
    	$par10=$_POST["htmlcontent10"];
    	$par10yan=$_POST["baslik10"];

    							
			if(empty($par1) || empty($par1yan)) 
    		{
				echo "Lütfen ilgili tüm birimleri doldurunuz.";
    		}
    		else
    		{

    			if($mevcut==$url)
    			{

  							

							try{
    					global $wpdb;  

							$veriSql=$wpdb->update('seckin_editor_yaz', array('tarih'=>$tarih, 'ip'=>$ip, 'par1'=>$par1, 'par1yan'=>$par1yan, 'par2'=>$par2, 'par2yan'=>$par2yan, 'par3'=>$par3, 'par3yan'=>$par3yan, 'par4'=>$par4, 'par4yan'=>$par4yan, 'par5'=>$par5, 'par5yan'=>$par5yan, 'par6'=>$par6, 'par6yan'=>$par6yan, 'par7'=>$par7, 'par7yan'=>$par7yan, 'par8'=>$par8, 'par8yan'=>$par8yan, 'par9'=>$par9, 'par9yan'=>$par9yan, 'par10'=>$par10, 'par10yan'=>$par10yan, 'durum'=>$durum), array('url'=>$url));


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

    							

							  $veriSql=$wpdb->prepare("INSERT INTO seckin_editor_yaz SET tarih = '{$tarih}', ip='".$_SERVER["REMOTE_ADDR"]."', url = '{$url}', par1 = '{$par1}', par1yan = '{$par1yan}', par2 = '{$par2}', par2yan = '{$par2yan}',  par3 = '{$par3}', par3yan = '{$par3yan}', par4 = '{$par4}', par4yan = '{$par4yan}', par5 = '{$par5}', par5yan = '{$par5yan}', par6 = '{$par6}', par6yan = '{$par6yan}', par7 = '{$par7}', par7yan = '{$par7yan}', par8 = '{$par8}', par8yan = '{$par8yan}', par9 = '{$par9}', par9yan = '{$par9yan}', par10 = '{$par10}', par10yan = '{$par10yan}', durum = '{$durum}'"); 
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
?>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
	  $("#par3").click(function(){
	    $("#paragraf3").fadeIn("slow");
	  });
	  $("#par4").click(function(){
	    $("#paragraf4").fadeIn("slow");
	  });
	  $("#par5").click(function(){
	    $("#paragraf5").fadeIn("slow");
	  });
	  $("#par6").click(function(){
	    $("#paragraf6").fadeIn("slow");
	  });
	  $("#par7").click(function(){
	    $("#paragraf7").fadeIn("slow");
	  });
	  $("#par8").click(function(){
	    $("#paragraf8").fadeIn("slow");
	  });
	  $("#par9").click(function(){
	    $("#paragraf9").fadeIn("slow");
	  });
	  $("#par10").click(function(){
	    $("#paragraf10").fadeIn("slow");
	  });
	  $("#final2").click(function(){
	    $("#paragraf3").fadeOut("slow");
	    $("#paragraf4").fadeOut("slow");
	    $("#paragraf5").fadeOut("slow");
	    $("#paragraf6").fadeOut("slow");
	    $("#paragraf7").fadeOut("slow");
	    $("#paragraf8").fadeOut("slow");
	    $("#paragraf9").fadeOut("slow");
	    $("#paragraf10").fadeOut("slow");
	  });
	  $("#final3").click(function(){
	    $("#paragraf4").fadeOut("slow");
	    $("#paragraf5").fadeOut("slow");
	    $("#paragraf6").fadeOut("slow");
	    $("#paragraf7").fadeOut("slow");
	    $("#paragraf8").fadeOut("slow");
	    $("#paragraf9").fadeOut("slow");
	    $("#paragraf10").fadeOut("slow");
	  });
	  $("#final4").click(function(){
	    $("#paragraf5").fadeOut("slow");
	    $("#paragraf6").fadeOut("slow");
	    $("#paragraf7").fadeOut("slow");
	    $("#paragraf8").fadeOut("slow");
	    $("#paragraf9").fadeOut("slow");
	    $("#paragraf10").fadeOut("slow");
	  });
	  $("#final5").click(function(){
	    $("#paragraf6").fadeOut("slow");
	    $("#paragraf7").fadeOut("slow");
	    $("#paragraf8").fadeOut("slow");
	    $("#paragraf9").fadeOut("slow");
	    $("#paragraf10").fadeOut("slow");
	  });
	  $("#final6").click(function(){
	    $("#paragraf7").fadeOut("slow");
	    $("#paragraf8").fadeOut("slow");
	    $("#paragraf9").fadeOut("slow");
	    $("#paragraf10").fadeOut("slow");
	  });
	  $("#final7").click(function(){
	    $("#paragraf8").fadeOut("slow");
	    $("#paragraf9").fadeOut("slow");
	    $("#paragraf10").fadeOut("slow");
	  });
	  $("#final8").click(function(){
	    $("#paragraf9").fadeOut("slow");
	    $("#paragraf10").fadeOut("slow");
	  });
	  $("#final9").click(function(){
	    $("#paragraf10").fadeOut("slow");
	  });
	});
	</script>
		
	<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css'>
	<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css'>
	
	<form method="POST">
		<div ng-app="textAngularTest" ng-controller="wysiwygeditor" class="container app">

	  	
	  		<p>Giriş Paragraphı Yan başlık</p>
			<input type="text" name="baslik"  placeholder="Ex: First Title" />
			<br>
			<p>Giriş Paragraphı</p>
	  		<div text-angular="text-angular" name="htmlcontent" ng-model="htmlcontent" ta-disabled='disabled'></div>
	  		<br>

			<p>2. Paragraph Side title</p>
			<input type="text" name="baslik2"  placeholder="Ex: Sub Title" />
			<br>
			<p>2. Paragraph</p>
			<div text-angular="text-angular" name="htmlcontent2" ng-model="htmlcontent2" ta-disabled='disabled'></div>
			<br>
					<div class="form-group">
	                  	<label for="artistname">Add a New Paragraph?</label>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="par3" name="p3s"/>
	                    	<label for="par3">3.Create Paragraph</label>
	                  	</div>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="final2" name="p3s"/>
	                    	<label for="final2">This Last Paragraph</label>
	                  	</div>
	                  	<br>
	                  	<p><b>Info: If you want to undo the process after opening a new paragraph, do not leave any text in the paragraph and mark the "This Last Paragraph" option.</b></p>
	                </div>                  	
            
            <div id="paragraf3" style="display: none;">
				<p>3. Paragraph Side title</p>
				<input type="text" name="baslik3"  placeholder="Ex: Sub Title" />
				<br>
				<p>3. Paragraph</p>
				<div text-angular="text-angular" name="htmlcontent3" ng-model="htmlcontent3" ta-disabled='disabled'></div>
				<br>
					<div class="form-group">
	                  	<label for="artistname">Add a New Paragraph?</label>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="par4" name="p4s"/>
	                    	<label for="par4">4.Create Paragraph</label>
	                  	</div>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="final3" name="p4s"/>
	                    	<label for="final3">This Last Paragraph</label>
	                  	</div>
	                </div>
			</div>  	

					

			<div id="paragraf4" style="display: none;">
				<p>4. Paragraph Side title</p>
				<input type="text" name="baslik4"  placeholder="Ex: Sub Title" />
				<br>
				<p>4. Paragraph</p>
				<div text-angular="text-angular" name="htmlcontent4" ng-model="htmlcontent4" ta-disabled='disabled'></div>
				<br>
					<div class="form-group">
	                  	<label for="artistname">Add a New Paragraph?</label>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="par5" name="p5s"/>
	                    	<label for="par5">5.Create Paragraph</label>
	                  	</div>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="final4" name="p5s"/>
	                    	<label for="final4">This Last Paragraph</label>
	                  	</div>
	                </div>
			</div>

			<div id="paragraf5" style="display: none;">
				<p>5. Paragraph Side title</p>
				<input type="text" name="baslik5"  placeholder="Ex: Sub Title" />
				<br>
				<p>5. Paragraph</p>
				<div text-angular="text-angular" name="htmlcontent5" ng-model="htmlcontent5" ta-disabled='disabled'></div>
				<br>
					<div class="form-group">
	                  	<label for="artistname">Add a New Paragraph?</label>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="par6" name="p6s"/>
	                    	<label for="par6">6.Create Paragraph</label>
	                  	</div>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="final5" name="p6s"/>
	                    	<label for="final5">This Last Paragraph</label>
	                  	</div>
	                </div>
			</div>

			<div id="paragraf6" style="display: none;">
				<p>6. Paragraph Side title</p>
				<input type="text" name="baslik6"  placeholder="Ex: Sub Title" />
				<br>
				<p>6. Paragraph</p>
				<div text-angular="text-angular" name="htmlcontent6" ng-model="htmlcontent6" ta-disabled='disabled'></div>
				<br>
					<div class="form-group">
	                  	<label for="artistname">Add a New Paragraph?</label>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="par7" name="p7s"/>
	                    	<label for="par7">7.Create Paragraph</label>
	                  	</div>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="final6" name="p7s"/>
	                    	<label for="final6">This Last Paragraph</label>
	                  	</div>
	                </div>
			</div>

			<div id="paragraf7" style="display: none;">
				<p>7. Paragraph Side title</p>
				<input type="text" name="baslik7"  placeholder="Ex: Sub Title" />
				<br>
				<p>7. Paragraph</p>
				<div text-angular="text-angular" name="htmlcontent7" ng-model="htmlcontent7" ta-disabled='disabled'></div>
				<br>
					<div class="form-group">
	                  	<label for="artistname">Add a New Paragraph?</label>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="par8" name="p8s"/>
	                    	<label for="par8">8.Create Paragraph</label>
	                  	</div>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="final7" name="p8s"/>
	                    	<label for="final7">This Last Paragraph</label>
	                  	</div>
	                </div>
			</div>

			<div id="paragraf8" style="display: none;">
				<p>8. Paragraph Side title</p>
				<input type="text" name="baslik8"  placeholder="Ex: Sub Title" />
				<br>
				<p>8. Paragraph</p>
				<div text-angular="text-angular" name="htmlcontent8" ng-model="htmlcontent8" ta-disabled='disabled'></div>
				<br>
					<div class="form-group">
	                  	<label for="artistname">Add a New Paragraph?</label>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="par9" name="p9s"/>
	                    	<label for="par9">9.Create Paragraph</label>
	                  	</div>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="final8" name="p9s"/>
	                    	<label for="final8">This Last Paragraph</label>
	                  	</div>
	                </div>
			</div>

			<div id="paragraf9" style="display: none;">
				<p>9. Paragraph Side title</p>
				<input type="text" name="baslik9"  placeholder="Ex: Sub Title" />
				<br>
				<p>9. Paragraph</p>
				<div text-angular="text-angular" name="htmlcontent9" ng-model="htmlcontent9" ta-disabled='disabled'></div>
				<br>
					<div class="form-group">
	                  	<label for="artistname">Add a New Paragraph?</label>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="par10" name="p10s"/>
	                    	<label for="par10">10.Create Paragraph</label>
	                  	</div>
	                  	<div class="icheck-material-info">
	                    	<input type="radio" id="final9" name="p10s"/>
	                    	<label for="final9">This Last Paragraph</label>
	                  	</div>
	                </div>
			</div>

			<div id="paragraf10" style="display: none;">
				<p>10. Paragraph Side title</p>
				<input type="text" name="baslik10"  placeholder="Ex: Sub Title" />
				<br>
				<p>10. Paragraph</p>
				<div text-angular="text-angular" name="htmlcontent10" ng-model="htmlcontent10" ta-disabled='disabled'></div>
				<br>
			</div>

					

		</div>

		<button type="submit" name="gonder" >Save</button>
	</form>

	 

	<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js'></script>
	<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular-sanitize.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.1.2/textAngular.min.js'></script>






		
			
			


			
		</form>
		



<script type="text/javascript">
		angular.module("textAngularTest", ['textAngular']);
	function wysiwygeditor($scope) {
		$scope.orightml = '';
		$scope.htmlcontent = $scope.orightml;
		$scope.disabled = false;
	};
		angular.module("textAngularTest", ['textAngular']);
	function wysiwygeditor2($scope2) {
		$scope2.orightml = '';
		$scope2.htmlcontent2 = $scope2.orightml;
		$scope2.disabled = false;
	};
		angular.module("textAngularTest", ['textAngular']);
	function wysiwygeditor3($scope3) {
		$scope3.orightml = '';
		$scope3.htmlcontent3 = $scope3.orightml;
		$scope3.disabled = false;
	};
		angular.module("textAngularTest", ['textAngular']);
	function wysiwygeditor4($scope4) {
		$scope4.orightml = '';
		$scope4.htmlcontent4 = $scope4.orightml;
		$scope4.disabled = false;
	};
		angular.module("textAngularTest", ['textAngular']);
	function wysiwygeditor5($scope5) {
		$scope5.orightml = '';
		$scope5.htmlcontent5 = $scope5.orightml;
		$scope5.disabled = false;
	};
		angular.module("textAngularTest", ['textAngular']);
	function wysiwygeditor6($scope6) {
		$scope6.orightml = '';
		$scope6.htmlcontent6 = $scope6.orightml;
		$scope6.disabled = false;
	};
		angular.module("textAngularTest", ['textAngular']);
	function wysiwygeditor7($scope7) {
		$scope7.orightml = '';
		$scope7.htmlcontent7 = $scope7.orightml;
		$scope7.disabled = false;
	};
		angular.module("textAngularTest", ['textAngular']);
	function wysiwygeditor8($scope8) {
		$scope8.orightml = '';
		$scope8.htmlcontent8 = $scope8.orightml;
		$scope8.disabled = false;
	};
		angular.module("textAngularTest", ['textAngular']);
	function wysiwygeditor9($scope9) {
		$scope9.orightml = '';
		$scope9.htmlcontent9 = $scope9.orightml;
		$scope9.disabled = false;
	};
		angular.module("textAngularTest", ['textAngular']);
	function wysiwygeditor10($scope10) {
		$scope10.orightml = '';
		$scope10.htmlcontent10 = $scope10.orightml;
		$scope10.disabled = false;
	};

</script>
<?
}
?>