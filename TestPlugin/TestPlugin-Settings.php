<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
   // Settings Page 
	function Testplugin() {
	$logo =  plugin_dir_url('');
	add_menu_page('Test Plugin Settings', 'Test Plugin Settings', 'administrator', 'Testplugin-settings', 'Testplugin_settings_page',$logo."/TestPlugin/images/logo.jpg");
	}
	
	add_action('admin_menu', 'Testplugin');
	
	function Testplugin_settings_page() {
	?>
	<div class="wrap">
    <h2>Test Plugin admin Page</h2>
    <?php 
	$listurl = ""; 
	$filepath = dirname(__FILE__)."\urlfile.txt";
    $myfile = fopen($filepath, "r") or die("Unable to open file!");
	while(!feof($myfile)) {
	$listurl[] = fgets($myfile);
	}
	fclose($myfile);	
	
	 ?>
	<?php $formposturl = plugin_dir_url('')."/TestPlugin/formpost.php"; ?>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" /> -->
    <form name="test_form" class="form-horizontal" method="post" action="<?php echo $formposturl;?>">
		
		<div class="form-group">
		<label class="col-sm-2">List Page Slug</label><input type="text" class="col-sm-2" name="List_URL" value="<?php echo $listurl[0];?>"/> <small>Leave blank if wordpress is hosted in Root Folder, Or Add folder name of the wordpress site</small>
		</div> 
		<div class="form-group">
		<label class="col-sm-2">Description Page Slug</label> <input type="text" class="col-sm-2" name="Des_URL" value="<?php echo $listurl[1];?>"/><small> Ex: wordpress/description</small>
		</div>
		<div class="form-group">
		<label class="col-sm-2">Comments Page Slug</label> <input type="text" class="col-sm-2" name="Comments_URL" value="<?php echo $listurl[2];?>"/> <small>Ex: wordpress/comments</small></div>
		<div class="form-group"> 
		 <div class="col-sm-offset-2 col-sm-10"> 
		<input type="submit" value="save" class="btn btn-info btn-sm"/>
		</div>
		</div>
    </form>
	<h3>Short Codes Available</h3>
	<b>[API-Response]</b> - To list all  </br>
	<b>[API-Description]</b> - To view description </br>
	<b>[API-Comments]</b> - To view comments
	</div>
	<?php 
		
	}
		

	
