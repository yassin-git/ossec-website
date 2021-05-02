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
		<title>Ajouter membre</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url("images\bg-registration-form-1.jpg");">
			<div class="inner">
				
				<form action="" method="post">
					
					<div class="form-group">
						<input type="text" placeholder="First Name" class="form-control" name="firstname">
						<input type="text" placeholder="Last Name" class="form-control" name="lastname">
					</div>										
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control" name="Email">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Facebook URL" class="form-control" name="Facebook">
						<i class="zmdi zmdi-facebook"></i>
					</div>
					<div class="form-wrapper">
						<select name="class" id="" class="form-control">
							<option value="" disabled selected>class</option>
							<option value="II1">II1</option>
							<option value="II2">II2</option>
							
							<option value="II3">II3</option>
							<option value="II4">II4</option>
							<option value="other">Other</option>						
						</select>
						<span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
						
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="your skills" class="form-control" name="skills">	
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Your expectations" class="form-control" name="expectations">	
					</div>
					<button type="submit" class="btn btn-info" name="btadd" >Ajouter</a></button>
					<button type="submit" class="button"><a  href="..\themes\index1.php">tableau de bord</a></button>
					<label style="text-align:center; color:red ;">
					<?php
					if(isset($_POST['btadd']))
					{
						$firstname=$_POST['firstname'];
						$lastname=$_POST['lastname'];
						$Email=$_POST['Email'];
						$Facebook=$_POST['Facebook'];
						$class=$_POST['class'];
						$skills=$_POST['skills'];
						$expectations=$_POST['expectations'];
						$reqadd="insert INTO members VALUES ('$firstname','$lastname','$Email','$Facebook','$class','$skills','$expectations')";
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