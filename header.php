<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width">
</head>
<body>

<header>
        <a href="/">PALVELUN TARJOAA</a>
        <div class="building"></div>
        <a href="/" class="logo">KANSALLISTEATTERI</a>

        <?php
        wp_nav_menu(
            array(
            'theme_location' => 'top-menu',
            'menu_id' => 'topmenu',
            'container' => 'ul', 
            )
        );
        ?>
</header>