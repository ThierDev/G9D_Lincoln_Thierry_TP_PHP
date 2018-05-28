<section class="blocs">

	<div id="bloc1" class="bloc">
		<h2>École d'ingénieur du numérique</h2>
		<p>
			<span class="italic"> Lorem ipsum dolor sit amet v</span>, pro eu
			hinc nibh recteque, nam putent splendide ex. Solum erant pro ea, et
			patrioque efficiantur sit, ne alia dolorem perfecto vis. Et summo
			laudem quo, novum efficiantur usu an. Pri no errem docendi, sint
			delicata has ut. Mei ad graeco legendos incorrupte, tempor democritum
			dissentiunt ex vim.
		</p>

		<ul>
			<li>Ut auctor sem non eros blandit molestie</li>
			<li>Pellentesque odio ipsum,</li>
			<li>mollis si amet augue ac,</li>
			<li>bibendum condimentum ibh.</li>



		</ul>
		<p>
			Nullam <span class="bold">vel nibh pellentesque</span>, aliquet urna
			nec, faucibus nisi.
		</p>
	</div>

	<div id="bloc2" class="bloc">
		<h1>Inscription au forum</h1>

		<form action="<?php echo WEBROOT;?>TPphp&action=inscription"
			method="post">


			<label>Votre Nom :<br>
			<input type="text" name="nom" class="txtbox" /></label> <br>
			<label> Votre E-Mail:<br>
			<input type="text" name="email" class="txtbox" /></label> <br>
			<label> Votre Mot de passe:</label> <br>
			<input type="text" name="mdp" class="txtbox" /> <br>
			<input type="submit" value="Envoyer" class="button" />
		</form>


	</div>

	<div id="bloc3" class="bloc">
		<h1>Poster un nouveau sujet</h1>

		<form action="<?php echo WEBROOT;?>TPphp&action=sujet_post"
			method="post">

			<br>
			<label>Votre Nom :<br>
			<input type="text" name="nom_posteur" class="txtbox" /></label> <br>
			<label>Message:</label><br> <input type="text" name="contenu_msg"
				class="txtbox"> <br>
			<label for="category">Catégorie : <br> <select id="cat"
				name="category">

					<option value="TP">TP</option>
					<option value="Cours">Cours</option>
					<option value="TD">TD</option>

			</select>
			</label> <input type="submit" value="Envoyer" class="button" />
		</form>


	</div>

	<div id="bloc4" class="bloc">
		<h1>Sujets en cours</h1>

<?php foreach ($d as $row) {?>
    <p><?php echo $row['contenu_msg'] ?> <br> Posté par <?php echo $row['nom_posteur']; ?> le <?php
    
$date = explode(" ", $row['date']);
    echo $date[0];
    ?> <br> Catégorie: <?php echo $row['category']?> </p>

<?php }?>

		</div>



	<div id="bloc5" class="bloc">
		<h1>Filtrer</h1>

		<form action="<?php echo WEBROOT;?>TPphp&action=test&" method="get">

			<input type="submit" value="Filtre" class="button" />

		</form>

		<form action="<?php echo WEBROOT;?>TPphp&action=filter" method="post">
			<label>Par auteur du sujet :</label> <select id="filter"
				name="nom_posteur">
<?php foreach ($d as $row) {?>
	<option value="<?php echo $row['nom_posteur']?>"><?php echo $row['nom_posteur']?></option>

<?php }?>

</select> <label>Par Catégorie :</label> <select id="filter"
				name="category">

				<option value="TP">TP</option>
				<option value="Cours">Cours</option>
				<option value="TD">TD</option>



			</select> <label>Articles postérieur à la date:</label> <select
				id="filter" name="1">

				<option value="1">1</option>
				<option value="1">1</option>
				<option value="1">1</option>

			</select> <input type="submit" value="Filtre" class="button" />

		</form>



	</div>


</section>
