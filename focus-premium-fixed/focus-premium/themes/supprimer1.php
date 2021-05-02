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
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Supprimer</title>
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">  
</head>
<body class="sb-nav-fixed">
<div class="form-wrapper">
    <form name="formdelet" class="form-group">
    <button type="submit" class="button"><a  href="..\themes\activities.php">tableau de score</a></button>

   <?php
   if(isset($_GET['supmem']))
   {
       $sup=$_GET['supmem'];
       $reqdelete="DELETE FROM activities WHERE email='$sup'";
       $resultat=mysqli_query($con,$reqdelete);

   }
   if($resultat)
      {
         echo "<label style='text-align:center; color:red ;'>la suppression a été correctement effectuée!!</label>";

      }else
    
    {
        echo "<label style='text-align:center; color:red ;'>Erreur try again please!!</label>";
    }
    ?>
    </form>
</div>
</body>
</html>
