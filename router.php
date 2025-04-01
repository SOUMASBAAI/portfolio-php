<?php

/**
 * Le routeur est chargé d'écouter les 
 * requetes HTTP provenant du client web
 * puis d'y répondre avec le contenu approprié
 */
$path = $_SERVER['REQUEST_URI'];
echo $path;
switch ($path) {
    case '/':
        echo "Page d'accueil";
        break;

    case '/about':
        echo "Page de présentation";
        break;

    case '/skills':
        echo "Page de compétences";
        break;

    case '/projects':
        echo "Page de projets";
        break;

    case '/contact':
        echo "Page de contact";
        break;


    default:
        echo "page 404";
}
