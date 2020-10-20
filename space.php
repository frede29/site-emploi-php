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




<div id="facade">


  
<table>
<div class="con">
  <form action="result.php" id="searchthis" method="get">
      
   <div class="row">
      <div class="col">
         <input type="text"  id="q2" name="src_mot"  class="form-control" maxlength="250" placeholder="Mot-clé (ex : commercial)">
     </div>
    <div class="col">
       <input type="text" id="q2" name="src_lieu" class="form-control" maxlength="250" placeholder="Lieu">
    </div>
    <div class="col">


        <select type="text"  name="q" id="q2" size="1" placeholder="Type de contrat" class="form-control">
          <OPTION>Type de contrat
<OPTION>CDI
<OPTION>CDD
<OPTION>Stage
<OPTION>Contrat d'apprentissage
</SELECT>
</div>
    <div class="col">
       <button type="submit" class="btn btn-danger mb-5"  style="    margin-top: 0px;">Rechercher</button>

    </div>
  </div>


      
    
  </form>
  
</div>
</table>
 <input type="hidden" id="intcidSearch1" value="navigation_nhpso_searchHeader">
</div>
<div class="container-fluid"><br>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" alt="Tours1" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="2.jpg" alt="Tours2" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="3.jpg" alt="Tours3" width="1100" height="500">
    </div>
   
  </div>

 

  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div><br>
</div>

<!--offres emploi-->
<a href="https://www.journaluniversitaire.com/akilee/"><div class="sept">
<img src="emploi.jpg" width="90" height="90">
 <h4>Administrateur systeme (H/F)</h4>
 <h5>Akilee</h5>

 <div class="huit">
 <img src="contrat.jpg" width="20" height="20">CDI<br>
 <img src="localisation.jpg" width="20" height="20">Dakar(Senegal)

</div>
</div>
</a>

<a href="https://www.careerjet.co.za/jobview/53a4dbd71164cbbb02dfa41a85150c6b.html"><div class="sept">
<img src="teacher.jpg" width="90" height="90">
 <h4 class="dix">Teacher (H/F)</h4>
 <h5 class="onze">Gauteng</h5>

 <div class="neuf">
 <img src="contrat.jpg" width="20" height="20">CDI<br>
 <img src="localisation.jpg" width="20" height="20">Johannesburg(Afrique du Sud)

</div>
</div>
</a>

<a href="https://www.iagora.com/work/fr/offre/stage-nigeria-administration/915778"><div class="sept">
<img src="emploi.jpg" width="90" height="90">
 <h4 class="douze">Intern - Public information (H/F)</h4>
 <h5 class="treize">UNIC Lagos</h5>

 <div class="quatorze">
 <img src="contrat.jpg" width="20" height="20">Stage<br>
 <img src="localisation.jpg" width="20" height="20">Lagos(Nigeria)

</div>
</div>
</a>

<a href="https://www.emploi.ci/offre-emploi-cote-ivoire/conseiller-technique-666264"><div class="sept">
<img src="emploi.jpg" width="90" height="90">
 <h4 class="quinze"> Conseiller technique (H/F)</h4>
 <h5 class="seize">INTELCIA COTE D'IVOIRE</h5>

 <div class="seze">
 <img src="contrat.jpg" width="20" height="20">Stage<br>
 <img src="localisation.jpg" width="20" height="20">Abidjan(Cote D'ivoire)

</div>
</div>
</a>




<div class="jumbotron jumbotron-fluid">
  <div class="container text-center ">
    <h2  style=" padding-left: 0px ;"> Quelque Partenaires</h2>
  </div>
</div>

<!-- Les entreprises -->

<div class="container-bordure">
 <div class="Entreprise">
   
 <a href="https://www.emploi.ci/offre-emploi-cote-ivoire/conseiller-technique-666264"><img src="intelcia.jpg" width="150" height="150"></a>
      <a href="https://www.nestle-cwa.com/en/investors/cote-d%27ivoire"><img src="nestle.jpg" width="150" height="150"></a>
     <a href="http://www.senelec.sn/"> <img src="senelec.jpg"  width="150" height="150"></a>
    
      <a href="http://www.dangotecement.com/"><img src="Dangote-Cement.jpg" width="150" height="150"></a>
   
      <a href="http://www.sonangol.co.ao/"><img src="Sonangol.png" width="150" height="150"></a>
      <a href="https://www.cevital.com/"><img src="langfr-1920px-Cevital_logo_2016.svg.png"  width="150" height="150"></a>
    
      <a href="https://sonatrach.com/"><img src="Sonatrach.png" width="150" height="150"></a>
 
      <!--a href="http://www.stir.com.tn/"><img src="Société_tunisienne_des_industries_de_raffinage_Logo.JPEG"   width="150" height="150"></a-->

</div>
 <style>
.Entreprise{
  text-align: center;
  margin-left: 10px;
  
}

</style><br><br>
<!-- Les entreprises -->
</div>





<div class="jumbotron jumbotron-fluid">
  <div class="container text-center ">
  <h2 style=" padding-left: 0px ;" > Trois bonnes raisons d'utiliser Africajob   </h2>
    
  </div>
</div>

 <div class="raison">


                                         </div><br>
    <div class="row">
      <div class="col-sm-4 bloc class="text-center"">
        <img src="https://www.jobijoba.com/fr/generic/resources/images/index/illu-lettre.svg" width="30%" height="auto" >
        <div class="c_title_sm">Ne ratez aucune offre</div>
        <div class="c_text_primary">Soyez alerté par email dès qu'une nouvelle<br> offre d'emploi correspond à votre profil</div>
        <a
          class="c_link_next"
          href="#"
                    rel="nofollow"
          ct="home_use_jj_alerts"
        >
          Créer une alerte email        </a>
      </div>
      <div class="col-sm-4 bloc">
        <img src="https://www.jobijoba.com/fr/generic/resources/images/index/illu-reveil.svg" width="30%" height="auto">
        <div class="c_title_sm">Gagnez du temps</div>
        <div class="c_text_primary">Jobijoba regroupe pour vous toutes les offres<br> du marché, quel que soit le secteur ou<br> le type de poste que vous visez</div>
        <a
          class="c_link_next"
          href="space.php"
          ct="home_use_jj_search"
        >
          Faire une recherche       </a>
      </div>
      <div class="col-sm-4 bloc">
        <img src="https://www.jobijoba.com/fr/generic/resources/images/index/illu-graph.svg" width="30%" height="auto">
        <div class="c_title_sm">Plus besoin de chercher</div>
        <div class="c_text_primary">Vous avez un CV ? Grâce à son analyse,<br> nous trouvons pour vous les offres d’emploi<br> qui correspondent à votre profil.</div>
        <a
          class="c_link_next"
          href="space.php"
          ct="home_use_jj_resume"
        >
          Découvrir mes offres        </a>
      </div>
    </div>
  </div>
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