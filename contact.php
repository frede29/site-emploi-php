<?php
    if(isset($_POST['message'])){
      
        $header  = 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $header .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('africajob9@gmail.com', 'Envoi depuis page Contact', $message, $header);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
    ?>
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


.vingt{
  border-style: ridge;
  border-color: blue;
  
 background-color: navy;
}
h6{
  text-align: center;
  text-decoration: underline;
}
label{
  text-align: center;ss
}
.set{
  background-color: #F2F2F2;
  border: hidden;
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
                    <a class="nav-link" href="Acceuil.html">Acceuil</a>
                </div>
  
  
</nav>
</nav> 
<div id="facade">


  
<table>
<div class="con">
<div class="vingt" >
  
    
    <div id="not-valide" class="alert-text pl-4 text-left m-auto p-auto alert-d-none">
      <h6>Contactez-nous</h6> 
     <p> Cote d'ivoire : +22509750494 </p>
     <p> Senegal : +221069494949 </p>
     <p> Algerie : +2130549346723</p>
      du lundi au vendredi de 9h à 17h GMT<br><br><br>
      
  </div>
</div>	
</div>
</table>

<img src="entreprise.jpg" alt="Tours1" width="1500" height="700"><br>

</div>



<div class="set"><br>
 <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div id="ultimate-heading-14915e0f6dd288704" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-14915e0f6dd288704 uvc-4543 " data-hspacer="no_spacer"  data-halign="center" style="text-align:center"><div class="uvc-heading-spacer no_spacer" style="top"></div><div class="uvc-main-heading ult-responsive"  data-ultimate-target='.uvc-heading.ultimate-heading-14915e0f6dd288704 h2'  data-responsive-json-new='{"font-size":"","line-height":""}' ><h2 style="font-family:'Poppins';font-weight:500;">POSER UNE QUESTION </h2></div></div><div class="vc_empty_space"   style="height: 32px" ><span class="vc_empty_space_inner"></span></div>






<form method="POST" action="">
 
<div class="form-group">
  <label for="usr">Nom:</label>
  <input type="text" class="form-control" id="usr" placeholder="Votre nom" name="nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
</div>
<div class="form-group">
  <label for="pwd">Email:</label>
  <input type="email" class="form-control" id="usr" placeholder="Votre email" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>">
</div>
 

 
 <div class="form-group">
  <label for="comment">Message</label>
  <textarea class="form-control" name="message" rows="5" id="comment"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
</div>  

  

 <button><input type="button" class="btn btn-primary" Default type="submit" id="edit-submit" name="op" value="Envoyer" /></button>

</form>

<?php
    if(isset($msg))
    {
      echo $msg;
    }
    ?>
<!--table>
               <tr>
                  <td align="right">
                     <label for="pseudo">Nom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre nom" id="nom" name="nom" >
               </tr>
               <tr>
                  <td align="right">
                     <label for="pseudo">Prenom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre prenom" id="prenom" name="prenom" >
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail">Mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="mail" name="mail"  />
                  </td>
               </tr>
               
               <tr>
                  <td align="right">
                     <label for="mdp">Message:</label>
                  </td>
                  <td>
                  <textarea placeholder="Message" name="com" rows="7" cols="31"> </textarea>
               </td>
               <input type="submit" name="forminscription" value="envoyer" />
            </tr>



</table-->





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



