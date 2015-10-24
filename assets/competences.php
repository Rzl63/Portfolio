<style type="text/css">
#competences{background:; padding-bottom: 40px; font-family: 'Raleway', sans-serif}
#competences h1{font-family: 'Poiret One'}
#competences #comp{display: none}
h5{font-family: 'Raleway', sans-serif}
.comp{background-color: #A10000; color: #FFF; padding: 5px;}
.boxin{background-color:#e2e2e4; padding: 10px; margin: 30px 0 0 0; line-height: 25px;}
.boxin h5{background-color: #2d2b2d; color: #FFF; padding: 10px; border: solid 2px #fff}
.boxin p{display:none; padding-top: 10px;}
.boxin .glyphicon{display: block; background-color: #000; color: #FFF; padding: 10px;}
.moi {background-color: #000; color: #FFF; padding: 10px; list-style-type: none; text-decoration: none;}
.moi:hover{background-color: #E4C458; color: #000;}
.circle {
	background: rgb(255,255,255);
	border-radius: 100%;
	cursor: pointer;
	position: relative;
	margin: 0 auto;
	width: 10em; 
	height: 10em;
	overflow: hidden;
	transform: translateZ(0);
}

.circle h1 {
	color: rgba(189, 185, 199,0);
	font-family: 'Lato', sans-serif;
	font-weight: 900;
	font-size: 1.6em;
	line-height: 8.2em;
	text-align: center;
	text-transform: uppercase;
	-webkit-font-smoothing: antialiased;
	user-select: none;
	transition: color 0.8s ease-in-out;
}

.circle:before,
.circle:after {
	border-radius: 100%;
	content:"";
	position: absolute;
	top: 0; 
	left: 0;
	width: inherit; 
	height: inherit;			
	box-shadow: inset 10.6em 0 0 rgba(30, 140, 209, 0.2), 
	            inset 0 10.6em 0 rgba(30, 140, 209, 0.2), 
	            inset -10.6em 0 0 rgba(30, 140, 209, 0.2), 
	            inset 0 -10.6em 0 rgba(30, 140, 209, 0.2);
	transition: box-shadow 0.75s;
}



.circle:after  {
	transform: rotate(45deg);
}


.circle:hover:before,
.circle:hover:after  {
	box-shadow: inset 0.86em 0 0 rgba(255, 0, 0, 0.5), 
	            inset 0 0.86em 0 rgba(252, 150, 0, 0.5), 
	            inset -0.86em 0 0 rgba(0, 255, 0, 0.5),	
	            inset 0 -0.86em 0 rgba(0, 150, 255, 0.5);
}

.circle:hover > h1  {
	color: rgba(185, 185, 185,1);
}
</style>
<img src="img/sep.png" width="100%" height="20px">
<section id="competences" class="part">
    <div class="row"> 
        <div class="container">
            <h1 class="text-center">COMPÉTENCES</h1>  
            <div id="comp">     
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="boxin text-center">    
                        <h5>INTÉGRATION WEB</h5></br>
                        <span class="fa fa-html5 fa-5x"></span>
                        <span class="fa fa-plus fa-2x"></span>
                        <span class="fa fa-css3 fa-5x"></span></br></br>
                        <div>HTML5 et CSS3 ont été les premiers langages client que j'ai appris dans mon initiation à l'intégration front-end. De plus, je maîtrise l'approche dite <strong>Responsive</strong> notamment grâce au framework CSS Bootstrap Twitter et foundation.</div></br>
                        <!--<div>
                            <div class="circle">    
                            <img class="" src="" width="100%" height="200%"  alt="brico" />
                        
                            </div>
                        </div>-->
                        <!--<div><img src="img/gauge1.png" width="100px"></div>-->
                        <p class="img1">
                            <img  class="img-responsive" src="img/dev.png" width="100%">
                        </p>
                        <span id="comp1" class="glyphicon glyphicon-chevron-down"></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="boxin text-center red fond">    
                        <h5>DEVELOPPEMENT</h5></br>
                        <span class="fa fa-code fa-5x"></span>
                        <span class="fa fa-plus fa-2x"></span>
                        <span class="fa fa-github fa-5x"></span></br></br>
                        <div>En apprentissage dans le développement, j'apprends à maîtriser les langages les plus utilisés comme Php5 en Orienté Objet, MySQL ou encore Javascript & JQuery. J'utilise également la plateforme de gestion de version GitHub.</div></br>
                        <!--<div><img src="img/gauge1.png" width="100px"></div>-->
                        <p class="img2">
                            <img class="img-responsive" src="img/devr.png" width="100%">
                        </p>
                        <span id="comp2" class="glyphicon glyphicon-chevron-down"></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="boxin text-center red fond">    
                        <h5>GRAPHISME</h5></br>
                        <span class="fa fa-laptop fa-5x"></span></br></br>
                        <div>Graphiste de formation, j'ai étudié les méthodes de communication graphique et j'ai appris à maîtriser les outils de retouche tel que Photoshop ou Xpress. Mes qualités d'autodidacte me permettent de me perfectionner regulièrement. </div></br>
                        <!--<div><img src="img/gauge2.png" width="100px"></div>-->
                        <p class="img3">
                            <img class="img-responsive" src="img/psd.png" width="100%">
                        </p>
                        <span id="comp3" class="glyphicon glyphicon-chevron-down"></span>  
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="boxin text-center red fond">    
                        <h5>GESTION DE PROJET</h5></br>
                        <span class="fa fa-sitemap fa-5x"></span></br></br>
                        <div>Chef de projet junior, je maîtrise les methodes et logiciels de gestion de projet tel que Microsoft Project, WBS Chart Pro, Gantt Project ou encore Mindjet Project dans le respect de la méthode PMI. Diplômé en 2014 par le CESI de Lyon.</div></br>
                        <!--<div><img src="img/gauge3.png" width="100px"></div>-->
                        <p class="img4">
                            <img  class="img-responsive" src="img/projet.png" width="100%">
                            <img  class="img-responsive" src="img/pmi.png" width="100%">
                            <img  class="img-responsive" src="img/mindjet.png" width="100%">
                        </p>
                        <span id="comp4" class="glyphicon glyphicon-chevron-down"></span>
                    </div>
                </div>        
            </div>
        </div>  
    </div>
</section>      