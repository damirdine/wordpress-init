<?php get_header() ?>
<div class="s-content">

    <div class="row">

        <div id="main" class="s-content__main large-8 column">

            <article class="entry">

                <header class="entry__header">

                    <h2 class="entry__title h1">
                        <a href="single.html" title=""><?= get_post()->post_title ?></a>
                    </h2>

                    <div class="entry__meta">
                        <ul>
                            <li><?= get_post()->post_date ?></li>
                            <li><a href="#" title="" rel="category tag"><?= get_post()->ca ?></a></li>
                            <li><?= get_post()->post_author ?></li>
                        </ul>
                    </div>

                </header> <!-- entry__header -->

                <div class="entry__content-media">
                    <img src="images/wheel-500.jpg" srcset="images/wheel-1000.jpg 1000w, 
                             images/wheel-500.jpg 500w" sizes="(max-width: 1000px) 100vw, 1000px" alt="">
                </div>

                <div class="entry__content">
                    <p class="lead"><?= get_post()->post_excerpt ?>
                    </p>

                    <p>
                        <?= get_post()->post_content ?>
                    </p>
                </div> <!-- entry__content -->

                <p class="entry__tags">
                    <span>Tagged in </span>:
                    <a href="#0">orci</a>, <a href="#0">lectus</a>, <a href="#0">varius</a>, <a href="#0">turpis</a>
                </p>

                <ul class="entry__post-nav h-group">
                    <li class="prev"><a rel="prev" href="<?= previous_post_link('%link') ?>"><strong class="h6">Previous Article</strong> <?= next_post_link('<strong>%link</strong>'); ?></a></li>
                    <li class="next"><a rel="next" href="<?= next_post_link('%link') ?>"><strong class="h6">Next Article</strong> Morbi Elit Consequat Ipsum</a></li>
                </ul>

            </article> <!-- end entry -->

            <div class="comments-wrap">

                <div id="comments">

                    <h3><?= get_post()->comment_count ?> Comments</h3>

                    <!-- START commentlist -->
                    <ol class="commentlist">
                        <?php foreach (get_comments() as $comment) : ?>
                            <li class="depth-1 comment">

                                <div class="comment__avatar">
                                    <img class="avatar" src="images/avatars/user-01.jpg" alt="" width="50" height="50">
                                </div>

                                <div class="comment__content">

                                    <div class="comment__info">
                                        <div class="comment__author"><?= $comment->comment_author ?></div>

                                        <div class="comment__meta">
                                            <div class="comment__time"><?= $comment->comment_date ?></div>
                                        </div>
                                    </div>

                                    <div class="comment__text">
                                        <p><?= $comment->comment_content ?></p>
                                    </div>

                                </div>

                            </li> <!-- end comment level 1 -->
                        <?php endforeach ?>

                    </ol>
                    <!-- END commentlist -->

                </div> <!-- end comments -->

                <div class="comment-respond">

                    <!-- START respond -->
                    <div id="respond">

                        <h3>Add Comment <span>Your email address will not be published</span></h3>

                        <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                            <fieldset>

                                <div class="form-field">
                                    <input name="cName" id="cName" class="h-full-width" placeholder="Your Name" value="" type="text">
                                </div>

                                <div class="form-field">
                                    <input name="cEmail" id="cEmail" class="h-full-width" placeholder="Your Email" value="" type="text">
                                </div>

                                <div class="form-field">
                                    <input name="cWebsite" id="cWebsite" class="h-full-width" placeholder="Website" value="" type="text">
                                </div>

                                <div class="message form-field">
                                    <textarea name="cMessage" id="cMessage" class="h-full-width" placeholder="Your Message"></textarea>
                                </div>

                                <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large h-full-width" value="Add Comment" type="submit">

                            </fieldset>
                        </form> <!-- end form -->

                    </div>
                    <!-- END respond-->

                </div> <!-- end comment-respond -->

            </div> <!-- end comments-wrap -->

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
                    <?php foreach (get_categories() as $category) : ?>
                        <li><a href="#0" title=""><?= $category->name ?></a>(<?= $category->count ?>)</li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- <div class="widget widget_text group">
    <h3 class="h6">Widget Text.</h3>

    <p>
        Lorem ipsum Ullamco commodo laboris sit dolore commodo aliquip incididunt fugiat esse dolor
        aute fugiat minim eiusmod do velit labore fugiat officia ad sit culpa labore in consectetur
        sint cillum sint consectetur voluptate adipisicing Duis irure magna ut sit amet reprehenderit.
    </p>
</div> -->

            <div class="widget widget_tags">
                <h3 class="h6">Post Tags.</h3>

                <div class="tagcloud group">
                    <?php foreach (get_tags() as $tag) : ?>
                        <a href="#0"><?= $tag->name ?></a>
                    <?php endforeach; ?>
                </div>
            </div>


        </div> <!-- end sidebar -->


    </div> <!-- end row -->

</div> <!-- end content-wrap -->

<?php get_footer() ?>