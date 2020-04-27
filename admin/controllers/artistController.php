<?php 

require('models/Artist.php');

if($_GET['action'] == 'list'){
	//liste de tous les artistes
	//aller chercher tous les artistes via une fonction du model
	$artists = getAllArtists();
	require('views/artistList.php');
}
elseif($_GET['action'] == 'new'){
	//formulaire vide
	require('views/artistForm.php');
}
elseif($_GET['action'] == 'add'){
    //formulaire vide
$informations=$_POST;

add($informations);
header('Location:index.php?controller=artists&action=list');
exit;
}


elseif($_GET['action'] == 'edit'){
	//aller chercher l'artiste en question pour préremplissage du formulaire
	require('views/artistForm.php');
}
elseif($_GET['action'] == 'delete'){
	//appeler la fonction de suppression de l'artiste en question
	//la fonction de suppression doit être codée dans le model
	
	$result = delete(   $_GET['id']    );
	
	if($result == true){
		$message = 'artist supprimé';
		//afficher la variable $message dans la vue souhaitée
	}
}