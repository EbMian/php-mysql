<?php
session_start();

include_once('mysql.php');
include_once('variables.php');

// Vérification du formulaire soumis

if (
    !isset($_POST['title'])
    || !isset($_POST['recipe'])
    )
{
    echo 'Il faut un titre et une recette pour soumettre le formulaire.';
    return;
}

$title = $_POST['title'];
$recipe = $_POST['recipe'];
$loggedUser = $_SESSION['LOGGED_USER'];

// Faire l'insertion en base
$insertRecipe = $db->prepare('INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)');
$insertRecipe->execute([
    'title'=> $title,
    'recipe'=> $recipe,
    'is_enabled'=> 1,
    'author'=> $loggedUser,
]);


?>







<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <!-- Navigation -->
        <?php include_once('header.php'); ?>
        <!-- Inclusion des fichiers utilitaires -->
        <?php
        include_once('variables.php');
        include_once('functions.php');
        ?>
        <?php include_once('footer.php'); ?>
</body>

</html>