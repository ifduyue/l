<?php /*
Template Name: Tag Cloud
*/
get_header(); ?>
    <div id="content">
    <div class="post" id="post-<?php the_ID(); ?>">
        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <p class="the-date"><?php the_time('Y-m-d H:i'); ?></p>
        <div class="entry">
            <?php wp_tag_cloud('number=0'); ?>
        </div>
        <div class="postmetadata">
            <b>Category:</b> <?php the_category(', ') ?> | <b>Tag:</b> <?php the_tags('', ', ', ''); ?> <?php if ( $user_ID ) : ?> | <b>Modify:</b> <?php edit_post_link(); ?> <?php endif; ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
        </div>
    </div>
    <div class="clear"></div>
    <?php comments_template(); ?>
    <div class="navigation">
        <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
        <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    </div>
    </div>
    
<?php get_footer(); ?>
