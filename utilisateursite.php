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
           <h1 class="subheader__title">Foire aux questions</h1> 
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

    <li class="tab-navigation__item"> <a class="tab-navigation__link" href="#tab2" data-toggle="tab"> AfricaJob CV </a> </li>


           <li class="tab-navigation__item"> <a class="tab-navigation__link" href="#tab4" data-toggle="tab"> Annonce Entreprise </a> </li> 
            <li class="tab-navigation__item"> <a class="tab-navigation__link" href="#tab5" data-toggle="tab"> Pages Entreprises </a> </li> 
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
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse11" aria-expanded="false" aria-controls="collapse11">.</a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11"> 
               <div class="panel-body"> 
                <p></p> 
                <p></p> 
               </div> 
              </div> 
             </div> 
             
             <div class="panel panel-default"> 
              
              <!-- //.panel-heading --> 
              <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13"> 
               <div class="panel-body"> 
                <p></p> 
                <p><a href="https://employers.indeed.com/p/post-job?hl=fr_FR&amp;co=FR"></a> </p> 
                <p><a href="/recrutement/deposer-une-annonce"></a> <a href="/recrutement/contact"></a> </p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading14"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse14" aria-expanded="false" aria-controls="collapse14"></a> </h4> 
              </div> 

               <!-- //.panel-heading --> 
              <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14"> 
               <div class="panel-body"> 
                <p></p> 
                <p></p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading15"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse15" aria-expanded="false" aria-controls="collapse15">  </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15"> 
               <div class="panel-body"> 
                <p></p> 
                <p> <a href="/recrutement/contact"></a> </p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading16"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse16" aria-expanded="false" aria-controls="collapse16">  </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16"> 
               <div class="panel-body"> 
                <p></p> 
                <p></p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading17"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse17" aria-expanded="false" aria-controls="collapse17"></a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17"> 
               <div class="panel-body"> 
                <p></p> 
                <p></p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading18"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse18" aria-expanded="false" aria-controls="collapse18"> </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18"> 
               <div class="panel-body"> 
                <p></p> 
                <p></p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading19"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse19" aria-expanded="false" aria-controls="collapse19">  </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19"> 
               <div class="panel-body"> 
                <p></p> 
                <p></p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading110"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse110" aria-expanded="false" aria-controls="collapse110">  </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse110" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading110"> 
               <div class="panel-body"> 
                <p></p> 
                <p> <a href="/recrutement/integration-ats"></a> <a href="/recrutement/deposer-une-annonce"></a> </p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading111"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse111" aria-expanded="false" aria-controls="collapse111">  </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse111" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading111"> 
               <div class="panel-body"> 
                <p></p> 
                <p>p> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div>

            
           <div class="tab-pane fade" id="tab2"> 
            <div class="faq-accordion" id="accordion2" role="tablist" aria-multiselectable="true"> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading21"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse21" aria-expanded="false" aria-controls="collapse21"> Comment cibler ma recherche de CV ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Vous pouvez créer des requêtes de recherche avancées pour cibler toute combinaison de critères tels que la formation, le titre de poste, la localisation, l’entreprise, les compétences et l’expérience. Affinez votre recherche en filtrant les résultats en fonction de ces critères. Vous pourrez trier les résultats par pertinence ou par date de publication.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading22"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse22" aria-expanded="false" aria-controls="collapse22"> Qu'est-ce qu'une alerte CV ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading22"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Avec les alertes CV, vous pouvez sauvegarder un CV AfricaJob et être notifié des nouveaux résultats correspondant à vos critères de recherche. Pour recevoir des alertes CV, connectez à votre compte, lancez une recherche puis cliquez sur « Recevez de nouveaux CV pour cette recherche par email ». Vous avez la possibilité de créer un nombre illimité d’alertes CV gratuitement.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading23"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse23" aria-expanded="false" aria-controls="collapse23"> Puis-je sauvegarder des CV pour les consulter plus tard ou les transmettre à un collègue ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Oui, vous pouvez sauvegarder et télécharger les CV à partir de leurs pages respectives. Les CV sauvegardés figurent clairement dans les résultats de recherche et peuvent être consultés à partir de votre page personnelle « CV sauvegardés ».</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading24"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse24" aria-expanded="false" aria-controls="collapse24"> Comment accéder aux coordonnées des chercheurs d'emploi ayant mis leur CV en ligne ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading24"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Vous pouvez consulter les coordonnées d’un candidat une fois qu’il a répondu à votre premier message. En protégeant les informations personnelles des candidats jusqu’à ce qu’ils répondent à une sollicitation, nous respectons leur confiance et leur fournissons une meilleure expérience.</p> 
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
                <p> <span class="citation-needed"></span> </p> 
                <div class="FAQ-citation-source">
                  
                </div> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading32"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse32" aria-expanded="false" aria-controls="collapse32">  </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse32" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading32"> 
               <div class="panel-body"> 
                <p></p> 
                <p></p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading33"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse33" aria-expanded="false" aria-controls="collapse33">  </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse33" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading33"> 
               <div class="panel-body"> 
                <p></p> 
                <p></p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading34"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse34" aria-expanded="false" aria-controls="collapse34">  </a></h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse34" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading34"> 
               <div class="panel-body"> 
                <p></p> 
                <p><a href="/recrutement/integration-ats"></a> <a href="/recrutement/contact"></a>.</p> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
           <div class="tab-pane fade" id="tab4"> 
            <div class="faq-accordion" id="accordion4" role="tablist" aria-multiselectable="true"> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading41"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapse41" aria-expanded="false" aria-controls="collapse41"> Qu'est-ce qu'une Annonce Entreprise ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse41" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading41"> 
               <div class="panel-body"> 
                <p></p> 
                <p>L’Annonce Entreprise permet à votre marque employeur et à vos offres d’emploi de bénéficier du meilleur emplacement. Avec un emplacement publicitaire dédié pour votre Annonce Entreprise, le logo de votre entreprise, une description et des Annonces Sponsorisées s’afficheront à côté des résultats de recherche pertinents. Un tel emplacement permettra à vos offres d’emploi de gagner en visibilité et d’attirer plus de candidats.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading42"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapse42" aria-expanded="false" aria-controls="collapse42"> Que comprend le statut « Annonce Entreprise » ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse42" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading42"> 
               <div class="panel-body"> 
                <p></p> 
                <p>AfricaJob propose deux options d’Annonce Entreprise pour vous aider à recruter. La première option prévoit un emplacement publicitaire pour une Annonce Entreprise où figureront des offres d’emploi, le logo de votre entreprise et des informations la concernant, en plus de la CVthèque gratuite d'AfricaJob. La deuxième option comprend uniquement l’emplacement publicitaire, vous permettant de vous faire remarquer par les meilleurs candidats pour un investissement moindre.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading43"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapse43" aria-expanded="false" aria-controls="collapse43"> Pourquoi devrais-je opter pour le statut Annonce Entreprise ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse43" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading43"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Le statut « Annonce Entreprise » offre une vitrine inégalée à votre marque employeur sur AfricaJob et garantit à vos offres d’emploi une visibilité maximale. Il ne peut y avoir qu’une seule Annonce Entreprise par page, ce qui permet à votre marque employeur de gagner en notoriété auprès des chercheurs d’emploi les plus pertinents.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading44"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapse44" aria-expanded="false" aria-controls="collapse44"> Quel est le coût ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse44" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading44"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Le statut « Annonce Entreprise » est proposé gratuitement aux employeurs dépassant le seuil budgétaire établi en fonction du nombre d’Annonces Sponsorisées publiées sur AfricaJob. Contactez-nous directement pour plus d’informations concernant le budget requis pour que votre entreprise puisse profiter du statut Annonce Entreprise.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading45"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapse45" aria-expanded="false" aria-controls="collapse45"> Comment obtenir le statut « Annonce Entreprise » ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse45" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading45"> 
               <div class="panel-body"> 
                <p></p> 
                <p><a href="contact.php">Contactez-nous</a> pour en savoir plus sur la façon d’obtenir le statut « Annonce Entreprise » sur AfricaJob.</p> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
           <div class="tab-pane fade" id="tab5"> 
            <div class="faq-accordion" id="accordion5" role="tablist" aria-multiselectable="true"> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading51"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse51" aria-expanded="false" aria-controls="collapse51"> </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse51" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading51"> 
               <div class="panel-body"> 
                <p></p> 
                <p> <a href="/recrutement/pages-entreprises"></p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading52"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse52" aria-expanded="false" aria-controls="collapse52"> Pourquoi demander l'attribution de ma Page Entreprise ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse52" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading52"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Vous pouvez améliorer la visibilité de votre marque employeur en partageant des informations concernant votre mission, vos valeurs et votre environnement de travail. Après avoir demandé l’attribution de votre page, encouragez les employés à donner leur avis et à publier des photos pour attirer de potentiels employés vers vos offres d’emploi. Les notes d’évaluations provenant des avis d’entreprise figureront dans les résultats de recherche pour les Emplois Organiques et les Annonces Sponsorisées, incitant les chercheurs d’emploi à se renseigner sur vos offres d’emploi et votre culture d’entreprise.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading53"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse53" aria-expanded="false" aria-controls="collapse53"> Comment demander l'attribution de ma Page Entreprise ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse53" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading53"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Toute entreprise qui dispose d’offres sur AfricaJob a sa propre Page Entreprise. Pour demander l’attribution de votre Page Entreprise et la personnaliser, cliquez sur le lien « Demander l’attribution de cette Page Entreprise ». Les pages attribuées portent la mention « Page attribuée ». Une fois votre Page Entreprise attribuée, vous pouvez personnaliser votre profil en y ajoutant un logo, une description , la localisation de votre entreprise, votre secteur d’activité ainsi que des liens vers votre site web et vos profils sur les réseaux sociaux.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading54"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse54" aria-expanded="false" aria-controls="collapse54"> Qui peut modifier ma Page Entreprise ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse54" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading54"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Après avoir demandé l’attribution de votre Page Entreprise, vous pouvez personnaliser votre profil en y ajoutant un logo, une description et la localisation de votre entreprise, votre secteur d’activité et des liens vers votre site web et vers vos profils sur les réseaux sociaux. Si vous voulez demander l’attribution d’une page déjà attribuée, <a href="contact.php">contactez-nous</a>.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading55"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse55" aria-expanded="false" aria-controls="collapse55"> Puis-je modifier le contenu des avis ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse55" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading55"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Les avis publiés sont publiques et ne peuvent être modifiés ou modérés par l’employeur. Seuls sont supprimés les avis dont le retrait a été demandé par leurs auteurs respectifs ou, à la seule discrétion d’AfricaJob, lorsqu’ils ne respectent pas nos <a href="/cmp/_r/content-guidelines">instructions de rédaction de contenu</a>. Nous encourageons les entreprises à contacter les auteurs des avis en publiant un commentaire directement sur lesdits avis. Demander aux anciens employés et à ceux en activité de publier des avis est également un moyen efficace de consolider votre image de marque sur AfricaJob.</p> 
               </div> 
              </div> 
             </div> 
             <div class="panel panel-default"> 
              <div class="panel-heading" role="tab" id="heading56"> 
               <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#collapse56" aria-expanded="false" aria-controls="collapse56"> Quelles offres d'emploi figurent sur ma Page Entreprise ? </a> </h4> 
              </div> 
              <!-- //.panel-heading --> 
              <div id="collapse56" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading56"> 
               <div class="panel-body"> 
                <p></p> 
                <p>Votre Page Entreprise affiche l’ensemble de vos offres d’emploi présentes sur AfricaJob qui sont conformes à nos critères de qualité.</p> 
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
         <h2 class="contact-cta__title">Des questions ? Nous pouvons vous aider.</h2> 
         <a href="contact.php" title="contact">Contactez-nous</a> 
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
<li><a href="contact.php" title="Nous rejoindre">Nous rejoindre</a></li>
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