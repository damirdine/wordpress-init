<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body>
    <header class="navbar">
        <header class="s-header">

            <div class="row">

                <div class="s-header__content column">
                    <h1 class="s-header__logotext">
                        <a href="index.html" title="">Keep It Simple.</a>
                    </h1>
                    <p class="s-header__tagline">Put your awesome tagline here.</p>
                </div>

            </div> <!-- end row -->

            <nav class="s-header__nav-wrap">

                <div class="row">

                    <ul class="s-header__nav">
                        <li class="current"><a href="index.html">Home</a></li>
                        <li class="has-children"><a href="#0">Dropdown</a>
                            <ul>
                                <li><a href="#0">Submenu 01</a></li>
                                <li><a href="#0">Submenu 02</a></li>
                                <li><a href="#0">Submenu 03</a></li>
                            </ul>
                        </li>
                        <li><a href="demo.html">Demo</a></li>
                        <li><a href="archives.html">Archives</a></li>
                        <li class="has-children"><a href="#0">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog Entries</a></li>
                                <li><a href="single.html">Single Blog</a></li>
                            </ul>
                        </li>
                        <li><a href="page.html">Page</a></li>
                    </ul> <!-- end #nav -->

                </div>

            </nav> <!-- end #nav-wrap -->

            <a class="header-menu-toggle" href="#0" title="Menu"><span>Menu</span></a>

        </header> <!-- Header End -->
        <div class="container">
            <?php
            wp_nav_menu([
                'theme_location' => 'headerNav',
                'container' => false,
            ]);
            ?>
        </div>
    </header>