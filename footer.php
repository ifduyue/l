
    <div id="footer">
        <p>Copyright &copy; <?php echo date("Y") ?> <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>. All Rights Reserved.</p>
        <p>Powered by <a target="_blank" href="http://wordpress.org" title="Semantic Personal Publishing Platform" rel="generator">WordPress</a>.</p>
    </div>
</div>
<p><?php wp_footer() ?></p>
<?php dynamic_sidebar('Bottom Foot'); ?>
<!-- Can put web stats code in Bottom Foot -->
</body>
</html>
