<h2>Bonjour <?php 



echo Session::get('user');
if(Session::get('admin')==1){

	echo ", Privilège: Admin";
}



?></h2>

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

	<form method='post' action="<?php echo WEBROOT;?>admin/supprimer">
				<button type="submit" name="supp_sujet" value="<?php echo $row['ID']?>" class="button">SUP Sujet</button>
				</form>

	<section class="rep">

		<?php foreach($e as $rowe){ 
				if($rowe['id_sujet']==$row['ID']){?>
			<p>		<?php echo $rowe['contenu_rep'] ?> 
			

			
			 <br> Posté par <?php echo $rowe['nom_rep']; ?> le 
				<?php
					$date = explode(" ", $rowe['date_rep']);
					echo $date[0];
				?>
				<form method='post' action="<?php echo WEBROOT;?>admin/supprimer">
				<button type="submit" name="supp_rep" value="<?php echo $rowe['id_rep']?>" class="button">SUP Rep</button>
				</form>
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



	


</section>
