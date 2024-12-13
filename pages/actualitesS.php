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
        <li><a href="#">Home</a></li>
        <li><a href="#">Lorem</a></li>
        <li><a href="#">Ipsum</a></li>
        <li><a href="#">Dolor</a></li>
      </ul>
    </div>
  </div>




  <div class="wrapper row3">
    <main class="hoc container clear">     
      
          <table>
            <thead>
              <tr>
                <th style="width: 1000px;">Header 1</th>
              </tr>
            </thead>
            <tbody>
             
              
              

            </tbody>
          </table>
        </div>
        <div id="comments">
            <div class="container">
              <h2 style="margin-left:254px">Les Actualites Du Mois</h2>
              <table style="width: 1000px; margin: 0 auto;"><!-- placement de la barre -->
                <thead>
                <tr>
                  <th>Header</th>
                </tr>
                </thead>
                <tbody>
        
                </tbody><!-- s arrete là -->
              </table>
              <p style="text-align: center; margin-top:5px; margin-right:447px">dsfegrhtgrefzdyubhnij,ok;pdfgik,fnihyubfdbgfeinj,rhotgpk;hgefi,zdfnhyueij,ok;l<br>adezfertrytunhyrgetu,fziok;peglrb;àove<br></p>
              <a href="www.google.com" style="margin-left:256px">en savoir plus</a>
                <img src="../images/actualites/gwadelectikrun.png" alt="Actualités 1" class="image-actualites" style="display: block; margin: 0 auto;"><!-- Par défaut, les images sont des éléments en ligne (inline), ce qui empêche leur centrage avec margin: 0 auto;. En définissant display: block;, l'image se comporte comme un élément de bloc et peut être centrée correctement.-->
            </div>
          <ul>
            <li>
              <article>
                <header>
                
                  <table style="width: 1000px; margin: 0 auto;">
                  <div class="barre" style="width: 100%; height: 30px; background-color: black; width: 1030px; height:35px;margin: 0 auto; text-align: center; line-height: 30px;">
                      Barre de texte
                  </div>
                  <figure class="avatar" style="display: flex; justify-content: center;">
                      <img src="../images/demo/avatar.png" alt="er">
                  </figure>
                  <address>
                    By <a href="#">A Name</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                </header>
                <div class="comcont">
                    <img src="../images/actualites/expert.png" style="margin:0 auto; display:block;" alt="Image article" class="article-image">
                </div>
              </article>
            </li>
            <li>
              <article>
                <header>
                  <figure class="avatar"><img src="../images/demo/avatar.png"  alt=""></figure>
                  <address>
                    By <a href="#">A Name</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                </header>
                <div class="comcont">
                   <img src="../images/actualites/carte.png" style="margin:0 auto; display:block;" alt="Image article" class="article-image">
                </div>
              </article>
            </li>
            <li>
              <article>
                <header>
                  <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                  <address>
                    By <a href="#">A Name</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                </header>
                <div class="comcont">
                    <img src="../images/actualites/locaux.png" style="margin:0 auto; display:block;" alt="Image article" class="article-image">
                </div>
              </article>
            </li>
          </ul>
          <h2>Write A Comment</h2>
          <form action="#" method="post">
            <div class="one_third first">
              <label for="name">Name <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22" required>
            </div>
            <div class="one_third">
              <label for="email">Mail <span>*</span></label>
              <input type="email" name="email" id="email" value="" size="22" required>
            </div>
            <div class="one_third">
              <label for="url">Website</label>
              <input type="url" name="url" id="url" value="" size="22">
            </div>
            <div class="block clear">
              <label for="comment">Your Comment</label>
              <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
            </div>
            <div>
              <input type="submit" name="submit" value="Submit Form">
              &nbsp;
              <input type="reset" name="reset" value="Reset Form">
            </div>
          </form>
        </div>
      </div>
    
      <div class="clear"></div>
    </main>
  </div>


  <!-- #########################  Insertion du pied de page ######################### -->
  <?php
    include "layout/pied.php"
  ?>
</body>

</html>