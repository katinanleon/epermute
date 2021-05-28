
<!-- Pour pouvoir recuperer les infos de la personne connecter -->
 <?php
 
include 'db.php';


// $telephone = $_SESSION["telephone"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Bienvenue</title>

    <style>

.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
    </style>
  </head>
  <body>
  <header>

      <div class="collapse bg-dark" id="navbarHeader">
          

      </div>
      
      <div class="navbar navbar-dark bg-dark box-shadow">
        
      <!-- logo -->
      <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <!-- mettre le logo ici -->
            <strong>e-permute</strong>
          </a>
          
        </div>

       
      </div>


    </header>

  <main>
<br>
<div class="container">
  <div class="row">
    <div class="col-5"></div>
    <div class="col-6"></div>
    <div class="col-1">
    <!-- Deconnexion -->
    <button type="button" class="btn btn-primary"><a href="logout.php" class="text-light">Deconnexion</a></button>
    </div>
    </div>
  </div>
</div>
<br>
<br>
<!--  -->
  <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Bienvenue dans votre espace</h1>
          <p class="lead text-muted">Permuter faciliment grace à e-permute</p>
        
          <br>
          <br>
          <!-- debut recherche -->
       
      <form action = "save.php" method="post">
        
          <h2>RECHERCHE<h2>
          <div class="inner-form">
            <div class="input-field">
              <input class="form-control" id="search" name="search" type="text" placeholder="Type to search..." />
              <button class="btn-search" type="button">
                
              </button>
            </div>
          </div>
         
        
      </form>

      <div class="container">
 <div class="row">
  
       </div>
  </div>




       <!-- fin recherche -->
       <br>

          <p>
            <!-- faire une publication  -->

            <a href="poster.php" class="btn btn-success my-3">Faire une publication </a>
          </p>
 
      </section>

      
      

      <!-- les publications -->
      <div class="darsh py-5 bg-light">
          <div class="container">
          

              <div class="row">
                <!--  -->
 
                <!-- publication -->

              
                <?php




$sql = mysqli_query($conn,"SELECT * FROM publication");

//  $result = $conn->query($sql);



 while($data = mysqli_fetch_row($sql))
   
 {
  

?>

<div class="col-md-4">
               <div class="card mb-4 box-shadow">
                 <div class="card" style="width: 25rem;">
                  <div class="card-body">
                  <h5 class="card-title">Permutation <?php echo " $data[5]" ; ?> </h5>
                                  <h6 class="card-subtitle mb-2 text-muted"><?php echo " $data[3]" ; ?></h6>
                                  <h6 class="card-subtitle mb-2 text-muted">Publié le :<?php echo " $data[2]" ; ?></h6>
                                   <p class="card-text"><?php echo " $data[1]" ; ?></p>
                                  
                                 <a href="numero.php" class="btn btn-primary my-3">Obtenir le numero</a>
                             </div>
                           </div>
               </div>
              </div>

<?php








  
  
 } 

    

     
?>

              </div>
          </div>
          
      </div>


</main>




<!-- Entete -->

<footer class="text-muted">
      <div class="container">
        
        <p class="text-center">e-permute &copy; vous permet de permuter facilement!</p>
        
      </div>
    </footer>

    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

   


    
  </body>
</html>