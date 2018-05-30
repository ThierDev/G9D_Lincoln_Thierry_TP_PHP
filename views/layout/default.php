<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Description de mon site ici pour améliorer le référencement" />
    <meta name="keywords" content="ISEP, isep, newsletter isep, enseignement isep, école d'ingénieur, numérique" />
    <title>Site ISEP Newsletter</title>
    <link rel="stylesheet" href='<?php echo ($css_for_layout) /* inclus le css*/ ?>'/>
    <link rel="stylesheet" href='index.css'/>
</head>

<body>

<?php include ROOT . 'views/header/header.php' /* inclus le header*/?>




<div 
id="message_error"
style=
    "
    transition:0,5;
    
	background-color:red;
	color:white;
	text-align:center;
	"
>


<?php if(isset($error['error'])==true){echo $error['error'];}; ?>
</div>



<?php echo $content_for_layout; ?>

</body>
</html>