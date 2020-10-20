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
  margin-top: 35% ;
}
.vingt{
  border: ridge;
  border-color: navy
  margin-left:30px;
  margin-right: 30px;
  float: right;
  width: 30%;             
  
}
.vin{
  border: ridge;
  border-color: navy;
  
  background-color: #DBC1F5;
float: left;
    
  
}
h2{
  text-align: center;
  text-decoration: underline;
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
                   <a class="dropdown-item" href="contact.html">Nous contacter</a>
                   <a class="dropdown-item" href="depotcv.html">déposer un CV</a>
                </div>
        </li>
    </ul>


                <div class="trois">
        
                    <a class="nav-link" href="inscription1.php">Inscription</a>
                    <a class="nav-link" href="connexion1.php">Connexion</a>
                    <a class="nav-link" href="Acceuil.html">Acceuil</a>
                </div>
  
  
  
</nav>
</nav> 
<div id="facade">


  


<img src="entreprise.jpg" width="100%" height="700" >



<!-- Les entreprises -->

<div class="container-bordure">
 <h2> Nos Partenaires</h2> <br>
 <div class="Entreprise">
   

<div class="vingt">
   UNILEVER<br>  <img src="unilever.jpg" width="50" height="50"><p> <a href="https://www.unilever.com/news/press-releases/2008/08-12-04-Unilever-in-Cote-d-Ivoire-Disposal-completed.html">Afficher plus...</a></p><br>
 </div>    
<div class="vingt">
    NESTLE <br> <img src="nestle.jpg" width="50" height="50"><p> <a href="https://www.nestle-cwa.com/en/investors/cote-d%27ivoire">Afficher plus...</a></p><br>
</div>
<div class="vingt">
    SENELEC<br> <img src="senelec.jpg"  width="50" height="50"><p><a href="http://www.senelec.sn/">Afficher plus...</a></p><br> 
</div>
<div class="vingt">    
    DANGOTE-CEMENT<br> <img src="Dangote-Cement.jpg" width="50" height="50"><p>  <a href="http://www.dangotecement.com/">Afficher plus..</a></p><br>
 </div> 
 <div class="vingt"> 
      SONANGOL <br><img src="Sonangol.png" width="50" height="50"><p>  <a href="http://www.sonangol.co.ao/">Afficher plus...</a></p><br>
</div>
<div class="vingt">
     CEVITAL<br> <img src="langfr-1920px-Cevital_logo_2016.svg.png"  width="50" height="50"><p>  <a href="https://www.cevital.com/">Afficher plus...</a></p><br>
 </div>
 <div class="vingt">   
     SONATRACH<br> <img src="Sonatrach.png" width="50" height="50"><p>  <a href="https://sonatrach.com/">Afficher plus...</a></p><br>
 </div>
 <div class="vingt">
    STIR<br>  <img src="Société_tunisienne_des_industries_de_raffinage_Logo.JPEG"   width="50" height="50"><p> <a href="http://www.stir.com.tn/">Afficher plus...</a></p><br>
</div>
<div class="vingt">
    INTELCIA<br>  <img src="intelcia.jpg"   width="50" height="50"><p> <a href="https://www.emploi.ci/offre-emploi-cote-ivoire/conseiller-technique-666264">Afficher plus...</a></p><br>
</div>

      

</div>
 <style>
.Entreprise{
  text-align: center;
  margin-left: 10px;
  
}
</style><br><br>
<!-- Les entreprises -->
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