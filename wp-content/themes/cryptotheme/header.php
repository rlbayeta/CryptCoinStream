<?php
 /*  Main Header Template */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div id="nav-bar-box">
            <div id="nav-bar-row-1" class="row row-no-padding">
                <div class="col-xs-1 col-sm-1">
                    <a href=""><img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="" class="logo"></a>        
                </div>
                <nav class="col-sm-8 navbar navbar-expand-sm">
                    <?php
                        wp_nav_menu( $arg = array (
                            'menu_class' => 'navbar-nav',
                            'theme_location' => 'primary'
                        ));
                    ?>
                </nav>
                <div class="col-sm-3">
                </div>
            </div>
        </div>

    </header>