<?php

include "layout/entete.php"

?>




<body id="top">
  
  <div class="wrapper row1">

  <!-- #########################  Insertion de la banière (en haut droite) ######################### -->
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
        $("#item_index").addClass("active");

      });
    </script>

  </div>


 <!-- #########################  Affichage de l'image ######################### -->
  <div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
    <div id="pageintro" class="hoc clear">


    <!-- #########################  COmmentaire pour l'image ######################### -->
    <article>
        <p>Sed diam et lacinia aliquam</p>
        <h3 class="heading">Viverra massa malesuada</h3>
        <p>Consectetur in dolor vitae consectetur maecenas id ultrices</p>
        <footer><a class="btn" href="#">Dolor nam hendrerit</a></footer>
      </article>
    </div>
  </div>


  <div class="wrapper row3">
    <main class="hoc container clear">
      <section id="introblocks">
        <div class="sectiontitle">
        
          <h6 class="heading">Turpis ac elit placerat porta</h6>
          <p>Quisque commodo orci id convallis vestibulum justo convallis</p>
        </div>
        <ul class="nospace group">
          <li class="one_third first">
            <article><i class="fa fa-futbol-o"></i>
              <h6 class="heading font-x1"><a href="#">Tortor ultrices</a></h6>
              <p>Aliquam lacus commodo sit amet dui quis placerat ac hendrerit massa etiam ultrices metus maximus [<a href="#">&hellip;</a>]</p>
            </article>
          </li>
          <li class="one_third">
            <article><i class="fa fa-linode"></i>
              <h6 class="heading font-x1"><a href="#">Vestibulum facilisis</a></h6>
              <p>Augue ante auctor elit in iaculis nibh arcu sit amet sem tellus sed ligula vestibulum dictum in [<a href="#">&hellip;</a>]</p>
            </article>
          </li>
          <li class="one_third">
            <article><i class="fa fa-s15"></i>
              <h6 class="heading font-x1"><a href="#">Aliquet condimentum</a></h6>
              <p>Elit donec sodales varius dictum etiam sit amet elit metus sed ac ligula odio et placerat arcu sed [<a href="#">&hellip;</a>]</p>
            </article>
          </li>
        </ul>
      </section>
     
  </div>


  <!-- #########################  Insertion du pied de page ######################### -->
  <?php

    include "layout/pied.php"

  ?>
</body>

</html>