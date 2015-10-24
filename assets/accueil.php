<style type="text/css">
@media screen and (max-width: 1024px){
   #accueil{background-color: red;}
}
#accueil{height: 750px; background: url(img/concept.jpg) no-repeat fixed center;  -webkit-background-size: cover; background-size: cover;font-family: 'Raleway', sans-serif; padding-top: 90px; padding-bottom: 40px; color: #fff}
#titre{left: 30%; top: 60px; display:none;font-size: 76px; font-family: 'Poiret One'; font-weight: bold}
#s-titre{left: 32%; top: 200px;display:none; font-family: 'Poiret One'; font-weight: bold;}
#s-titre2{left: 26%; top: 300px;display:none; font-family: 'Poiret One'; font-weight: bold;}
#gr-btn{display:none;top: 370px;margin: 50px 0 20px 0; top: -100px}
#photo1{position: absolute;top: 50px ;right: -400px}
#phone{position: absolute; top:180px ;left: -400px}
#accueil a{color: #000; list-style: none}
#accueil a:link{text-decoration: none}
#btn:hover{background: #000}
#btn1:hover{background: #000}
#btn{display:inline-block; border: solid 1px #fff;background: #2d2b2d; padding: 10px;width:200px; font-family: 'Poiret One';font-weight: bold; color: #fff}
#btn1{display:inline-block; border: solid 1px #fff;background: #2d2b2d; padding: 10px;width:200px; margin-top: 10px; font-family: 'Poiret One';font-weight: bold; color: #fff}
</style>


<section id="accueil" align"center">
   <div id="valid" align="center">
        <div class="">
            <div class="hidden-xs hidden-sm hidden-md" >
              <img id="phone" class="img-responsive" src="img/iphone.png" alt="Responsive Multi Device" width="300px">
              <img id="photo1" class="img-responsives" src="img/mm.png" alt="Mourad Mekrazi" width="360px">
            </div>
            <div align="center">
                <!--<img  id="mm" src="img/mmo.png" class="img-responsive">-->
                <h1 id="titre">Mourad Mekrazi</h1>
                <h1 id="s-titre">Développeur Web & Mobile</h1>
                <h2 id="s-titre2">Manager Commercial  Responsable de Projet</h2></br>
                <div id="gr-btn">
                    <a href="#contact"><div id="btn" align="center">Contact</div></a>
                    <div id="btn1" align="center" data-toggle="modal" data-target="#myModal">Qui suis-je?</div>
                </div>    
            </div>
        </div> 
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color:#000">Qui suis-je?</h4>
              </div>
              <div class="modal-body row">
                <p class="col-md-12" style="color:#000">En reconversion professionnelle dans le web, je recherche une entreprise afin d'effectuer un contrat
                  de professionnalisation afin d'afiner mes compétences. Mon parcours personnel m'a permis d'acquerir plusieurs qualités
                  necessaire dans ce domaine comme l'esprit d'équipe et la rigueur.<br>
                  Si mon profil vous intérèsse, n'hesité à me contacter. </p>
                 <!--<img class="col-md-6" src="img/01.jpg" width="0px" height="400px">-->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
</section>

