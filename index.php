<?php get_header(); ?>
    <div id="content">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <span class="the-date"><?php the_time('Y-m-d H:i'); ?></span>
            <?php if ($p != '') : ?>
            <div class="entry">
                <?php the_content('More...'); ?>
            </div>
            <?php endif; ?>
            <div class="postmetadata">
                <b>Category:</b> <?php the_category(', ') ?> <?php the_tags('| <b>Tag:</b> ', ', ', ''); ?> <?php if ( $user_ID ) : ?> | <b>Modify:</b> <?php edit_post_link(); ?> <?php endif; ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
            </div>
        </div>
        <div class="clear"></div>
        <?php comments_template(); ?>
        <?php endwhile; ?>

        <div class="pagenation">
            <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
            <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
        </div>
        <?php if ($p == '') : ?>
        <div id="footbar">
            <div id="left-footbar">
            <?php dynamic_sidebar('Left Foot'); ?>
            </div>
            <div id="right-footbar">
            <?php dynamic_sidebar('Right Foot'); ?>
            </div>
        </div>
        <?php endif; ?>

    <?php else : ?>

        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>

    <?php endif; ?>

    </div>

<?php get_footer(); ?>
