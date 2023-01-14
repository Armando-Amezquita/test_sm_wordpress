<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container py-4" flex>
            <div class="row align-items-center">
                <div class="col-4">
                    <img class="logo" src="<?php echo get_template_directory_uri()?>/assets/img/logo-smdigital.png" alt="logo">
                </div>
                <div class="col-8">
                    <nav>
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'top_menu',
                                'menu_class'    => 'menu-principal',
                                'container_class' => 'container-menu',
                            )
                        ); 
                        ?>
                    </nav>
                </div>
                </button>
            </div>
        </div>
    </header>