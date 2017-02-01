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
	?>
				<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title text-primary" style="word-wrap: break-word; overflow: hidden;"><?php echo $decodedresponse[result][data][$i][name];?><span class="text-muted">(<?php echo $decodedresponse[result][data][$i][travelLength];?>)</span></h3>
						</div>
						<div class="panel-body">
				
				<strong>Id : </strong><?php echo  $decodedresponse[id];?></br>
				<strong>User Id : </strong><?php echo  $decodedresponse[userId];?></br>
				<strong>Content : </strong><?php echo  $decodedresponse[body];?></br>
				<?php $id = trim($decodedresponse[id]); 
				$urlcomments = $commenturl.$id; 
				?>
			
				<a href=<?php echo $urlcomments;?>>Click here to view comments</a>
				</br>
				</div>
					</div>
     
			 
			</div>
		
			
			
		</div>
	</div>

</body>	  
</html>	  
	
