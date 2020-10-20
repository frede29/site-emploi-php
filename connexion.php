<!DOCTYPE html>
<html lang="en">
<head>
  <title>Connexion</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="index.css">
</head>

   <?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membres', 'root', '');

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: profil.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

<html>
   <head>
      <title>connexion</title>
      <meta charset="utf-8">
   </head>
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
                   <a class="dropdown-item" href="#">Accueil</a>
                   <a class="dropdown-item" href="#">Nos partenaires</a>
                   <a class="dropdown-item" href="#">Nous contacter</a>
                   <a class="dropdown-item" href="#">déposer un CV</a>
                </div>
        </li>
    </ul>


                <div class="trois">
        
                    <a class="nav-link" href="inscription.php">Inscription</a>
                    <a class="nav-link" href="connexion.php">Connexion</a>
                    <a class="nav-link" href="#">Accueil</a>
                </div>
  
  
</nav>
</nav>
      <div align="center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="connexion.php">
            <input type="email" name="mailconnect" class="form-control" placeholder="Mail" /><br><br>
            <input type="password" name="mdpconnect" class="form-control" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
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
<li><a href="/toutes-nos-faq.html" title="FAQ">FAQ</a></li>
<li><a href="/tous-nos-services.html" title="Services de conseil">Services de conseil</a></li>
<li><a href="/infos-legales.html" title="Conditions générales">Conditions générales</a></li>
<li><a href="/qui-sommes-nous.html" title="Qui sommes nous ?">Qui sommes nous ? </a></li>
</ul>
</div>
<div class="kf">
<ul class="quatre">
<li><a href="" title="Partenariats offres">Partenariats offres</a></li>
<li><a href="" target="_blank" title="Nous rejoindre">Nous rejoindre</a></li>
<li><a href="" target="_blank" title="Site corporate">Site corporate</a></li>
<li><a href="" target="_blank" title="Salons Apec">Salons Africajob</a></li>

</ul>

<!--a href="http://www.tutorialehtml.com/" title="Ceci est un lien image HTML">
  <img alt="texte alternatif pour le lien image" src="/assets_tutorials/img/image.jpg" width="120" height="75" />
</a-->


<ul class="cinq">
  <a href="" ><img alt="texte alternatif pour le lien image" src="img6.jpg" width="40" height="40" /></a>
  <a href="" ><img alt="texte alternatif pour le lien image" src="img7.png" width="40" height="40" /></a>
  <a href="" ><img alt="texte alternatif pour le lien image" src="img8.png" width="40" height="40" /></a>
 
</ul>

</div>

</div>
</div>
</fieldset>

   </body>
</html>