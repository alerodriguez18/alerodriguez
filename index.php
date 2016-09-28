<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mi portafolio</title>
	<link rel="stylesheet" href="static/css/bootstrap.min.css">
	<link rel="stylesheet" href="static/css/bootstrap.min.css.map">
	<link rel="stylesheet" href="static/css/main.css">
</head>
<body data-spy="scroll" data-target="#navbar-principal">
	<div id="navbar-principal">
		<nav class="navbar navbar-inverse navbar-fixed-top"> 
			<div class="container-fluid"> 
				<div class="navbar-header"> 
					<button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#aboutMe-menu" aria-expanded="false"> 
						<span class="sr-only">Toggle navigation</span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
					</button> 
				</div> 
				<div class="collapse navbar-collapse" id="aboutMe-menu"> 
					<ul class="nav navbar-nav"> 
						<li class="active">
							<a href="#personalDetails">Personal details</a>
						</li>
						<li>
							<a href="#summary">Summary</a>
						</li>
						<li>
							<a href="#languageSkills">Skills</a>
						</li> 
						<li>
							<a href="#workExperience">Work Experience</a>
						</li> 
						<li>
							<a href="#education">Education</a>
						</li>
						<li>
							<a href="#otherInterested">Other information & Interest</a>
						</li>  
					</ul> 
				</div> 
			</div> 
		</nav>
	</div>
	<div id="personalDetails">
		<figure class="aboutMe-picture">
			<img src="static/img/Me.jpg" alt="Alejandro Rodríguez">
			<figcaption>
				Hi, I'm Alejandro Rodríguez<br>Web development (Front-End)
			</figcaption>
		</figure>
		<div class="aboutme-info">
			<span>Name: Gustavo Alejandro Rodríguez Rodríguez</span>
			<span>Bithdate: June 18, 1992</span>
			<span>Cell Phone: (+52)5591688812</span>
			<span>Email: alerr18@gmail.com</span>
		</div>
	</div>
	<div id="summary">
		<h1>Summary</h1>
		<p></p>
	</div>
	<div id="languageSkills">
		<ul>
			<li>HTML5</li>
			<li>CSS3</li>
			<li>JavaScript</li>
			<li>Bootstrap framework</li>
			<li>Materialize framework</li>
			<li>Stylus</li>
			<li>Jquery</li>
			<li>PHP</li>
			<li>Version control system with Git.</li>
			<li>Linux console</li>
			<li>MySql data base</li>
			<li>Java</li>
			<li>C++</li>
		</ul>
	</div>
	<div id="workExperience">
		<h1>Work Experience</h1>
		<ul class="workExperienceStorage">
			<li><strong>March 2016 to Current</strong></li>
			<li><strong>Front-end development</strong></li>
			<li><strong>Storage Media Solutions S.A. de C.V</strong></li>
			<li><strong>Development</strong></li>
			<li><strong>Functions description</strong>:<br>
				Layout with Bootstrap framework, AJAX petitions, Javascript with JQuery.
				Some times working with Codeigniter making web services.
			</li>
		</ul>
		<ul class="workExperienceBosc">
			<li><strong>August 2015 to February 2016</strong></li>
			<li><strong>Back-end development</strong></li>
			<li><strong>BOSC Consulting</strong></li>
			<li><strong>Development</strong></li>
			<li><strong>Functions description</strong>:<br>
				Web services development for created API by the same company, using REST architecture.
			</li>
		</ul>
		<ul class="workExperienceNaviomar">
			<li><strong>October 2014 to August 2015</strong></li>
			<li><strong>System administrator</strong></li>
			<li><strong>Naviomar S.A de C.V.</strong></li>
			<li><strong>Back-end and Front-end</strong></li>
			<li><strong>Functions description</strong>:<br>
				System administrator, making changes in data base, modifying and developing news modules. Firsh time using Git with Github.
			</li>
		</ul>
		<ul class="workExperienceDai">
			<li><strong>February 2014 to July 2014</strong></li>
			<li><strong>Professional practice</strong></li>
			<li><strong>Dai Magazine Mexico/Spain</strong></li>
			<li><strong>Front-end development</strong></li>
			<li><strong>Functions description</strong>:<br>
				Front-end designer, working with HTML5, CSS3, JavaScript and template handle with Photoshop.
				URL: http://www.tradajoideal.net (site disabled).
			</li>
		</ul>
	</div>
	<div id="education">
		<div class="row">
			<div class="col-md-4"><strong>University</strong></div>
			<div class="col-md-8">
				UNIVERSIDAD POLITÉCNICA DEL VALLE DE MÉXICO<br>
				Computer Engineering (Title given, certificate in procedure) <br>
				Generation 2011-2014
			</div>
		</div>
	</div>
	<div id="otherInterested">
	</div>
</body>
<footer>
	<script src="static/js/jquery-3.1.1.min.js"></script>
	<script src="static/js/bootstrap.min.js"></script>
</footer>
</html>