<?php

// ne pas oublier de vérifier si l'utilisateur est connecté ET qu'il est admin
//sinon le renvoyer vers la page d'accueil du site

require ('../helpers.php');

if(isset($_GET['controller'])){
	switch ($_GET['controller']){
		case 'artists' :
            require 'controllers/artistController.php';
            break;
        default :
            require 'controllers/indexController.php';
	}
}
else{
	require 'controllers/indexController.php';
}
    
