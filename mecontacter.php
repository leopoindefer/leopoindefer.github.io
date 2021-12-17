<!DOCTYPE html>

<html>
	
	<head>
		
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="shop.css">		
		<title>MON CV</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
		<meta name="description" content="" >
		
	</head>
		
		<body>

		<header>

		<div class="piedpage">
		<h3 class="contact">Mon site CV vous plaît ?</h3>
		<a class="button2" href="mecontacter.php">CONTACTEZ MOI</a>
		<h3 class="download">Télécharger mon CV</h3></br>
		<a href="CV_Léo_Poindefer.pdf" target="_blank"><img src="images/cv2.jpg" class="cv2"/></a>
	</div>

            <form method="post" class="mail">
            <h2>Envoyez moi un mail ! </h2>
                <label>Votre nom (obligatoire)</label></br>
                <input type="name" name="message" required><br><br>
                <label>Votre-email (obligatoire)</label></br>
                <input type="email" name="email" required><br><br>
                <label>Sujet</label></br>
                <input type="text" name="message" required><br><br>
                <label>Votre message</label></br>
                <textarea name="message" required></textarea><br><br>
                <input type="submit">
            </form>
            <?php
            if (isset($_POST['message'])) {
                $position_arobase = strpos($_POST['email'], '@');
                if ($position_arobase === false)
                    echo '<p>Votre email doit comporter un arobase.</p>';
                else {
                    $retour = mail('poindeferleo@hotmail.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
                    if($retour)
                        echo '<p>Votre message a été envoyé.</p>';
                    else
                        echo '<p>Erreur.</p>';
                }
            }
            ?>

    		<div class="banner2">
				
			<div class="menu">
				<ul>
					<li class="menunotif" ><a href="diplome.php">Diplômes et formations</a></li>
					<li class="menuesp" ><a href="exp.php">Expériences professionelles</a></li>
					<li class="menuevenement" ><a href="comp.php">Compétences</a></li>
					<li class="menusdv" ><a href="aq.php">Atouts & qualités</a></li>
					<li class="menubb" ><a href="coord.php">Coordonnées</a></li>
				</ul>
			</div>
			
		</div>
		
		<div class="banner">
			<a href="index"><font size="+2" class="nom">Léo Poindefer</a>
		</div>	
			
		<div class="bannerinscription">
			<div class="trait"/><a href="index.php" class="moncv">MON CV</a>
		</div>
		
		<div class="bannerconnect">
			<div class="trait2"/><a href="parcours.php" class="monparcours">MON PARCOURS</a></font>
			<div class="trait3"/>
		</div>	
			
		</header>
		
		<footer>
		</footer>
	
	</body>
	
<style type="text/css">

@font-face { font-family: Quicksand_Book; src: url('Quicksand_Book.otf'); }

.mail {
    float: left;
    position: absolute;
    top: 250px; left: 50%; /* à 50%/50% du parent référent */
	transform: translate(-50%, -50%); /* décalage de 50% de sa propre taille */
}

html {
	font-family: Quicksand_Book;
	background-color: white;
}

body {
	background-color: white;
	font-family: Quicksand_Book;
	margin-top: 0;
	margin-left: 0;
	margin-right: 0;
}

.banner {
	display: block;
	width: 400px;
	position: fixed;
	background-color: #23232C;
	margin-left: 0px;
	top: 0;
	overflow: hidden;
	height: 50px;
	float: left;
}

.bannerinscription {
	float: left;
	overflow: hidden;
	position: fixed;
	margin-left: 400px;
	background-color: #525050;
	color: black;
	top: 0px;
	height: 50px;
	display: block;
	width: 200px;
}

.bannerconnect {
	float: left;
	overflow: hidden;
	position: fixed;
	margin-left: 200px;
	background-color: #23232C;
	color: black;
	top: 0px;
	height: 50px;
	display: block;
	width: 100%;
}

.nom {
	margin-left: 50px;
	margin-top: 10px;
	float: left;
	color: white;
	text-decoration: none;
}

.log {
	margin-top: -13px;
	float: left;
	margin-left: 50px; 
	
}

.collection {
	float: left;
	height: 400px;
	position: absolute; 
	margin-top: 370px;
	left: 50%; 
	transform: translate(-50%, -50%); 
}

.a {
	color: white;
	text-decoration: none;
}

.b {
	text-decoration: none;
	color: black;
}

.trait {
	float: left;
	width:5px;
    border-left:1px solid gray;
    height: 100px;
	margin-left: -49px;
	margin-top: -10px;
}

.trait2 {
	float: left;
	width:5px;
    border-left:1px solid gray;
    height: 100px;
	margin-left: -50px;
	margin-top: -20px;
}

.trait3 {
	float: left;
	width:5px;
    border-left:1px solid gray;
    height: 100px;
	margin-left: 210px;
	margin-top: -57px;
}

.banner2 {
	display: block;
	width: 100%;
	margin-top: 50px;
	overflow: hidden;
	height: 40px;
	background-color: #525050;
	position: fixed;
}

.menu {
	width: 100%;
	height: 15px;
 	color: white;
	display: inline;
	position: relative;
	background-color: black;
	overflow: hidden;
}

.menu ul {
	float: left; 
	left: 50%;
	position: relative;
	margin-top: 2px;
	margin-left: -600px;
}

.menu ul li {
	float: left;
	list-style-type : none;
	margin-left : 20px;
	left: -50%;
}

.menu ul li a {
	text-decoration: none;
	color: white;
	display: inline-block;
	height: 70px;
	width: 	200px;
	text-align: center; 
	background-color: #525050;
	padding-top: 0px;
}

.menu ul li a:hover {
	color: black;
	background-color: white;
}

.moncv {
	float: left;
	text-decoration: none;
	color: white;
	margin-left: 35px;
	margin-top: 10px;
    width: 200px;
}

.monparcours {
	float: left;
	text-decoration: none;
	color: white;
	margin-left: -40px;
	margin-top: 20px;
    width: 200px;
}

.bannerinscription a:hover {
	color: grey;
}

.bannerconnect a:hover {
	color: grey;
}

.piedpage {
	position: absolute;
	background-color: #23232C;
	top: 1000px;
	width: 100%;
	height: 400px;
}

.download {
	float: left;
	margin-top: 200px;
	margin-left: 80%;
	color: white;
}

.cv2 {
	margin-top: 0px;
	float: left;
	margin-left: 82%;
	width: 100px;
	height: 150px;
}

.button2 {
      float: left;
      position: absolute;
      display: inline-block;
      background-color: black;
      border-radius: 5px;
      border: 0px double #cccccc;
      color: white;
      text-align: center;
      font-family: calibri;
      font-size: 15px;
      padding: 20px;
      width: 120px;
      transition: all 0.5s;
      cursor: pointer;
      top: 300px; left: 50%; /* à 50%/50% du parent référent */
	transform: translate(-50%, -50%); /* décalage de 50% de sa propre taille */
    background: rgba(0, 0, 0, 0.6);
    height: 15px;
    text-decoration: none;
      }

.button2 span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
      }
.button2 span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
      }
.button2:hover {
      background-color: black;
      }
.button2:hover span {
      padding-right: 25px;
      }
.button2:hover span:after {
      opacity: 1;
      right: 0;
      }

	  .contact {
	color: white;
	position: absolute;
	margin-top: 230px;
	left: 50%; /* à 50%/50% du parent référent */
	transform: translate(-50%, -50%); /* décalage de 50% de sa propre taille */
}

</style>