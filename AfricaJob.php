<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="index.css">
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 450px;
      animation: glisse 10s infinite;
     
  }
  #facade{
    position: relative;
  }
  .con{
    position: absolute;
    left: 65px; 
    top: 45px ; 
    z-index: 10;
    padding-left: 200px;
    padding-top: 15%;
    color: #FFFFFF;

  }

  .trois{
    padding-left: 750px;
  }
  .raison{
    padding-left: 400px;
  }
  .row{
    padding-left: 100px;
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
.sept {
  border-color: grey;
  border-style: double;
  background-color: #E0F8F1;
  margin-right: 15%;
  margin-left: 15%;
  height: 100px;

}
.huit{
  padding-left: 700px;
 position: absolute;
    z-index:  90;
    top: 610px;
    left: 150px
}
h4{
  position: absolute;
    z-index:  90;
    top: 610px;
    left: 320px;
    

  }
  h5{
  position: absolute;
    z-index:  90;
    top: 640px;
    left: 320px
  }
  .neuf{
  padding-left: 700px;
 position: absolute;
    z-index:  90;
    top: 730px;
    left: 150px
}
.dix{
  position: absolute;
    z-index:  90;
    top: 730px;
    left: 320px
  }
  .onze{
  position: absolute;
    z-index:  90;
    top: 760px;
    left: 320px
  }
  .quatorze{
  padding-left: 700px;
 position: absolute;
    z-index:  90;
    top: 850px;
    left: 150px
}
.douze{
  position: absolute;
    z-index:  90;
    top: 850px;
    left: 320px
  }
  .treize{
  position: absolute;
    z-index:  90;
    top: 880px;
    left: 320px
  }
  .quinze{
  position: absolute;
    z-index:  90;
    top: 970px;
    left: 320px
}
.seize{
  position: absolute;
    z-index:  90;
    top: 1000px;
  }
  .seze{
  position: absolute;
    z-index:  90;
    top: 980px;
    left: 850px
  }
  </style>


</head>
<body>
  
  <!--header-->
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
                   <a class="dropdown-item" href="space.php">Acceuil</a>
                   <a class="dropdown-item" href="partenaire.html">Nos partenaires</a>
                   <a class="dropdown-item" href="contact.php">Nous contacter</a>
                   <a class="dropdown-item" href="depotcv.html">déposer un CV</a>
                </div>
        </li>
    </ul>


                <div class="trois">
        
                    <a class="nav-link" href="inscription1.php">Inscription</a>
                    <a class="nav-link" href="connexion1.php">Connexion</a>
                    <a class="nav-link" href="Acceuil.html">Accueil</a>
                </div>
  
  
</nav>
</nav>
<!--AfricaJOb-->
<h1>Qui sommes nous ?</h1>

<p>Africajob est un site d’offre d’emploi offrant la possibilité à toutes personnes possédant les compétences et les diplômes requis de pouvoir travailler dans toute l’Afrique et donc d’avoir une carrière internationale et la découverte des cultures exterieures.<br>    

Les missions de service public de AfricaJob sont financées par une cotisation obligatoire due pour chaque salarié inscrit au titre des article 4 et 4 bis du régime de retraite et de prévoyance des cadres institué par la convention collective nationale.<br>

Cette cotisation est recouvrée par les institutions de retraite complémentaires des cadres en même temps que les cotisations de retraite.<br>

Elle se calcule sur le salaire brut limité à 4 fois le plafond de la sécurité sociale.<br></p>

<br>



VOUS ÊTES UNE ENTREPRISE
Déclarer les cotisations AficaJob

La déclaration des cotisations AfricaJob est effectuée pour toutes les entreprises du régime général, fichier unique dématérialisé généré par les logiciels de paie et transmis mensuellement .

La cotisation AfricaJob est déclarée pour les salariés :

Le montant de la cotisation individuelle AfricaJob est porté à la rubrique « Code de cotisation - S21.G00.81.001 »:

valeur « 064 – Montant de cotisation Agirc, y compris Apec ».  
valeur « 105 – « Montant de cotisation régime unifié Agirc-Arrco, 


Payer les cotisations AfricaJob

En fonction du nombre de salariés de l’entreprise, les cotisations sont réglées :

chaque mois pour les entreprises de plus de 9 salariés ou les entreprises jusqu’à 9 salariés le souhaitant
chaque trimestre pour les entreprises jusqu’à 9 salariés
Trois modalités de règlement sont possibles :

Via la DSN par prélèvement SEPA
Via « cotizen.fr », par prélèvement SEPA ou par carte bancaire
Par virement bancaire

<!--AfricaJOb-->

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
<li><a href="partenaire.php" title="Partenariats offres">Partenariats offres</a></li>
<li><a href="contact.php"  title="Nous rejoindre">Nous rejoindre</a></li>

<li><a href="AfricaJob.php" title="Qui sommes nous ?">Qui sommes nous ? </a></li>
</ul>

<!--a href="http://www.tutorialehtml.com/" title="Ceci est un lien image HTML">
  <img alt="texte alternatif pour le lien image" src="/assets_tutorials/img/image.jpg" width="120" height="75" />
</a-->


<ul class="cinq">
  <a href="https://www.facebook.com/africa.job.9?__tn__=%2Cd-]-h-R&eid=ARDNlZovW0QGm6DCkigzcubgJBfGQWbO_UOlCAdo5QmS9AKEpi7LTNenzYkUAciQkEIHHwmq0Y8Zg7tT" ><img alt="texte alternatif pour le lien image" src="img6.jpg" width="40" height="40" /></a>
  <a href="https://twitter.com/AfricaJob2" ><img alt="texte alternatif pour le lien image" src="img7.png" width="40" height="40" /></a>
  <a href="https://www.linkedin.com/in/africa-job-15757819a/" ><img alt="texte alternatif pour le lien image" src="img8.png" width="40" height="40" /></a>
 
</ul>

</div>

</div>
</div>
</fieldset>

</body>
</html>