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

    <title>Formulaire</title>

    <style>
.connexion {
  width: 340px;;
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
    <<div class="container-fluid">



  <div class="row">

  <div class="col-4"></div>

  <div class="connexion">
  <!-- formulaire -->
    <form id="form" name="form" method="post" > 
    <h1 class ="text-center">INSCRIPTION</h1>
    <div class="form-group">
      <label for="">Nom</label>
      <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrez votre nom">
      </div>

      <div class="form-group">
     <label for="">Prenom</label>

      <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Entrez votre prénom">
      
      
    </div>
    <div class="form-group">
    <label for="">mail</label>

      <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre email">
    </div>

    <div class="form-group">
    <label for=""> Téléphone</label>

      <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Entrez votre Téléphone">
    </div>

    <div class="form-group">
    <label for="">Ecole</label>

      <input type="text" class="form-control" name="ecole" id="ecole" placeholder="Entrez votre école">
    </div>

    <div class="form-group">
    <label for=""> Ville</label>

      <input type="text" class="form-control" name="ville" id="ville" placeholder="Entrez votre ville">
     
    </div>
    <br>
    
    <div class="form-group">
      
      <input type="button" name="enregistrer" id="enregistrer" class="enregistrer"value ="envoyer" >
     
    </div>
    </form>
    <p class = "text-center"> <a href="start.php">Se connecter</a> </p>
    </div>

  <div class="col-3"></div>

  </div>

</div>
   
<script>
$(document).ready(function() {
	$('#enregistrer').on('click', function() {
 var nom = $("#nom").val();
var prenom = $("#prenom").val();
var email = $("#email").val();
var telephone = $("#telephone").val();
var ecole = $("#ecole").val();
var ville = $("#ville").val();	
	
if(nom!="" && nom!="" && prenom!="" && telephone!="" && ecole!="" && ville!="" ){
			$.ajax({
				url: "connect.php",
				type: "POST",
				data: {
           type: 1,
            nom: nom,
            prenom: prenom,
            email: email,
            telephone: telephone,
            ecole: ecole,
            ville: ville				
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