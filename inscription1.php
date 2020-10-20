<!DOCTYPE html>

<html>
<head>
    <title>inscription1</title>
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

    
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=membre', 'root', '', 
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                   
    if(isset($_POST['forminscription'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom= htmlspecialchars($_POST['prenom']);
        $mail = htmlspecialchars($_POST['mail']);
        $mail2 = htmlspecialchars($_POST['mail2']);
        $mdp = sha1($_POST['mdp']);
        $mdp2 = sha1($_POST['mdp2']);
        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
           $nomlength = strlen($nom);
           $prenomlength = strlen($prenom);
           if($nomlength <= 255) {
             if($prenomlength <= 255) {
              if($mail == $mail2) {
                 if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    $reqmail = $bdd->prepare("SELECT * FROM utilisateurs WHERE email = ?");
                    $reqmail->execute(array($mail));
                    $mailexist = $reqmail->rowCount();
                    if($mailexist == 0) {
                       if($mdp == $mdp2) {
                          $insertmbr = $bdd->prepare("INSERT INTO utilisateurs(Nom,Prenom, Email, Mot_de_passe) VALUES(?, ?, ?,?)");
                          $insertmbr->execute(array($nom,$prenom, $mail, $mdp));
                           echo"<script>window.open('connexion1.php','_self')</script>";
                          $erreur = "Votre compte a bien été créé ! <a href=\"connexion1.php\">Me connecter</a>";
     
                       } else {
                          $erreur = "Vos mots de passes ne correspondent pas !";
                       }
                    } else {
                       $erreur = "Adresse mail déjà utilisée !";
                    }
                 } else {
                    $erreur = "Votre adresse mail n'est pas valide !";
                 }
              } else {
                 $erreur = "Vos adresses mail ne correspondent pas !";
              }
           } else {
              $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
           }
       }
        } else {
           $erreur = "Tous les champs doivent être complétés !";
        }
     }

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
    <form action="#" method="POST">
    <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Bienvenue</h3>
                        <p>Vous avez 30s pour décrocher votre premier job</p>
                        <input type="submit" name="" value="Se Connecter"/><br/>
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
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nom *" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Prenom *" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>" />
                                        </div>
                                    
                                        
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Votre date de naissance *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Votre numero de telephone *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Ville *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Pays *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Madame </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Monsieur </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Votre mail *" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                                        </div>
                                         <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Confirmer mail *" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="mot de passe *" name="mdp" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirmer mot de passe *" name="mdp2" value="" />
                                        </div>
                                        
                                        
                                       <input type="submit" class="btnRegister"  name="forminscription" value="Je m'inscris" />
                                       
                                    </div>
                                </div>
                            </div>
                        
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Vous êtes recruteur</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nom *" name="nomr" value="<?php if(isset($nomr)) { echo $nomr; } ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Prenom *" name="prenomr" value="<?php if(isset($prenomr)) { echo $prenomr; } ?>" />
                                        </div>
                                    
                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Votre mail *" name="mailr" value="<?php if(isset($mailr)) { echo $mailr; } ?>" />
                                        </div>
                                         <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Confirmer mail *" name="mailr2" value="<?php if(isset($mailr2)) { echo $mailr2; } ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="mot de passe *" name="mdpr" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirmer mot de passe *" name="mdpr2" value="" />
                                        </div>
                                        


                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="fonction *" value="" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Madame </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Monsieur </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="texte" class="form-control" placeholder="SIRET *" value="" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="adresse *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Ville *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Pays *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="nombre" class="form-control" placeholder="Telephone *" value="" />
                                        </div>
                                        
                                
                                        <input type="submit" class="btnRegister" name="forminscriptionrecruteur" value="Je m'inscris" />
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

            </div>
</form>

  <?php 

    
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=membre', 'root', '', 
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                   
    if(isset($_POST['forminscription'])) {
        $nomr = htmlspecialchars($_POST['nomr']);
        $prenomr= htmlspecialchars($_POST['prenomr']);
        $mailr = htmlspecialchars($_POST['mailr']);
        $mailr2 = htmlspecialchars($_POST['mailr2']);
        $mdpr = sha1($_POST['mdpr']);
        $mdpr2 = sha1($_POST['mdpr2']);
        if(!empty($_POST['nomr']) AND !empty($_POST['prenomr']) AND !empty($_POST['mailr']) AND !empty($_POST['mailr2']) AND !empty($_POST['mdpr']) AND !empty($_POST['mdpr2'])) {
           $nomrlength = strlen($nomr);
           $prenomrlength = strlen($prenomr);
           if($nomrlength <= 255) {
             if($prenomrlength <= 255) {
              if($mailr == $mailr2) {
                 if(filter_var($mailr, FILTER_VALIDATE_EMAIL)) {
                    $reqmailr = $bdd->prepare("SELECT * FROM utilisateurs WHERE email = ?");
                    $reqmailr->execute(array($mailr));
                    $mailexist = $reqmail->rowCount();
                    if($mailexist == 0) {
                       if($mdpr == $mdpr2) {
                          $insertmbr = $bdd->prepare("INSERT INTO utilisateurs(Nom,Prenom, Email, Mot_de_passe) VALUES(?, ?, ?,?)");
                          $insertmbr->execute(array($nomr,$prenomr, $mailr, $mdpr));
                           echo"<script>window.open('connexion1.php','_self')</script>";
                          $erreur = "Votre compte a bien été créé ! <a href=\"connexion1.php\">Me connecter</a>";
     
                       } else {
                          $erreur = "Vos mots de passes ne correspondent pas !";
                       }
                    } else {
                       $erreur = "Adresse mail déjà utilisée !";
                    }
                 } else {
                    $erreur = "Votre adresse mail n'est pas valide !";
                 }
              } else {
                 $erreur = "Vos adresses mail ne correspondent pas !";
              }
           } else {
              $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
           }
       }
        } else {
           $erreur = "Tous les champs doivent être complétés !";
        }
     }

?>

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