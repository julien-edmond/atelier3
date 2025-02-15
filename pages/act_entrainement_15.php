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
                        <th style="width: 1000px;">Amis sportifs, envie de vous defouler sur une nouvelle course</th>
                        
                      </tr>
                    
                    </thead>
          
                    <tbody>
                        
                      
              

                    </tbody>
            </table>


            <table>
              Rendev-vous le 24 juin aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
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
       

 



 


    
      
    
 


  <!-- #########################  Insertion du pied de page ######################### -->
  <?php
    include "layout/pied.php"
  ?>
</body>

</html>