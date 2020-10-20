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
</nav> <br><br>

<section class="subheader"> 
      <div class="container"> 
       <div class="row"> 
        <div class="col-md-8"> 
         <div class="subheader__content-wrapper"> 
          <div class="subheader__content"> 
           <h1 class="subheader__title">VOUS AVEZ UNE QUESTION ?</h1> 
          </div> 
          <!-- //.subheader__content --> 
         </div> 
         <!-- //.subheader__content-wrapper --> 
        </div> 
        <!-- //.col-md-8 --> 
       </div> 
       <!-- //.row --> 
      </div> 
      <!-- //.container --> 
     </section> 
     <!-- //.subheader --> 
    </header> 
    <main id="mainContent"> 
     <section class="faq-content"> 
      <div class="container"> 
       <div class="row"> 
        <div class="col-sm-4 col-md-3"> 
         <aside> 
          <div class="tab-navigation tab-navigation--faq"> 
           <ul id="faq-tab" class="tab-navigation__list nav nav-tabs"> 

    <li class="tab-navigation__item"> <a class="tab-navigation__link" href="#tab2" data-toggle="tab"> Compte AfricaJob  </a> </li>


  <li class="tab-navigation__item"> <a class="tab-navigation__link" href="#tab3" data-toggle="tab"> Condidature AfricaJOb </a> </li> 
            <li class="tab-navigation__item"> <a class="tab-navigation__link" href="#tab4" data-toggle="tab"> Recrutement </a> </li><br> 
       
           </ul> 
          </div> 
         </aside> 
        </div> 
        <div class="col-sm-8 col-md-9"> 
         <main> 
          <div id="faq-tab-content" class="tab-content tab-content--faq"> 
           <div class="tab-pane fade in active" id="tab1"> 
            <div class="faq-accordion" id="accordion1" role="tablist" aria-multiselectable="true"> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading11"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse11" aria-expanded="false" aria-controls="collapse11">. </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11"> 
               <div class="panel-body"> 
                <p></p> 
                <p>.</p> 
               </div> 
              </div> 
             </div> 
             
             <div class="panel panel-default"> 
              
              <!-- //.panel-heading --> 
              <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13"> 
               <div class="panel-body"> 
                <p></p> 
                <p>. <a href="https://employers.indeed.com/p/post-job?hl=fr_FR&amp;co=FR">.</a> ..</p> 
                <p>. <a href="/recrutement/deposer-une-annonce">.</a> . <a href="/recrutement/contact">.</a> .</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading14"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse14" aria-expanded="false" aria-controls="collapse14"> .</a> </h4> 
              </div> 

               <!-- //.panel-heading --> 
              <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14"> 
               <div class="panel-body"> 
                <p></p> 
                <p>.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading15"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse15" aria-expanded="false" aria-controls="collapse15">. </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15"> 
               <div class="panel-body"> 
                <p></p> 
                <p>. <a href="/recrutement/contact">.,</a>.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading16"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse16" aria-expanded="false" aria-controls="collapse16">. </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16"> 
               <div class="panel-body"> 
                <p></p> 
                <p>.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading17"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse17" aria-expanded="false" aria-controls="collapse17"> . </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17"> 
               <div class="panel-body"> 
                <p></p> 
                <p>.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading18"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse18" aria-expanded="false" aria-controls="collapse18">. </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18"> 
               <div class="panel-body"> 
                <p></p> 
                <p>.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading19"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse19" aria-expanded="false" aria-controls="collapse19"> . </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19"> 
               <div class="panel-body"> 
                <p></p> 
                <p>.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading110"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse110" aria-expanded="false" aria-controls="collapse110"> .</a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse110" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading110"> 
               <div class="panel-body"> 
                <p></p> 
                <p>.<a href="/recrutement/integration-ats">.</a> . <a href="/recrutement/deposer-une-annonce">.</a> .</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading111"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse111" aria-expanded="false" aria-controls="collapse111"> .</a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse111" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading111"> 
               <div class="panel-body"> 
                <p></p> 
                <p>.</p> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div>

            
           <div class="tab-pane fade" id="tab2"> 
            <div class="faq-accordion" id="accordion2" role="tablist" aria-multiselectable="true"> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading21"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse21" aria-expanded="false" aria-controls="collapse21"> COMMENT PROLONGER L'ABONNEMENT À LA RÉCEPTION DES OFFRES PAR E-MAIL ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Votre abonnement à la réception des offres par e-mail est valable pour une durée de 12 mois à compter de la date de confirmation de votre abonnement.

