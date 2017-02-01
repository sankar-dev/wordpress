<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-8">
				
<?php
		defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
            // Reading Slug Details from Urlfile.txt file 
			
			$filepath = dirname(__FILE__)."\urlfile.txt";
			$myfile = fopen($filepath, "r") or die("Unable to open file!");
			while(!feof($myfile)) {
				$listurl[] = fgets($myfile);
			}
			fclose($myfile);
			$descriptionurl = trim($listurl[1]).'/';
			$commenturl = trim($listurl[2]).'/';
			
			
			for($i=0; $i<$sizeofresponse; $i++){ 
				$id = trim($decodedresponse[$i][postId]); 
				$url = $descriptionurl.$id;
				$urlcomments = $commenturl.$id; ?>
				<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Post Id : <?php echo $decodedresponse[$i][postId];?></h3>
						</div>
						<div class="panel-body">
				
				<strong>Id : </strong><?php echo  $decodedresponse[$i][id];?></br>
				<strong>User name : </strong><?php echo  $decodedresponse[$i][name];?></br>
				<strong>Email : </strong><?php echo  $decodedresponse[$i][email];?></br>
				<strong>Comment : </strong><?php echo  $decodedresponse[$i][body];?></br>
				
			
				<a href=<?php echo $url;?>>Click here to view description</a>
				</br>
				</div>
					</div>
      <?php  } ?>
					
			</div>
		
			
			
		</div>
	</div>

</body>	  
</html>	  
	
