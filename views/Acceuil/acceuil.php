
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

		<form action="<?php echo WEBROOT;?>acceuil/inscription"
			method="post">


			<label>Votre Nom :<br> <input type="text" name="nom" class="txtbox" /></label>
			<br> <label> Votre E-Mail:<br> <input type="text" name="email"
				class="txtbox" /></label> <br> <label> Votre Mot de passe:</label> <br>
			<input type="text" name="mdp" class="txtbox" /> <br> <input
				type="submit" value="Envoyer" class="button" />
		</form>


	</div>

	<div id="bloc3" class="bloc">
		<h1>Login</h1>

		<form action="<?php echo WEBROOT;?>acceuil/login"
			method="post">

			<label> Votre E-Mail:<br> <input type="text" name="email"
				class="txtbox" /></label> <br> <label> Votre Mot de passe:</label> <br>
			<input type="text" name="mdp" class="txtbox" /> <br> <input
				type="submit" value="Envoyer" class="button" />
		</form>


	</div>

</section>