Pour prolonger votre abonnement à la réception des offres par e-mail (alerte e-mail) :

Par e-mail :
Une semaine avant la date de suspension, vous recevez un e-mail pour vous proposer de prolonger votre abonnement.
Il vous suffit de cliquer sur le lien " Prolonger " présent dans cet e-mail pour prolonger votre abonnement de 12 mois.

Si vous n'avez pas fait le nécessaire, le lendemain de la date de suspension vous recevez à nouveau un e-mail pour vous proposer de renouveler votre abonnement.
Là encore, il vous suffit de cliquer sur le lien "Renouveler" présent dans cet e-mail pour renouveler votre abonnement pour 12 mois.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading22"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse22" aria-expanded="false" aria-controls="collapse22"> COMMENT CRÉER UN PROFIL AfricaJob ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading22"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Créez votre Profil en vous connectant sur votre compte AfricaJob :

Accédez à l’univers Candidat en cliquant sur le bouton « Inscription »,
 connectez-vous à votre compte avec votre adresse mail et votre mot de passe,
Vous accédez à votre Espace personnel. Dans la rubrique « Mon Profil », cliquez sur « Créer mon Profil ».
 

Votre Profil est créé.

Renseignez ensuite les 5 rubriques obligatoires pour pouvoir devenir visible des recruteurs :

Carte de visite,
Souhaits professionnels,
CV,
Moments clés,
Compétences et Langues</p> 
               </div> 
              </div> 
             </div> 
            
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading24"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse24" aria-expanded="false" aria-controls="collapse24"> POURQUOI CRÉER UN PROFIL AfricaJob ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading24"> 
               <div class="panel-body"> 
                <p></p> 
                <p>
Le Profil AfricaJob est une occasion unique pour vous démarquer des autres candidats.

Décrivez votre objectif professionnel, votre projet et vos compétences clés.
Définissez vos souhaits professionnels  (lieux, fonctions, salaire ciblés).
Démarquez-vous en détaillant vos principales expériences et vos atouts différenciateurs : un talent particulier ou un savoir-faire.
Vous êtes visible par 30 0000 recruteurs sur la CandidAfricaJob, la Profilthèque.
</p> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
           <div class="tab-pane fade" id="tab3"> 
            <div class="faq-accordion" id="accordion3" role="tablist" aria-multiselectable="true"> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading31"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse31" aria-expanded="false" aria-controls="collapse31">  </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse31" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading31"> 
               <div class="panel-body"> 
                <p></p> 
                <p>.<span class="citation-needed">.</span> .</p> 
                <div class="FAQ-citation-source">
                  .
                </div> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading32"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse32" aria-expanded="false" aria-controls="collapse32"> COMMENT POSTULER À UNE OFFRE ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse32" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading32"> 
               <div class="panel-body"> 
                <p></p> 
                <p>En cliquant sur le bouton « Postuler » à partir de l’offre sélectionnée, vous allez transmettre votre dossier de candidature.



 

Si vous êtes connecté à votre compte, suivez les étapes suivantes :

Choisir de candidater avec votre cv ou avec votre profil
Joindre votre lettre de motivation (si cela est précisé) ou compléter le paragraphe : « ajouter un message au recruteur »
Vérifier que tous les champs soient complétés dans la rubrique« données complémentaires »
Valider votre dossier de candidature en cliquant sur le bouton "envoyer ma candidature"
 

