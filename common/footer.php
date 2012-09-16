        </div><!-- end content -->

        <div id="footer" class="container">
            <div class="row">
                <div class="span12">
                    <hr />
                    <?php plugin_footer(); ?>
                </div>
            </div>
         <?php 
            // killing the nave in the footer -- not sure why anyone would want it...
            /* <div class="row">
                <div class="span12">
                <ul class="navigation navbar">
                    <?php echo public_nav_main(array(__('Home') => uri(''), __('Browse Items') => uri('items'), __('Browse Collections') => uri('collections'))); ?>
                </ul>
                </div>
            </div>
            */ ?>
            
            <div id="footer-text" class="row">
                <div class="span8"> 
                    <?php echo html_entity_decode(get_theme_option('Footer Text')); ?>
                    
                    <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = settings('copyright')): ?>
                        <div><small><?php echo html_entity_decode($copyright); ?></small></div>
                    <?php endif; ?>
                </div>
                <div class="span4">
                    <div class="pull-right">
                       
                        <p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>
                    </div>
                </div>
            </div>
        </div><!-- end footer -->
    </div><!-- end wrap -->
</body>
</html>