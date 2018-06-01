<link rel="stylesheet" href= <?php echo WEBROOT.'views\header\header.css' ?> />
<header >
    <div class="logo_isep">
		<p id="logo"><img src=<?php echo WEBROOT.'views\header\logo.png'?> alt="logo isep"></p>
</div>
		
		<nav id="navigation">
			<ul>
				
				
				
				<?php 
				Session::init();
				
				if(Session::get("loggedIn")){ ?>
    				<li><a href="actualite">Actualités</a></li>
    				<li><a href="poster">Ajouter un sujet</a></li>
    				<?php if(Session::get("admin")){?><li><a href="admin">Administration</a></li><?php } ?>
				    <li><a href="<?php echo WEBROOT; ?>acceuil">Deconnexion</a></li>
				<?php } ?>
			</ul>
		</nav>
		
</header>