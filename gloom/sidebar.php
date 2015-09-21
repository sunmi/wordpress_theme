<div class="sidebar">
    <?php if ( !dynamic_sidebar('Sidebar') ) : ?>
    
        <div class="widget">
            <h3 class="screen_out">Categories</h3>
            <div class="widget_body">
                <ul>
                    <?php wp_list_categories('title_li='); ?>
                </ul>
            </div>
        </div>

    <?php endif; ?>
</div>
