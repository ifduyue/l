<?php // Do not delete these lines
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');

    if (!empty($post->post_password)) { // if there's a password
        if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
            ?>

            <p class="nocomments">This post is password protected. Enter the password to view comments.</p>

            <?php
            return;
        }
    }

    /* This variable is for alternating comment background */
    $oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->
<div id="comments">

<?php if ($comments) : ?>

    <h3><?php comments_number('No Comments', 'One Comment', '% Comments' );?> on &#8220;<?php the_title(); ?>&#8221;</h3>

    <ol class="commentlist">

    <?php $count_pings = 1; foreach ($comments as $comment) : ?>

        <li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
            <div style="float:left;padding-right:5px;height:32px;"><?php echo get_avatar( $comment, 32 ); ?></div>
            <span class="level"><?php echo $count_pings; $count_pings++; ?></span>
            <cite><?php comment_author_link() ?>&nbsp;said at <?php comment_time('H:i') ?> on <?php comment_date('Y-m-d') ?>:</cite>
            <?php comment_text() ?>
            <?php if ($comment->comment_approved == '0') : ?>
            <p><b>Your comment is awaiting moderation.</b></p>
            <?php endif; ?>
        </li>

    <?php
        /* Changes every other comment to a different class */
        $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
    ?>

    <?php endforeach; /* end for each comment */ ?>

    </ol>

 <?php else : // this is displayed if there are no comments so far ?>

    <?php if ('open' == $post->comment_status) : ?>
        <!-- If comments are open, but there are no comments. -->

     <?php else : // comments are closed ?>
        <!-- If comments are closed. -->
        <p class="nocomments">Comments are closed.</p>

    <?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>


<h4 class="center">Leave a Reply</h4>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<div class="formlist">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>


<?php else : ?>
<p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>
<p><label for="author">Name</label> <span class="required">*</span><input type="text" aria-required="true" size="30" value="" name="author" id="author"></p>
<p><label for="email">Email</label> <span class="required">*</span><input type="text" aria-required="true" size="30" value="" name="email" id="email"></p>
<p><label for="url">Website</label><input type="text" size="30" value="" name="url" id="url"></p>
<?php mcsp_html(); ?>

<?php endif; ?>

<p><label for="comment">Comment</label><textarea aria-required="true" rows="8" cols="45" name="comment" id="comment"></textarea></p>
<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>
<p>
    <input type="submit" value="Post Comment" id="submit" name="submit">
</p>
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
<?php do_action('comment_form', $post->ID); ?>

</div>
</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>

</div>
