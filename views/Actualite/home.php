<h2>Bonjour <?php echo Session::get('user')?></h2>
<section class="blocs">


	<div id="bloc4" class="bloc">
		<h1>Sujets en cours</h1>

<?php foreach ($d as $row) {?>
    <p>
		<?php echo $row['contenu_msg'] ?> <br> Posté par <?php echo $row['nom_posteur']; ?> le <?php
    
		$date = explode(" ", $row['date']);
		echo $date[0];
		?> <br> Catégorie: <?php echo $row['category']?> 
	
	</p>

	<section class="rep">

		<?php foreach($e as $rowe){ 
				if($rowe['id_sujet']==$row['ID']){?>
			<p>		<?php echo $rowe['contenu_rep'] ?> <br> Posté par <?php echo $rowe['nom_rep']; ?> le 
			
				<?php
					$date = explode(" ", $rowe['date_rep']);
					echo $date[0];
				?>
			</p>
			
		<?php }} ?>

	
    
		<form action="<?php echo WEBROOT;?>poster/repondre" method="post">
			<label>Message:</label><br> 
			<input	type="text" name="contenu_rep" class="texbox"> <br>
				
				<button type="submit" name="id_sujet" value="<?php echo $row['ID']?>" class="button">Répondre</button>
		</form>

	</section>

<?php }?>

		</div>



	<div id="bloc5" class="bloc">
		<h1>Filtrer</h1>



		<form action="<?php echo WEBROOT;?>actualite/filter" method="post">
			<label>Par auteur du sujet :</label> <select id="filter"
				name="nom_posteur">
<?php foreach ($fixed as $row) {?>
	<option value="<?php echo $row['nom_posteur']?>"><?php echo $row['nom_posteur']?></option>

<?php }?>

			</select>
			<br>
			<label>Par Catégorie :</label> 
			
			<select id="filter"
				name="category">

				<option value="TP">TP</option>
				<option value="Cours">Cours</option>
				<option value="TD">TD</option>



			</select> 
			<br>
			<label>Articles postérieur à la date:</label> 
			
			<input type="date" id="filter" name="date">
			<br>
			<input type="submit" value="Filtre" class="button" />
			

		</form>



	</div>


</section>
