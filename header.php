<html lang="en">

<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Bangers|Oswald|Quicksand|Shadows+Into+Light|Special+Elite|Vibes&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- Dev clear caching -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
</head>

<body <?php body_class(); ?>>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id='navbarSupportedContent'>
                <div class="navbrand">
                    <a href="/">
                        <?php echo file_get_contents(__DIR__ . '/assets/chrisWebsiteLogo-W.svg') ?>
                    </a>
                </div>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'navigation navbar-nav',
                        'container' => false,
                        'bootstrap' => true

                    )
                );
                ?>
            </div>

        </nav>
    </header>