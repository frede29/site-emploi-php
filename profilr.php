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

  </style>
</head>ss
<?php 
  $bdd = new PDO('mysql:host=127.0.0.1;dbname=membre', 'root', '', 
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    if(isset($_POST['connexion'])) {                
  $titre=$_POST['titre'];
  $type=$_POST['type'];
  $lieu=$_POST['lieu'];
  $description=$_POST['description'];


  $query="INSERT INTO offre_d_emploi(titre,type,lieu,description) VALUES ('$titre','$type','$lieu','$description')";
  $result=mysql_query($query);
  mysql_close();
}




 ?>
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
        
                    
                    <a class="nav-link" href="deconnexion.php">deconnexion</a>
                    <a class="nav-link" href="Acceuil.html">Nom</a>
                </div>
  
  
  
</nav>
</nav> <br><br>

 
 <div id="accordion">

  <div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapseOne">
        <div class="shadow-lg p-4 mb-4 bg-white">Mettre à jour votre profil</div>
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
        <div class="col-md-6">
                  <div class="form-group">
                    <form action="" method="POST">
                                            <input type="email" class="form-control" placeholder="Votre mail *" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nom *" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                                        </div>
                                                                           
                                        
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Votre date de naissance *" name="dnais" value="<?php  echo $dn;  ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10"  class="form-control" placeholder="Votre numero de telephone *" name="num" value="<?php if(isset($nm))  echo $nm;  ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ville" placeholder="Ville *" value="<?php if(isset($vl))  echo $vl;  ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="pays" placeholder="Pays *"  value="<?php  if(isset($py))  echo $py;  ?>" /><br>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nom d'entreprise" name="Nom d'entrepris" value="<?php if(isset($Nom)) { echo $Nom; } ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="numero de siret" name="numero de siret" value="<?php if(isset($id_entreprise)) { echo $id_entreprise; } ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Domaine" name="Domaine" value="<?php if(isset($Domaine)) { echo $Domaine; } ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Description" name="Description" value="<?php if(isset($Description)) { echo $Description; } ?>" />
                                        </div>
                                        
                                            <input type="submit" class="btnRegister"  name="forminscription" value="Valider" />
                                            </form>
                                        </div>
                                      </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        <div class="shadow-lg p-4 mb-4 bg-white">Nos offres</div>
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <p>Aucune offre disponible</p>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        <div class="shadow-lg p-4 mb-4 bg-white">Deposer une nouvelle offre</div>
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
         <div class="container contact">
  <div class="row">
   
    <div class="col-md-9">
      <div class="contact-form">
        <div class="form-group">
         

          <div class="form-group">
          <label class="control-label col-sm-2" for="lname">titre:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="lname" placeholder="intitulé de l'offre" name="lname">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="lname">type:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="lname" placeholder="type de contrat" name="lname">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-2" for="lname">Lieu:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="lname" placeholder="lieu" name="lname">
          </div>
        </div>

       
       
        <div class="form-group">
          <label class="control-label col-sm-2" for="comment">description:</label>
          <div class="col-sm-10">
          <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
          <input class="btn btn-lg btn-primary btn-block col-2 button button--primary js-form-submit form-submit form-control" data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Envoyer" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 
               </div> 
              </div> 
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