<?php
$dbhostname="localhost";
$dbusername="yassine";
$dbpassword="123";
$dbname="test";

$con = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname);

if (!$con){
echo('Not Connected');
die(print_r(mysqli_error($con)));
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ajouter</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('/web/images/im1.jpg');">
			<div class="inner">
            <div class="image-holder">
					<img src="images/registration-form-1.png" alt="">
				</div>
				
				<form action="" method="post">
					
											
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control" name="email">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Activitie" class="form-control" name="activities">
						<i class="zmdi zmdi-activitie"></i>
					</div>
					<div class="form-wrapper">
						<select name="presence" id="" class="form-control">
							<option value="" disabled selected>presence</option>
							<option value="oui">oui</option>
							<option value="non">non</option>
							
											
						</select>
						<span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
						
					</div>
                    <div class="form-wrapper">
						<input type="int" placeholder="score" class="form-control" name="score">
						
					</div>
					
					<button type="submit" class="btn btn-info" name="btadd" >Ajouter</a></button>
					<button type="submit" class="button"><a  href="..\themes\activities.php">tableau de score</a></button>
					<label style="text-align:center; color:red ;">
					<?php
					if(isset($_POST['btadd']))
					{
						$email=$_POST['email'];
						$activitie=$_POST['activities'];
						$presence=$_POST['presence'];
						$score=$_POST['score'];
						$reqadd="insert INTO activities VALUES ('$email','$activitie','$presence','$score')";
						$resultat=mysqli_query($con,$reqadd);
						if($resultat)
						{
							echo "insertion des donnes validés";

						}
						else
						{
							echo "Echec!!";
						}
					}
					?>
					</label>
			
				

				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>