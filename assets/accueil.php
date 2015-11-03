<style type="text/css">
#accueil{height: 720px; background: url(img/concept10.jpg)fixed;font-family: 'Raleway', sans-serif; padding-top: 90px; padding-bottom: 40px; color: #fff}
#titre{display:none;font-size: 80px; font-family: 'Raleway', serif; font-weight: bld}
#s-titre{display:none;font-size: 50px; font-family: 'Raleway'}
#s-titre2{display:none;font-size: 30px; font-family: 'Raleway'}
#gr-btn{display:none;vertical-align: center; opacity: 0.1}
#phone{position: absolute; top:180px ;left: -400px}
#accueil a{color: #000; list-style: none}
#accueil a:link{text-decoration: none}
#btn{display:inline-block; border: solid 3px #fff;background: transparent; padding: 10px;width:200px; font-family: 'Raleway';font-weight: bold; color: #fff; cursor: pointer;}
#btn1{display:inline-block; border: solid 3px #fff;background: transparent; padding: 10px;width:200px; margin-top: 10px; font-family: 'Raleway';font-weight: bold; color: #fff; cursor: pointer;}
#myModal2{color: #000}
#network{display: none; margin-top: 50px;opacity: .1 }
#network div{display: inline-block; margin: 10px}
</style>


<section id="accueil" align"center">
   <div id="valid">
        <div class="" align="center">
            <div class="hidden-xs hidden-sm hidden-md" >
              <!--<img id="phone" class="img-responsive" src="img/iphone.png" alt="Responsive Multi Device" width="300px">-->
              <!--<img id="photo1" class="img-responsives" src="img/mm.png" alt="Mourad Mekrazi" width="460px">-->
            </div>
            <div>
                <!--<img  id="mm" src="img/mmo.png" class="img-responsive">-->
                <h1 id="titre">Mourad Mekrazi</h1>
                <h1 id="s-titre">Développeur Web & Mobile</h1>
                <h2 id="s-titre2">Manager Commercial  Responsable de Projet</h2></br>
                <div id="gr-btn">
                    <div id="btn" align="center" data-toggle="modal" data-target="#myModal2">PARCOURS</div></a>
                    <div id="btn1" align="center" data-toggle="modal" data-target="#myModal">QUI SUIS-JE ?</div>
                </div>    
            </div>
            <div id ="network" class="hidden-xs">
              <a href="http://fr.linkedin.com/in/mouradmekrazi" target="_blank"><div class="img-responsive" ><img src="img/lin.png" width="185px"></div></a>
              <a href="http://www.viadeo.com/fr/profile/mourad.mekrazi" target="_blank"><div class="img-responsive" ><img src="img/viadeo.png" width="150px"></div></a>
              <a href="https://plus.google.com/u/0/104695558896883871492/posts" target="_blank"><div class="img-responsive" ><img src="img/google.png" width="160px"></div></a>
            </div>
        </div> 
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-heaer">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-tile" style="color:#000" align="center">Bienvenue sur mon Portfolio</h4>
              </div>
              <div class="modal-body">
                <p class="col-md-6" style="color:#000" style="padding:50px"></br></br>En reconversion professionnelle dans le web, je recherche une entreprise pour effectuer un contrat
                  de professionnalisation afin d'affiner mes compétences. Mon parcours personnel m'a permis d'acquérir plusieurs qualités
                  nécessaires dans ce domaine comme l'esprit d'équipe et la rigueur.<br>
                  Si mon profil vous intéresse, n'hesitez pas à me contacter.</br></br><strong>Bonne Visite !</strong></p>
              </div>
              <div class="modal-footer">
                <img id="photo1" class="img-responsives" src="img/mm1.png" alt="Mourad Mekrazi" width="160px">
                <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <a href="#contact"><button type="button" class="btn btn-primary">Contact</button></a>
      </div>
              </div>
            </div>
          </div>
        </div>
        <div id="myModal2" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
                <h4 class="modal-title text-center" style="color:#000" align"center">Parcours</h4>
              </div>
              <div class="modal-body">
                <div>
                    <div class="box text-center red fond">    
                        <h5><strong>DEVELOPPEUR WEB ET MOBILE</strong></h5>
                        <h6>IT AKADEMY</h6>
                        <a href ="http://www.ecole-ipssi.com/" target="_blank"><img class="img img-thumbnail" src="img/it.png" width="200px" alt="ippsi lyon" /></a>
                        <span><strong>De Juin 2015 à Octobre 2015 </span>
                        <span> - </span>
                        <span> Villeurbanne</strong></span>
                        <p>En formation chez it.akademy, j'ai appris à maitriser les concepts et les bases du métier de développeur web et mobile. Les langages front et back m'ont été enseignés et l'utilisation des outils de développement moderne:</br>
                        - html5</br>- Css3</br>- Jquery</br>- Javascript</br>- Php5/MySql</br>- La POO</br>- Symfony2 </p>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
</section>

