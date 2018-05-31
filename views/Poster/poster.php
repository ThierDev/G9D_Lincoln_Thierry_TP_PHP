<section class="blocs">

<div id="bloc3" class="bloc">
		<h1>Poster un nouveau sujet</h1>

		<form action="<?php echo WEBROOT;?>poster/send"
			method="post">
		 <label>Message:</label><br> <input
				type="text" name="contenu_msg" class="txtbox"> <br> <label
				for="category">Catégorie : <br> <select id="cat" name="category">

					<option value="TP">TP</option>
					<option value="Cours">Cours</option>
					<option value="TD">TD</option>

			</select>
			</label> <input type="submit" value="Envoyer" class="button" />
		</form>


	</div>
	
</section>