

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- jquery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <title>Publication</title>

    <style>
.connexion {
  width: 500px;;
  margin: 50px ;
  font-size : 15px;
}
.connexion form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}

.connexion h1 {
  margin: 0 0 15px;
}

. form-control {
    min-height: 38px;
    border-radius: 2px;
    
}


</style>

  </head>
  <body>
  <header>
      <div class="collapse bg-dark" id="navbarHeader">
          
           <div class="container">
               
                <div class="nav-item">
                
  
                   
              </div>
        </div>
      </div>
      
      <div class="navbar navbar-dark bg-dark box-shadow">
        
      <!-- logo -->
      <div class="container d-flex justify-content-between"> 
          <a href="#" class="navbar-brand d-flex align-items-center">
            <!-- mettre le logo ici -->
            <strong>e-permute</strong>
          </a>
          <!--fin logo  -->
        </div>

        <!-- fin du container -->
      </div>


    </header>
    <div class="container-fluid">

  <div class="row">


  <div class="col-4"></div>
  
  <div class="connexion">
      <!-- formulaire de publication -->
    <form id="form" name="form" method="post" > 
    <h1 class ="text-center">PUBLICATION</h1>
    <div class="form-group">
      <label for="">Description</label>
      <input type="text" class="form-control" name="description" id="description" placeholder="Decrivez votre publication ">
      </div>

      <div class="form-group">
     <label for="">Date</label>

      <input type="text" class="form-control" name="date" id="date" placeholder="date">
      
      
    </div>
    <div class="form-group">
    <label for="">Annonceur</label>

      <input type="text" class="form-control" name="annonceur" id="annonceur" placeholder="Nom de l'annoceur">
    </div>

    <div class="form-group">
    <label for=""> Ecole souhaitée</label>

      <input type="text" class="form-control" name="ecoleS" id="ecoleS" placeholder="Entrez le nom de votre école souhaitée">
    </div>

    <div class="form-group">
    <label for=""> Filière souhaitée</label>

      <input type="text" class="form-control" name="filiereS" id="filiereS" placeholder="Entrez le nom de votre filière souhaitée">
    </div>

    <div class="form-group">
    <label for=""> Ville souhaitée</label>
   
      <input type="text" class="form-control" name="villeS" id="villeS" placeholder="Entrez votre ville souhaitée">
    </div>
    
    <br>

    <div class="form-group">
      
      <input type="button" name="publication" id="publication" class="publication"value ="publier" >
     
    </div>
    </form>
    <p class = "text-center"> <a href="darsh.php">retour</a> </p>
    </div>
 



 <!-- script pour le traitement des données-->
    <script>
$(document).ready(function() {
	$('#publication').on('click', function() {
 var description = $("#description").val();
var date = $("#date").val();
var annonceur = $("#annonceur").val();
var ecoleS = $("#ecoleS").val();
var filiereS = $("#filiereS").val();
var villeS = $("#villeS").val();	
	
if(description!="" && date!="" && annonceur!="" && ecoleS!="" && filiereS!="" && villeS!="" ){
			$.ajax({
				url: "connect.php",
				type: "POST",
				data: {
            type: 3,
            description: description,
            date: date,
            annonceur: annonceur,
            ecoleS: ecoleS,
            filiereS: filiereS,
            villeS: villeS				
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						location.href = "darsh.php";  						
					}
					else if(dataResult.statusCode==201){
					   alert("Error !");
					}
					
				}
			});
		}
		else{
			alert('Veuillez remplir tous les champs!!!');
		}
      
		
	});
});
</script>   

 




<!-- footer -->

<footer class="text-muted">
      <div class="container">
        
        <p class="text-center">e-permute &copy; vous permet de permuter facilement!</p>
        
      </div>
    </footer>

   

    <!--  Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    
  </body>
</html>