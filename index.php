<?php session_start()
?>

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
  <!--<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>--><!--CDN-->
  <script type="text/javascript" src="js/jquery-ui-1.11.4.js"></script><!--local-->
  <script src="scroll-up-bar.min.json"></script>
  <script src="js/sweetalert.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script><!--local-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>--><!--Appel de Bootstrap en CDN-->
  <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
  <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5563234b02f080c0" async="async"></script>
  <script src="js/owl.carousel.js"></script>

  <script>
      
      $(function () {
        // $('#accueil').parallax("center", 0, 0.1, true);
        // $('#portfolio').parallax("center", 900, 0.1, true);
        // $('#diplomes').parallax("center", 2900, 0.1, true);
      
        // Aparition des elements au scroll
        var $window = $(window);
        var form = $('form');
        var civil = $('#civil');
        var info = $('#info');
        var comp = $('#comp');
        var exp = $('#exp');
          $window.scroll(function () {
            if ($window.scrollTop() >= 300)
              comp.fadeIn(1500);
            if ($window.scrollTop() >= 3500)
              exp.fadeIn(900);
            if ($window.height() + $window.scrollTop()
              == $(document).height()) {
              //alert('Scroll en bas de page');
              form.fadeIn(1000);
              civil.delay(500).fadeIn('slow');
              info.delay(500).fadeIn('slow');
          }
        });

        var title = $("#titre");
        title.delay(1000).fadeIn('fast');
        var stitle = $("#s-titre");
        stitle.delay(2000).fadeIn('fast');
        var stitle = $("#s-titre2");
        stitle.delay(2800).fadeIn('fast');
        // var grBtn = $("#gr-btn");
        // grBtn.delay(3600).fadeIn('slow');
        var grBtn = $("#gr-btn");
        grBtn.delay(4700).fadeIn('fast');
         var phone = $("#phone");
        phone.delay(4000).animate({left: '10px', top: '180px',} ,500);
        var photo = $("#photo1");
        photo.delay(3500).animate({right: '10px', top: '50px',} ,500);


        // Scrollspy fluide
        $('li>a').on('click', function(e) {
          e.preventDefault();
          var hash = this.hash;
          $('html, body').animate({scrollTop: $(this.hash).offset().top}, 1000, function(){
            window.location.hash = hash;
          });
        });
        //Toogle-------------------
        $('#comp1').click(function(){
          $('.img1').slideToggle();
        }); 
        $('#comp2').click(function(){
          $('.img2').slideToggle();
        });
        $('#comp3').click(function(){
          $('.img3').slideToggle();
        });
        $('#comp4').click(function(){
          $('.img4').slideToggle();
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

        // Porfolio
        $("#owl-demo").owlCarousel({
 
          autoPlay: 3000, //Set AutoPlay to 3 seconds
 
          items : 4,
          itemsDesktop : [1199,3],
          itemsDesktopSmall : [979,3]
        });


         var bn = $('#bn-sub');
        bn.on('mouseover' ,function(){
          bn.fadeTo(600,0.9);
        });
        bn.on('mouseout' ,function(){
          bn.fadeTo(600,1);
        });


      });

    </script>
</body>
</html>