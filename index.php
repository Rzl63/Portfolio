<!doctype html>
<html lang="fr">
<?php include('assets/head.php'); ?>
    	
<body data-spy="scroll" data-target=".navbar">

  <?php
    include('assets/header.php'); 
    include('assets/accueil.php'); 
    include('assets/competences.php');
    include('assets/portfolio.php');
    include('assets/experience.php');
    include('assets/diplome.php');
    include('assets/form.php');
    include('assets/footer.php');
  ?>   

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><!--CDN-->
  <!--<script type="text/javascript" src="js/jquery.js"></script><!local-->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><!--CDN-->
  <!--<script type="text/javascript" src="js/jquery-ui-1.11.4.js"></script><!local-->
  <!--<script type="text/javascript" src="js/bootstrap.js"></script><!local-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script><!--Appel de Bootstrap en CDN-->
  <script src="js/less.js" type="text/javascript"></script>
  <script src="js/owl.carousel.js" type"text/javascript"></script>

  <script>
      
      $(function () {
     
        /** 
        /*Aparition des elements au scroll
        */
        var $window = $(window);
        var form = $('form');
        var civil = $('#civil');
        var info = $('#info');
        var comp = $('#comp');
        var exp = $('#exp');
        var nav = $('#nav');

          $window.scroll(function () {
            if ($window.scrollTop() >= 600)
              nav.addClass('navbar-fixed-top');
            
          });
          $window.scroll(function () {
            if ($window.scrollTop() == 0)
              nav.removeClass('navbar-fixed-top');
            
          });

          /*$window.scroll(function () {
            if ($window.scrollTop() >= 100)
              comp.fadeIn(1500);
            
          });

           $window.scroll(function () {
            if ($window.scrollTop() >= 1100)
              exp.fadeIn(1500);

          });    

          $window.scroll(function () {
            if ($window.scrollTop() >= 2000)
             form.fadeIn(1000);
          });

          $window.scroll(function () {
            if ($window.scrollTop() >= 2000)
             civil.delay(500).fadeIn('slow');
          });

          $window.scroll(function () {
            if ($window.scrollTop() >= 2000)
             info.delay(900).fadeIn('slow');
          });



         /** 
        /*Effet sur les titres
        */
        var title = $("#titre");
        title.delay(1000).fadeIn('fast');
        var stitle = $("#s-titre");
        stitle.delay(2000).fadeIn('fast');
        var stitle = $("#s-titre2");
        stitle.delay(2800).fadeIn('fast');
        var grBtn = $("#gr-btn");
        grBtn.delay(3500).fadeIn('fast').animate({opacity: 1},500);
        var network = $("#network");
        network.delay(4400).fadeIn('fast').animate({opacity: 1},1000);

   
         /** 
        /*ScrollSpy
        */
        $('li>a').on('click', function(e) {
          e.preventDefault();
          var hash = this.hash;
          $('html, body').animate({scrollTop: $(this.hash).offset().top}, 1000, function(){
            window.location.hash = hash;
          });
        });


         /** 
        /*Toggle
        */
        var comp1 = $('#comp1');
        var img1 = $('.img1');
        comp1.click(function(){
          comp1.toggleClass('glyphicon-menu-down').toggleClass('glyphicon-menu-up');
          img1.slideToggle();
        }); 
        
        var comp2 = $('#comp2');
        var img2 = $('.img2');
        comp2.click(function(){
          comp2.toggleClass('glyphicon-menu-down').toggleClass('glyphicon-menu-up');
          img2.slideToggle();
        });
      
        var comp3 = $('#comp3');
        var img3 = $('.img3');
        comp3.click(function(){
        comp3.toggleClass('glyphicon-menu-down').toggleClass('glyphicon-menu-up');
        img3.slideToggle();
        });
      
        var comp4 = $('#comp4');
        var img4 = $('.img4');
        comp4.click(function(){
        comp4.toggleClass('glyphicon-menu-down').toggleClass('glyphicon-menu-up');
        img4.slideToggle();
        });

        $('#tog1').click(function(){
          $('.master1').slideToggle();
        });
        $('#tog2').click(function(){
          $('.master2').slideToggle();
        });
        $('#tog3').click(function(){
          $('.master3').slideToggle();
        });
        $('#tog4').click(function(){
          $('.master4').slideToggle();
        });

        $('#og1').click(function(){
          $('.folio').slideToggle();
        });


         /** 
        /*Carousel Portfolio
        */
        $("#owl-demo").owlCarousel({
 
          autoPlay: 3000,
 
          items : 4,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]
        });


         /** 
        /*Animation de la couleur des boutons
        */
        var btn = $('#btn');
        btn.on('mouseover' ,function(){
          btn.animate({'background-color':'#EACA50','color':'#fff'},300);
        });
        btn.on('mouseout' ,function(){
          btn.animate({'background-color':'transparent','color':'#fff'},300);
        });


         var btn1 = $('#btn1');
        btn1.on('mouseover' ,function(){
          btn1.animate({'background-color':'#EACA50','color':'#fff'},300);
        });
        btn1.on('mouseout' ,function(){
          btn1.animate({'background-color':'transparent','color':'#fff'},300);
        });


        var bn = $('#bn-sub');
        bn.on('mouseover' ,function(){
          bn.animate({'background-color':'#459436','color':'#fff'},300);
        });
        bn.on('mouseout' ,function(){
          bn.animate({'background-color':'#2d2b2d','color':'#fff'},300);
        });

        var rpc = $('.rpc');
        rpc.on('mouseover' ,function(){
          rpc.animate({'background-color':'#EACA50','color':'#000'},300);
        });
        rpc.on('mouseout' ,function(){
          rpc.animate({'background-color':'#2d2b2d','color':'#fff'},300);
        });

        var cs = $('.cs');
        cs.on('mouseover' ,function(){
          cs.animate({'background-color':'#EACA50','color':'#000'},300);
        });
        cs.on('mouseout' ,function(){
          cs.animate({'background-color':'#2d2b2d','color':'#fff'},300);
        });

        var rr = $('.rr');
        rr.on('mouseover' ,function(){
          rr.animate({'background-color':'#EACA50','color':'#000'},300);
        });
        rr.on('mouseout' ,function(){
          rr.animate({'background-color':'#2d2b2d','color':'#fff'},300);
        });

      });

    </script>
</body>
</html>