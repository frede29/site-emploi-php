<!DOCTYPE html>
<html lang="fr">
<head>
	<title>connexion</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="new.css">
<link rel="stylesheet" type="text/css" href="index.css">
<style>
 .quate{
    padding-left: 800px;
  }
html {
    background: white;
}
  body {
    background: url(images/fond_jaune.png);
    font-family: 'Trebuchet MS', Arial, sans-serif;
    color: #181818;
    width: auto;
    background-color: white;
}
fieldset{
  margin-top: 10px ;
}
</style>

</head>
 <?php
session_start();


/*
$bdd = new PDO('mysql:host=127.0.0.1;dbname=membre', 'root', '');



if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM utilisateurs WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['nom'] = $userinfo['nom'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: profil.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
*/




?>



<body>
        <div class="container-fluid">

     <header class="un">
      <!--img src="Img.png" alt="Africajob" width="70" height="70">
      
      <nav class="trois">
        <button type="button" class="btn btn-primary">Accueil</button> 
        <button type="button" class="btn btn-primary">Nos partenaires</button>
        <button type="button" class="btn btn-primary">Nous contacter</button>
      </nav-->
     

     </header>
  </div>
  <!--header-->
<nav class="couleur">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
         <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
             <img src="Afrique.png" alt="Logo" style="width:40px;">
  
         </nav>

         <!--nav class="navbar navbar-expand-sm bg-dark navbar-dark">
              <a class="navbar-brand" href="#">
                  <img src="image.png" alt="Logo" style="width:40px;">
              </a>
  
        </nav-->
  

  <!-- Links -->
  
  <ul class="navbar-nav">
    

    <!-- Dropdown -->
        <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Menu</a>
      
                <div class="dropdown-menu">
                   <a class="dropdown-item" href="space.php">Accueil</a>
                   <a class="dropdown-item" href="#">Nos partenaires</a>
                   <a class="dropdown-item" href="#">Nous contacter</a>
                   <a class="dropdown-item" href="#">déposer un CV</a>
                </div>
        </li>
    </ul>

                <div class="quate">

        
                    <a class="nav-link" href="inscription1.php">Inscription</a>
                    <a class="nav-link" href="connexion1.php">Connexion</a>
                    <a class="nav-link" href="space.php">Accueil</a>
                </div>
  
  
