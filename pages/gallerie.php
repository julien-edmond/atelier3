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
        $("#item_gallerie").addClass("active");

      });
    </script>

  </div>
  

  <!-- #########################  Affichage de l'image ######################### -->
  <div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
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
      
      <div class="content">
        <div id="gallery">
          <figure>
            <header class="heading">Gallery Title Goes Here</header>
            <ul class="nospace clear">
              <li class="one_quarter first"><a href="#"><img src="../images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter first"><a href="#"><img src="../images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter first"><a href="#"><img src="../images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="../images/demo/gallery/01.png" alt=""></a></li>
            </ul>
            <figcaption>Gallery Description Goes Here</figcaption>
          </figure>
        </div>


        <nav class="pagination">
          <ul>
            <li><a href="#">&laquo; Previous</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><strong>&hellip;</strong></li>
            <li><a href="#">6</a></li>
            <li class="current"><strong>7</strong></li>
            <li><a href="#">8</a></li>
            <li><a href="#">9</a></li>
            <li><strong>&hellip;</strong></li>
            <li><a href="#">14</a></li>
            <li><a href="#">15</a></li>
            <li><a href="#">Next &raquo;</a></li>
          </ul>
        </nav>
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