Votre candidature est automatiquement transmise au recruteur. Un accusé de transmission vous sera adressé par e-mail.

 

Si vous postulez sans compte :

Renseigner votre adresse mail et cliquer sur le bouton « continuer »
Télécharger votre CV Joindre votre lettre de motivation (si cela est précisé) ou compléter le paragraphe : « ajouter un message au recruteur »
Cocher « j’ai pris connaissance des conditions générales d’utilisation et accepte que l’Apec utilise mes données à caractère personnel dans le cadre de ma candidature
Recopier le captcha dans le champ prévu à cet effet
Valider votre dossier de candidature en cliquant sur le bouton « envoyer ma candidature »
 

Votre candidature est automatiquement transmise au recruteur. Un accusé de transmission vous sera adressé par e-mail.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading33"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse33" aria-expanded="false" aria-controls="collapse33"> COMMENT SUIVRE LES CONTACTS RECRUTEURS POUR UN PROFIL PUBLIÉ ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse33" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading33"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Les recruteurs peuvent vous adresser un message suite à un Profil publié via le site AfricaJob. Si vous avez choisi de rester anonyme, le recruteur vous contacte via le site sans connaître votre identité.

Il vous appartient de reprendre contact si l'entreprise vous intéresse.

Pour consulter les messages des recruteurs sur votre Profil publié, vous devez vous être identifié(e) au préalable, en saisissant votre adresse e-mail (ou votre identifiant) et votre mot de passe.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading34"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse34" aria-expanded="false" aria-controls="collapse34"> QUI PEUT POSTULER AUX OFFRES ? </a></h4> 
              </div> 

              <!-- //.panel-heading --> 
              <div id="collapse34" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading34"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Vous êtes cadre ou vous souhaitez le devenir,

                 Vous pouvez postuler gratuitement aux offres diffusées sur le site de AfricaJob.</p> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
           <div class="tab-pane fade" id="tab4"> 
            <div class="faq-accordion" id="accordion4" role="tablist" aria-multiselectable="true"> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading41"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapse41" aria-expanded="false" aria-controls="collapse41"></a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse41" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading41"> 
               <div class="panel-body"> 
                <p></p> 
                <p></p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading42"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapse42" aria-expanded="false" aria-controls="collapse42"> LORSQUE J’ESSAIE DE JOINDRE MON FICHIER, UN MESSAGE D’ERREUR M’INDIQUE QU’IL DOIT CONTENIR AU MOINS 500 CARACTÈRES. POURQUOI ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse42" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading42"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Votre objectif est que le recruteur puisse ouvrir votre cv : ce contrôle sert à s’assurer que cela est possible.

Ce message apparaît : lorsque votre cv est numérisé à partir d’un document papier ou importé à partir d’un fichier image (jpg, jpeg, gif, psd).

 

Si vous joignez un fichier contenant votre CV protégé par un mot de passe.

 

Ainsi, l'enregistrement du CV au format PDF doit se faire uniquement à partir d’un document texte (format : doc, docx ou rtf).

 

Cette configuration facilite la recherche par « mots clés » effectuée par le recruteur.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading43"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapse43" aria-expanded="false" aria-controls="collapse43"> COMMENT AJOUTER UNE RECHERCHE D'OFFRES À L'ALERTE E-MAIL ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse43" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading43"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Vous pouvez recevoir les offres par e-mail pour cinq recherches différentes.

Vous êtes déjà abonné à la réception des offres par e-mail pour une première recherche, vous souhaitez en ajouter jusqu’à quatre autres :

