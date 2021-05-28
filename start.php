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

    <title>Connexion</title>

    <style>
.connexion {
  width: 340px;
  margin: 80px ;
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
    min-height: 50px;
    border-radius: 2px;
    /* font-size: 15px;
    font-weight: bold;
    color: blue; */
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
    <br>
    <br>
    <div class="container-fluid">

<div class="row">

<div class="col-4"></div>

<div class="connexion">
  <form id="form" name="form" method="post"> 
  <h1 class ="text-center">CONNEXION</h1>
  <!-- <div class="form-group">
    <label for="">Nom</label>
    <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrez votre nom">
    </div> -->

   
    
    
 

  <div class="form-group">
  <label for=""> Téléphone</label>

    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Entrez votre Téléphone">
  </div>
<br>
  
  <div class="form-group" >
    
    <input type="button" name="connexion" id="connexion" class="form-control"value ="Connexion" >
   
  </div>
  </form>
  <p class = "text-center"> <a href="register.php">S'inscrire</a> </p>
  </div>




<div class="col-3"></div>



</div>



</div>
 
    
  
<script>
$(document).ready(function() {
  $('#connexion').on('click', function() {
      
      // var nom = $('#nom').val();
  var telephone = $('#telephone').val();
    
      if(telephone!="" ){
          $.ajax({
              url: "connect.php",
              type: "POST",
              data: {
        type: 2,
                  // nom: nom,
                telephone:telephone				
              },
              cache: false,
              success: function(dataResult){
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                      location.href = "darsh.php";  						
                  }
                  else if(dataResult.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }
          });
      }
      else{
          alert('Veuillez remplir tous les champs !');
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