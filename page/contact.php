<!doctype html>
<html>
<head>
<title>CONTACT BAOL MEDIA</title>
<meta charset="utf-8">
<link href="menu.css" rel="stylesheet" type="text/css" />
</head>
<body class="contact">

<div class="menu-horizontal">
   <ul>
        <li>
			<a href="../accueil.html">ACCUEIL</a>
		</li>
		
		<li>
			<a href="presentation.html">PRESENTATION</a>
		</li>
		
		<li>
			<a href="contact.html">CONTACTER-NOUS</a>
		</li>
		
   </ul>
		</div>
		<!-- menu vertical -->
<nav>			
	<ul>
        <li>
             <a href="activite.html">ACTIVITE</a>
		</li>
		
		<li>
		     <a href="direction.html">DIRECTION</a>
		</li>
		
		<li>
		      <a href="adresse.html">ADRESSE</a>
		</li>
	</ul>
</nav>	



<div class="contact_fond">
<h1>CONTACT</h1>


<marquee><h1 class="couleur">COMMANDEZ CHEZ BAOL MEDIA</h1></marquee>
<h1 class="color">faites vos commanndes dans notre page de <em>contact</em> et recevez de reponses dans un court delai</h1>

<fieldset>
   <legend class="color">IDENTIFICATION</legend>


<form method="post" action="page.php">   
   <label for="nom">NOM  </label>
   <input  maxlength="255" id= "nom" type="text" name="nom"/></br></br></br>
   
   <label for="prenom">PRENOM</label>
   <input  maxlength="255" id= "prenom" type="text" name="prenom"/></br></br></br>
    
	
	
	<label for="telephone">TEELEPHONE</label>
	<input type="text" name="tel"/></br></br></br>
	
	<label for="emai">EMAIL</label>
   <input  maxlength="255" id= "EMAIL" type="email" name="email"/></br>
   
   
   <p>Choisissez votre région:
	<select name="region" id="region">
      <option value="Diourbel">Diourbel</option>
      <option value="Thies">Thies</option>
	  <option value="Dakar">Dakar</option>
      <option value="Fatik">Fatik</option>
      <option value="Ziguinchor">Ziguinchor</option>
      <option value="Louga">Louga</option>
      <option value="Tambacounda">Tambacounda</option>
      <option value="Matam">Matam</option>
      <option value="Kedougou">Kedougou</option>
      <option value="Sédiou">Sédiou</option>
      <option value="Kolda">Kolda</option> 
      <option value="Kafrine">Kafrine</option>
      <option value="Saint-Luis">Saint-Luis</option>
	  <option value="Kaolack">Kaolack</option>
    </select>
	</p>
	
   
  <tr> <td> <label> ADRESSE</label></td> 
<td> <input type="text" name="adresse" ></td></tr> 

  <marquee  BEHAVIOR="ALTERNATE"><P bgcolor="#RRVVKK"><h2>
   APPUEZ SUR LA TOUCHE <span class="noir">S'nscrire</span>  POUR TERMINER L'IDENTIFICATION
   </h2></p></BR></BR></marquee>
   
   
   <?php
   session_start();
   
   if(isset($_SESSION['message']))

         echo    $_SESSION['message'] ;
   ?>
   
  <input class="noir" value="S'inscrire" name="submit" type="submit" />
   </form>
</fieldset>
</body>
</div>
</html>