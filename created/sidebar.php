<div class="sidebar divider one">
    <?php if ( !dynamic_sidebar('Sidebar') ) : ?>
    
        <div class="widget">
            <div class="widget_body">
                <ul>
                    <?php wp_list_categories('title_li='); ?>
                </ul>
            </div>
        </div>

    <?php endif; ?>
</div>
