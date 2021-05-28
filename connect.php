

<?php
session_start();
include 'db.php'; // Etablir la connexion..
// $servername ="localhost" ;
// $username = "root";
// $password = "";
// $dbname = "permute";

// // créer la connexion
// $conn = mysqli_connect ($servername, $username, $password, $dbname);
//$db = mysql_select_db("permute", $conn); // la base de donnée




if($_POST['type']==1){	 
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom']; 
    $email=$_POST['email'];
    $telephone=$_POST['telephone'];
    $ecole=$_POST['ecole'];
    $ville=$_POST['ville'];

	 
	// $check=mysqli_query($conn,"select * from utilisateur where telephone='$telephone'");
	// if (mysqli_num_rows($check)=0)
	// {
	   $sql = "INSERT INTO utilisateur (nom, prenom, email, telephone, ecole, ville ) 
	   values ('$nom', '$prenom', '$email', '$telephone','$ecole', '$ville')";
		if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	 mysqli_close($conn);

	
}

if($_POST['type']==2){
    // $nom=$_POST['nom'];
    $telephone=$_POST['telephone'];

    $check=mysqli_query($conn,"select * from utilisateur where telephone='$telephone'");
    if (mysqli_num_rows($check)>0)
    {
        $_SESSION['telephone']=$telephone;
        echo json_encode(array("statusCode"=>200));
    }
    else{
        echo json_encode(array("statusCode"=>201));
    }
    mysqli_close($conn);
}



if($_POST['type']==3){	 
    $description = $_POST['description'];
    $date = $_POST['date']; 
    $annonceur=$_POST['annonceur'];
    $ecoleS=$_POST['ecoleS'];
    $filiereS=$_POST['filiereS'];
    $villeS=$_POST['villeS'];


	$sql = "INSERT INTO publication (description, date, annonceur, ecoleS, filiereS, villeS ) 
     values ('$description', '$date', '$annonceur', '$ecoleS','$filiereS', '$villeS')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);   

	 
   
}



?>