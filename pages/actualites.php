<?php

include "layout/entete.php"

?>

<body id="top">

    
  <!-- #########################  Insertion de la banière (en haut droite) ######################### -->
 <div class="wrapper row1">

    <?php
      include "layout/infos.php"
    ?>

    <!-- #########################  Insertion du menu (avec les liens) ######################### -->
    <?php
      include "layout/menu.php"
    ?>

    <!-- #########################  Activation de du menu et du sous-menu correspondant à la page ######################### -->
    <script>
      $(document).ready(function() {

        //on désactive tous les sous-menus
        $(".menutitem").removeClass("active");
        //on désactive tous les menus
        $(".menu").removeClass("active");

        //on active le menu de la page
        $("#pages").addClass("active");
        //on active le sous-menu de la page
        $("#item_page_standard").addClass("active");

      });
    </script>
  </div>
  
  <!-- #########################  Affichage de l'image ######################### -->
  <div class="wrapper bgded overlay" style="background-image:url('../images/actualites.jfif');">
    <div id="breadcrumb" class="hoc clear">
      <!-- #########################  Affichage du fil d'ariane ######################### -->
      <ul>
        
      </ul>
    </div>
  </div>




  <div class="wrapper row3 table-container">
        <main class="hoc container clear ">     
      <div >
              <table>
                    <h2>Les Actualites Du Mois</h2>

                    <thead>
                  
                      <tr>
                        <th style="width: 1000px;">Amis sportifs, envie de vous defouler sur une nouvelle course ?</th>
                        
                      </tr>
                    
                    </thead>
          
                    <tbody>
                        
                      
              

                    </tbody>
            </table>


            <table>
              Rendez-vous le 24 Juin 2017, au Parc d’activités de Jarry à Baie-Mahault, pour la Gwad Electrik Run by Blandin ! Au programme ? 4 Km de fête mais aussi un village et de nombreuses animations à ne pas manquer ! 

            </table>

            <table>
                   
                
                      
                    <article>
                                <header>
                                  
                                  <address>
                                  <a href="#">en savoir plus </a>
                                  </address>

                                    <br>
                                  <div style="text-align: center;">
                                      <img src="../images/actualites/gwadelectikrun.png" alt="">
                                  </div>
                                  
                                </header>
                    </article>
                      
        
          </table>

      </div>
         


  </div>
       

  <div class="wrapper row3">
        <main class="hoc container clear">     
      
            <table>
                    

                    <thead>
                  
                      <tr>
                        <th style="width: 1000px;">Expert en Digitalisation (H/F)</th>
                        
                      </tr>
                    
                    </thead>
          
                    <tbody>
                        
                      
              

                    </tbody>
            </table>


            <table>
              Présentation du contexte: Vous souhaitez participer à un projet stratégique dans le domaine de l’innovation et des technologies Web et mobiles ? 
            </table>

            <table>
                   
                
                      
                    <article>
                                <header>
                                  
                                  <address>
                                  <a href="#">en savoir plus </a>
                                  </address>

                                    <br>
                                  <div style="text-align: center;">
                                      <img src="../images/actualites/expert.png" alt="">
                                  </div>
                                  
                                </header>
                    </article>
                      
        
          </table>


  </div>



  <div class="wrapper row3">
        <main class="hoc container clear">     
      
            <table>
                   

                    <thead>
                  
                      <tr>
                        <th style="width: 1000px;">Inscription carte Privilège</th>
                        
                      </tr>
                    
                    </thead>
          
                    <tbody>
                        
                      
              

                    </tbody>
            </table>


            <table>
              RAu travers du site Blandin, vous pourrez faire l’inscription de votre carte privilège de manière rapide et efficace. Vous pourrez dés lors profiter de tous les avantages que vous confère votre carte Privilège. La carte Privilège c’est des avantages exclusifs ainsi que des services pour vous accompagner.

            </table>

            <table>
                   
                
                      
                    <article>
                                <header>
                                  
                                  <address>
                                  <a href="#">en savoir plus </a>
                                  </address>

                                    <br>
                                  <div style="text-align: center;">
                                      <img src="../images/actualites/carte.png" alt="">
                                  </div>
                                  
                                </header>
                    </article>
                      
        
          </table>


  </div>


  <div class="wrapper row3">
        <main class="hoc container clear">     
      
            <table>
                   

                    <thead>
                  
                      <tr>
                        <th style="width: 1000px;">Bienvenue sur le nouveaux site Blandin</th>
                        
                      </tr>
                    
                    </thead>
          
                    <tbody>
                        
                      
              

                    </tbody>
            </table>


            <table>
              Depuis plus de 60 ans, l’enseigne Blandin est spécialisée dans la vente de matériel électrique mais aussi dans le confort et la sécurité pour l’habitat. Nos équipes d’experts sont à votre service pour vous proposer les meilleures solutions et répondre au mieux à vos projets que vous soyez particuliers ou professionnels, en Guyane, Guadeloupe ou Martinique.

            </table>

            <table>
                   
                
                      
                    <article>
                                <header>
                                  
                                  <address>
                                  <a href="#">en savoir plus </a>
                                  </address>

                                    <br>
                                  <div style="text-align: center;">
                                      <img src="../images/actualites/locaux.png" alt="">
                                  </div>
                                  
                                </header>
                    </article>
                      
        
          </table>


  </div>
    
      
    
 


  <!-- #########################  Insertion du pied de page ######################### -->
  <?php
    include "layout/pied.php"
  ?>
</body>

</html>