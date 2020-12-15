<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo (get_template_directory_uri() . "/style.css"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/script.js"></script>
    <!-- titre de l'onglet -->
    <title>TON FESTIVAL</title>
</head>
<!-- Corps HTML -->
<body>

    <div class="index">
        <!-- header -->
        <header>
            <!-- Menu-->
            <nav class="index">
                <ul>
                    <li>
                        <a href="index.html" title="Home"><?php wp_nav_menu([
                                                                'theme_location' => 'header',
                                                                'container' => false,
                                                                'menu_class' => 'navbar-nav mr-auto'
                                                            ]); ?></a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="container">