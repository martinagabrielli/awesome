<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Awesome theme</title>
    <?php wp_head(); ?>
</head>
<?php
    if (is_front_page() ):
        $awesome = array('awesome-class', 'my-class');
    else:
        $awesome = array('no-awesome-class');
    endif;
?>
<body <?php body_class($awesome); ?>>
    <?php wp_nav_menu(array('theme_location' => 'primary')); ?> 