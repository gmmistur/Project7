<?php 
	include 'database.php';
	$email = null;
	if ( !empty($_GET['email'])) {
		$email = $_REQUEST['email'];
	}
	
	//if ( null==$email ) {
	//	header("Location: login.php");
	//} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM Users where email = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		Database::disconnect();
	//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css' rel='stylesheet'>
     <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js'></script>
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
				
    <title>Project 7 - Read</title>
</head>

<body>
    <div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Read a Customer</h3>
		    		</div>
		    		
	    			<div class="form-horizontal" >
					  <div class="control-group">
					    <label class="control-label">email</label>
					    <div class="controls">
						    <label class="checkbox">
						     	<?php echo $email;?>
						    </label>
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">password</label>
					    <div class="controls">
					      	<label class="checkbox">
						     	<?php echo $data['password'];?>
						    </label>
					    </div>
					  </div>
					    <div class="form-actions">
						  <a class="btn" href="index.php">Back</a>
					   </div>
					
					 
					</div>
				</div>
				
    </div> <!-- /container -->
  </body>
</html>
