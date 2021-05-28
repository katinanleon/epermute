<?php
include_once 'db.php';
if(isset($_POST['publication']))
{	 
	 $description = $_POST['description'];
	 $date = $_POST['date'];
	 $annonceur = $_POST['annonceur'];
	 $ecoleS = $_POST['ecoleS'];
     $filiereS = $_POST['filiereS'];
     $villeS = $_POST['villeS'];

	 $sql = "INSERT INTO publication (description, date, annonceur, ecoleS, filiereS, villeS ) 
     values ('$description', '$date', '$annonceur', '$ecoleS','$filiereS', '$villeS')";
	 if (mysqli_query($conn, $sql)) {
		echo "Votre publication a été enregistrée !";
		// header(Location: darsh.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>