Sur la page d’accueil d’AfricaJob, sélectionnez « Vous êtes candidat »,
Cliquez sur "Mon Espace" (en haut à droite),
Connectez-vous à votre compte avec votre adresse mail (ou votre identifiant) et votre mot de passe,
Dans la rubrique « mes recherches », cliquez sur «créer une recherche»,
Donnez un nom à votre recherche et complétez les différents critères de recherche En bas de page,
Cliquez sur« valider et continuer » et sur l’écran suivant « confirmer la création de la recherche ».
 

La recherche créée apparaît dans la liste de vos recherches : le lien « voir les xx offres correspondant aux critères » est visible.

Pour recevoir cette sélection d’offres par mail, cliquez sur le bouton « alerte mail » L’alerte est activée..</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading44"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapse44" aria-expanded="false" aria-controls="collapse44"> COMMENT RECEVOIR UNE SÉLECTION D'OFFRES PAR E-MAIL ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse44" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading44"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Vous pouvez recevoir gratuitement une sélection d'offres AfricaJob par e-mail en mémorisant jusqu'à cinq recherches différentes.

Vous devez au préalable avoir créé une à cinq recherche(s) d’offres (voir comment créer une recherche d’offres)

Sur la page d’accueil d’AficaJob, sélectionnez « Vous êtes candidat » :

Cliquez sur "Mon Espace" (en haut à droite), connectez-vous à votre compte avec votre adresse mail (ou identifiant) et votre mot de passe.
Dans la rubrique « mes recherches » :
Cliquez sur « toutes mes recherches »
Sélectionnez la ou les recherche (s) pour laquelle (lesquelles) vous souhaitez recevoir les offres par mail.
Cliquez sur le bouton « alerte mail ». L’alerte est activée..</p> 
               </div> 
              </div> 
             </div> 
             
            </div> 
           </div> 
           <div class="tab-pane fade" id="tab5"> 
            <div class="faq-accordion" id="accordion5" role="tablist" aria-multiselectable="true"> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading51"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse51" aria-expanded="false" aria-controls="collapse51"> Que sont les Pages Entreprises ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse51" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading51"> 
               <div class="panel-body"> 
                <p></p> 
                <p></p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading52"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse52" aria-expanded="false" aria-controls="collapse52"> </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse52" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading52"> 
               <div class="panel-body"> 
                <p></p> 
                <p></p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading53"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse53" aria-expanded="false" aria-controls="collapse53"></a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse53" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading53"> 
               <div class="panel-body"> 
                <p></p> 
                <p></p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading54"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse54" aria-expanded="false" aria-controls="collapse54"> </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse54" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading54"> 
               <div class="panel-body"> 
                <p></p> 
                <p> <a href="/recrutement/contact"></a>.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading55"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse55" aria-expanded="false" aria-controls="collapse55"> </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse55" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading55"> 
               <div class="panel-body"> 
                <p></p> 
                <p><a href="/cmp/_r/content-guidelines"></a>. </p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading56"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse56" aria-expanded="false" aria-controls="collapse56">  </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse56" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading56"> 
               <div class="panel-body"> 
                <p></p> 
                <p></p> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
         </main> 
        </div> 
       </div> 
      </div> 
     </section> 
    </main> 
    <aside> 
     <section class="contact-cta contact-cta--gray"> 
      <div class="container"> 
       <div class="row"> 
        <div class="col-sm-12"> 
      <h2 class="contact-cta__title">Autre question?</h2> 
         <a href="contact.php">Contactez-nous</a> 
        </div> 
        <!-- //.col-sm-12 --> 
       </div> 
       <!-- //.row --> 
      </div> 
      <!-- //.container --> 
     </section> 
     <!-- //.contact-cta --> 
    </aside> 
    
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
<li><a href="partenaire.php" title="Partenariats offres">Partenariats offres</a></li>
<li><a href="contact.php"  title="Nous rejoindre">Nous rejoindre</a></li>

<li><a href="AfricaJob.php" title="Qui sommes nous ?">Qui sommes nous ? </a></li>
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