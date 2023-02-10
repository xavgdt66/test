<?php 

require '../app/Autoloader.php';

\App\Autoloader::register();


///////////////////////////////////Systéme qui permet de gerer les url sans le . php //////////////////////////////////
// get est url 
if(isset($_GET['p'])){
// $p devient l'url 
    $p = $_GET['p'];
} else {
// si dans url  il y a home 
    $p = 'home';
}

// Initialisation des objets 

$db = new App\Database('blog');

// Function native qui dit à php que tout se qui sera afficher sera stoker dans une variable 
ob_start();

// si $p est home on vas dans la page home.php 
if($p === 'home'){

    require '../pages/home.php';

// si ont tape article ( Pour les id ) on va a la page single.php 
} else  if ($p === 'article'){
    require '../pages/single.php';
}

//la variable s'appelle content et vaudra le contenu précedament 
// et utiliser ob_get_clean pour return; Voir doc => https://www.php.net/manual/fr/function.ob-get-clean.php"
$content = ob_get_clean();
// on require la pages default car c'est elle qui permetra d'affcihe le html et css aux autres sans pouvoir les mettre sur es autres pages 

require '../pages/templates/default.php';
////////////////////////