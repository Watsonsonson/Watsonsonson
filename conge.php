
 
<!DOCTYPE html>
<html>
    
<head>
  <title>Data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <meta charset="utf-8" />
  <link rel="stylesheet" href="liste/style.css">
  <meta name="viewport"  content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://googleapis.com"/>
  <script src="script.js"></script>
   <link rel="preconnect" href ="hppts://fonts.gstatic.com" crossorigin />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>
 
 <?php
  
 // include_once("common/nav.php");
  
 ?>
 <?php 
 require_once "../login/connexion.php";
 require_once "liste/collage/hearder.php";
 require_once "liste/collage/navliste.php"; 
 function veryfyValue($data) { 
  return $data? $data : " Empty "; 
  } 
  $sql = 'SELECT * FROM employes  WHERE id_emp='.$_GET["id"];
  $requete = $bdd-> query($sql);
  $firsts = $requete ->fetchAll(); 
  foreach($firsts as $first):
 $id_emp = $_GET['id'];
 $datemae=$_GET['C'];
?> 

<div class="card">
  <div class="card-header">
  <h5>  Enregistrez les Informations de Conge <br>La date du jour:</h5><?php echo $today=date('j-n-y'); ?>
  </div> 
        
  <div class="card-body">
    <form id="formations" method="POST" action="traitements/traite_conge.php">

    <div class="form-group">
      <label for="datej"><strong>Code:</strong>   <?= $first["Codeemp"]?></label> <br>
      <label for="datej"><strong>Nom:</strong>   <?= $first["Nom"]?></label> <br>
      <label for="datej"><strong>Prenom:</strong>     <?= $first["Prenom"]?></label><br>
      <label for="datej"><strong>Titre:</strong>      <?= $first["Titre"]?></label><br>
      <label for="datej"> <strong> Direction:</strong>      <?= $first["Affectation"]?></label><br>
      <label for="datej"><strong> Date dans la Fonction Public:</strong>       <?= $first["Datefonction"]?></label><br>
      <label for="datej"><strong>Date M.A.E:</strong>       <?= $first["Datemae"]?></label><br>
      <input for="id_emp"  type="text"  name="id_emp"  value="<?=$id_emp?>" >
    </div>
    <!-- <div class="form-group">
      <label for="code">Code</label>
      <input type="text" name="code"  id="code"  size="32" class="form-control"  aria-describedby="emailHelp">
     
   </div> -->
    <div class="form-group">
      <label for="typeconge">Type de conge</label>
      <select type="text" name="typeconge"  id="typeconge"  size="1" class="form-control"  aria-describedby="emailHelp">
          <option value="selectionnez"></option>
          <option value="Regulier">Regulier</option>
          <option value="Maladie">Maladie</option>
          <option value="Maternite">Maternite</option>
          <option value="Special">Special</option>
          <option value="Autres">Autres</option>
   </select> 
   </div>
    <div class="form-group">
      <label for="dateDebut">Date de debut</label>
      <input type="date" name="datedebut" class="form-control" id="datedebut"  id="date" size="25" >
    </div>
    <div class="form-group">
      <label for="dateFin">Date de Fin</label>
      <input class="form-control" type="date" name="datefin"  id="datefin" >
    </div>

    <div class="form-group">
      <label for="commentaires">Motif/Commentaires</label>
      <textarea type="text" class="form-control"  name="commentaires"  id="commentaires" cols="10" rows="2" >
   </textarea> 
    </div>

    <div class="form-group">
      <label for="dateretour">Date Retour</label>
      <input class="form-control" type="date" name="dateretour"  id="dateretour" >
    </div>



   <h6><strong>Article 64-</strong>L'Agent de la fonction Publique qui ne se
        presente pas a son poste a la fin de conge est mis 
        en disponibilite(Loi portant statut General de la fonction Publique).<br/>
        La Direction se preserve le droit d'echelonner les 
        conges annuels et/ou en autoriser le Fractionnement.<br/>
        La demande de conge regulier doit etre soumise a la 
        Direction des Ressources Humaines au moins 1 mois avant la date.</h6>
   </div>
                              
                                  
                                  
                                  <?php
                                  // echo $today = date("Y-m-d"); 
                                  
                                //  $newdatemae = $datemae * 157680000000;
                                //   // echo $nconge;

                                //     $newdatemae = 318828960000000;
                                //   if($newdatemae <= 318828960000000){
                                //   echo"  Nombre de jour d'access:15";
                                //   }else{
                                //    echo"Nombre de jour d'access:20";
                                //   }

                                  // echo $nconge;

                                  //   $datemae = 157680000000 ;
                                  // if($datemae < 157680000000){
                                  // die ( "Nombre de jour d'access:20");
                                  // }else if ($datemae < 157680000000){
                                  //  die ("Nombre de jour d'access:15");
                                  // }


                                  $today = date("Y-m-d");
                                  echo $today ." ".Date($datemae) ;
                                  if($today - Date($datemae)   ){
                                  echo  ( "Nombre de jour d'access:15");
                                  }else{
                                  echo("Nombre de jour d'access:20");
                                  }

                               ?>

 
               <!-- <script >
                     let autredate = new date ("2020-01-12 14:25:14");


                     console.log(autredate.toLocaleDateStrings());
                     </script>
                                 -->
  
                                
    <div class="d-flex">
        <div>
           <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
        <div class="mt-3">
          <a href="liste/listconge.php" class="listconge">List des personne en conge</a>
        </div>
    </div>
   
    
  </form>
  </div>
</div>

 



<?php endforeach; ?>
