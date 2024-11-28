<?php

include "layout/entete.php"

?>
<style type="text/css">
  /* DEMO ONLY */
  .container .demo {
    text-align: center;
  }

  .container .demo div {
    padding: 8px 0;
  }

  .container .demo div:nth-child(odd) {
    color: #FFFFFF;
    background: #CCCCCC;
  }

  .container .demo div:nth-child(even) {
    color: #FFFFFF;
    background: #979797;
  }

  @media screen and (max-width:900px) {
    .container .demo div {
      margin-bottom: 0;
    }
  }

  /* DEMO ONLY */
</style>
</head>

<body id="top">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <?php

    include "layout/infos.php"

    ?>
    <?php

    include "layout/menu.php"

    ?>

    <script>
      $(document).ready(function() {

        //on désactive tous les sous-menus
        $(".menutitem").removeClass("active");
        //on désactive tous les menus
        $(".menu").removeClass("active");

        //on active le menu de la page
        $("#pages").addClass("active");
        //on active le sous-menu de la page
        $("#item_grille").addClass("active");

      });
    </script>

  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Lorem</a></li>
        <li><a href="#">Ipsum</a></li>
        <li><a href="#">Dolor</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <main class="hoc container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content">
        <!-- ################################################################################################ -->
        <h2>Half</h2>
        <!-- ################################################################################################ -->
        <div class="group btmspace-50 demo">
          <div class="one_half first">1/2</div>
          <div class="one_half">1/2</div>
        </div>
        <!-- ################################################################################################ -->
        <h2>Quarter</h2>
        <!-- ################################################################################################ -->
        <div class="group btmspace-50 demo">
          <div class="one_quarter first">1/4</div>
          <div class="one_quarter">1/4</div>
          <div class="one_quarter">1/4</div>
          <div class="one_quarter">1/4</div>
        </div>
        <div class="group btmspace-50 demo">
          <div class="one_quarter first">1/4</div>
          <div class="one_quarter">1/4</div>
          <div class="two_quarter">2/4 or 1/2</div>
        </div>
        <div class="group btmspace-50 demo">
          <div class="one_quarter first">1/4</div>
          <div class="three_quarter">3/4</div>
        </div>
        <!-- ################################################################################################ -->
        <h2>Third</h2>
        <!-- ################################################################################################ -->
        <div class="group btmspace-50 demo">
          <div class="one_third first">1/3</div>
          <div class="one_third">1/3</div>
          <div class="one_third">1/3</div>
        </div>
        <div class="group demo">
          <div class="one_third first">1/3</div>
          <div class="two_third">2/3</div>
        </div>
        <!-- ################################################################################################ -->
      </div>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
  <?php

  include "layout/pied.php"

  ?>
</body>

</html>