</nav>
</nav>

	<div class="container register">
                <div class="row">
                                      <div class="col-md-3 register-left">
                                          <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                                          <h3>Bienvenue</h3>
                                          <p>Vous avez 30s pour décrocher votre premier job</p>
                                          <input type="submit" name="" a href="inscription1.php" value="S'inscrire"><br/>
                                      </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Candidat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Recruteur</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Vous êtes candidat</h3>
                                <form method="POST" action="" > 
                                <div class="row register-form">
                                	 <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Votre mail *" name="mailconnect" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="mot de passe *" name="mdpconnect" value="" />
                                        </div>
                                        <div class="checkbox">
                                           <label><input type="checkbox" name="remember"> Remember me</label>
                                       </div>
                                       
                                        

                                  <input type="submit" class="btnRegister" name="formconnexion" value="Se connecter !" a href="profil.php" />                                  
                                  </form>
                                       
                                </div>
                                    
                                    </div>
                                   
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Vous êtes recruteur</h3>
                                <div class="row register-form">
                                	 <div class="col-md-6">
                                   
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Votre mail *" name="mailconnect" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="mdp *" name="mdpconnect" value="" />
                                        </div>                               
                                     <input type="submit" class="btnRegister" name="formconnexion" value="Se connecter !" a href="profil.php" />
        
         
                                       
                                </div>
                                    
                              </div>
                                   
                            </div>
                    </div>
                </div>


            </div>
            <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>


         <?php
         
              // --------------------> VOICI LE SCRIPT DE SE CONNECTER A LA BASE DE DONNEE

              if(isset($_POST['formconnexion'])){

                $mailconnect = htmlentities($_POST['mailconnect']);
                $mdpconnect =  htmlentities($_POST['mdpconnect']);
               
                if(!empty($mailconnect) AND !empty($mdpconnect)) {   

                  $con= mysqli_connect("localhost","root","","membre"); // ETABLIR LA CONNEXTION AVEC LA BASE DE DONNEE
                  $mdp =  sha1($mdpconnect)  ;

                  $get_cats ="select * from utilisateurs WHERE Email = '$mailconnect' AND Mot_de_passe = '$mdp'";
                  
                  $run_cats= mysqli_query($con,$get_cats);
                  
                  while($row_cats= mysqli_fetch_array($run_cats))  // LOOP POUR AVOIR TOUTES LES VALEURS 
                  {
                   $_SESSION['id'] =  $row_cats['id_utilisateur'];
                   $_SESSION['nom'] = $row_cats['Nom'];
                   $_SESSION['mail'] =   $row_cats['Email'];
                   echo"<script>window.open('profilc.php','_self')</script>";
                  }
                  
                  
                  /*
                  $_SESSION['id'] = $userinfo['id'];
                  $_SESSION['nom'] = $userinfo['nom'];
                  $_SESSION['mail'] = $userinfo['mail'];
                  header("Location: profil.php?id=".$_SESSION['id']);
                  */
                }

              }
              else {
                $erreur = "Tous les champs doivent être complétés !";
             }
             /*
              $con= mysqli_connect("localhost","root","","membre"); // ETABLIR LA CONNEXTION AVEC LA BASE DE DONNEE
              $get_cats ="select * from utilisateurs"; 

              $run_cats= mysqli_query($con,$get_cats);

              while($row_cats= mysqli_fetch_array($run_cats))  // LOOP POUR AVOIR TOUTES LES VALEURS 
              {
                $brand_id = $row_cats['Nom'];   //-------------------------> VOICI UNE VALUER RECUPERER 
              echo $brand_id ;  // L'AFFICHAGE DE LA VALEUR RECUPERE POUR LE TESTE 

              }
              /*   --------------------------------------> VOICI LE SCRIPT POUR AVOIR UNE REQUETE DYNAMIQUE 
                $pro_id = $_GET['add_cart'];
                  $ip = getIp();   // the ip address from getIp()
                  
                  $check_pro = "SELECT * FROM cart WHERE ip_add = '$ip' AND product_id = '$pro_id'";
              */

         ?>
          </div>

         <fieldset>
<div class="container">
<div class="footer-container">
<div class="footer__logo footer-container__block">
<a href="/" title="Association Pour l'Emploi des Cadres - Nous rencontrer, c'est avancer.">

</a>
<p class="footer-motto">Nous rencontrer, c'est garantir un avenir meilleur.</p>
</div>
<div class="footer__links footer-container__block">
<div class="row">
<div class="1">
<ul class="six">
<li><a href="FAQ1.php" title="FAQ">FAQ</a></li>
<li><a href="condidat.php" title="Services de conseil">Services de conseil</a></li>
<li><a href="condition.php" title="Conditions générales">Conditions générales</a></li>

</div>
<div class="kf">
<ul class="quatre">
<li><a href="partenaire.html" title="Partenariats offres">Partenariats offres</a></li>
<li><a href="contact.php"  title="Nous rejoindre">Nous rejoindre</a></li>

<li><a href="AfricaJob.php" title="Qui sommes nous ?">Qui sommes nous ? </a></li>
</ul>
</ul>

<!--a href="http://www.tutorialehtml.com/" title="Ceci est un lien image HTML">
  <img alt="texte alternatif pour le lien image" src="/assets_tutorials/img/image.jpg" width="120" height="75" />
</a-->


<ul class="cinq">
  <a href="https://www.facebook.com/africa.job.9" ><img alt="texte alternatif pour le lien image" src="img6.jpg" width="40" height="40" /></a>
  <a href="https://twitter.com/AfricaJob2" ><img alt="texte alternatif pour le lien image" src="img7.png" width="40" height="40" /></a>
  <a href="https://www.linkedin.com/in/africa-job-15757819a/" ><img alt="texte alternatif pour le lien image" src="img8.png" width="40" height="40" /></a>
 
</ul>

</div>

</div>
</div>
</fieldset>

</body>
</html>