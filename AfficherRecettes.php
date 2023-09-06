<head>
    <meta charset="utf-8">
    <title>Recettes</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="global">
        <div class="content">
        <h1>Affichage des recettes</h1>
        <?php
            $recipes = [
            [
            'title' => 'Cassoulet',
            'recipe' => 'Etape 1 des flageolets !',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => true,
            ],
            [
            'title' => 'Couscous',
            'recipe' => '',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
            ],
            [
            'title' => 'Escalope milanaise',
            'recipe' => 'Etape 1 : prenez une belle escalope',
            'author' => 'mathieu.nebra@exemple.com',
            'is_enabled' => true,
            ]
            ];
            foreach($recipes as $recipe) {
                if($recipe['is_enabled'] === true) {
                    ?>
                    <h2> <?php echo $recipe['title'] ?> </h2>
                    <p> <?php echo $recipe['recipe'] ?> </p>
                    <p> <?php echo $recipe['author'] ?> <p> 
                    <?php
                }
            }
        ?>
    </div>

</body>