<?php
    //Importation des fichiers de configuration
    require_once('defines/define.php');
    //On importe defines, afin de pouvoir utiliser les constantes que l'on a définit auparavant
    require_once(PATH_DEFINES.'configuration.php');
    require_once(PATH_LANGUES.PATH_FR.'textes.php');

	//démarrage de la classe base
	require_once(PATH_LIB.'base.php');
	$base = new base();

	//vérification de la page demandée
	//print_r($_GET);
	//echo  PATH_CONTROLLER.$_GET['page'];".php";
	//echo realpath(PATH_CONTROLLER.$_GET['page'].".php");

    function isAlpha($string)
    {
        if(isset($string) && $string!='' && is_string($string) && !preg_match('[/]', $string))
        {
            return htmlspecialchars($string);
        }
        return false;
    }

    if(isset($_GET['page']))
    {
        if (isAlpha($_GET['page'])!=false)
        {
            if(is_file(PATH_CONTROLLER.$_GET['page'].".php"))
            {
                $page = $_GET['page'];
            }
            else
            {
                $page = "erreur";
            }
        }
        else
        {
            $page = "404";
        }
    }
    else
    {
        $page = "index";
    }
    require_once(PATH_CONTROLLER.$page.'.php');
?>
