<?php get_header();?>

<body id="top">

    <!-- preloader
    ================================================== -->
    <!-- <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->

    <!-- Content
    ================================================== -->


    <div class="s-content">

        <div class="row">

            <div id="main" class="s-content__main large-8 column">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="entry">
                            <header class="entry__header">

                                <h2 class="entry__title h1">
                                    <a href="<?= the_permalink() ?>" title=""><?php the_title(); ?></a>
                                </h2>

                                <div class="entry__meta">
                                    <ul>
                                        <li><?php print the_date(); ?></li>
                                        <li><a href="#" title="frg" rel="category tag"><?=the_category(); ?></a></li>
                                        <li><?= the_author(); ?></li>
                                    </ul>
                                </div>

                            </header>

                            <div class="entry__content">
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </div>

                            <div class="comment">

                            </div>
                        </article> <!-- end entry -->
                <?php endwhile;
                endif; ?>
            </div> <!-- end main -->


            <div id="sidebar" class="s-content__sidebar large-4 column">

                <div class="widget widget--search">
                    <h3 class="h6">Search</h3>
                    <form action="#">
                        <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
                        <input type="submit" value="" class="submit-search">
                    </form>
                </div>

                <div class="widget widget--categories">
                    <h3 class="h6">Categories.</h3>
                    <ul>
                        <?php foreach (get_categories() as $category) :?>
                            <li><a href="#0" title=""><?=$category->name?></a>(<?=$category->count?>)</li>
                        <?php endforeach; ?>
                    </ul>
                </div>


                <div class="widget widget_tags">
                    <h3 class="h6">Post Tags.</h3>

                    <div class="tagcloud group">
                        <?php foreach (get_tags() as $tag) :?>
                            <a href="#0"><?=$tag->name?></a>
                        <?php endforeach; ?>
                    </div>
                </div>


            </div> <!-- end sidebar -->

        </div> <!-- end row -->

    </div> <!-- end content-wrap -->

</body>

</html>
<?php get_footer(); ?>