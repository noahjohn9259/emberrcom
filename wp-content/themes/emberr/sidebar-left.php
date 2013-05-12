<?php
/**
 * Main Widget Template
 *
 *
 * @file           sidebar.php
 * @package        StrapPress 
 * @author         Brad Williams 
 * @copyright      2011 - 2012 Brag Interactive
 * @license        license.txt
 * @version        Release: 2.2.1
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>

<div class="span3 side_bar">
    <div class="span12 catagory_search">
        <h2>Search</h2>
        <form class="" name="" action="">
            <select name="dd_cat" id="" class="span12">
                <option value="0">- Select Option -</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </select>
            <select name="dd_subcat" id="" class="span12">
                <option value="0">- Select Option -</option>
                <option value="1">Option 1</option>
                asd
                <option value="2">Option 2</option>
            </select>
            <select name="dd_cat" id="" class="span12">
                <option value="0">- Select Option -</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </select>
            <input id="add_title" class="span12" type="text" value="" name="searchword" autocomplete="off" />
            <select name="dd_subcat" id="" class="span12">
                <option value="0">- Select Option -</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </select>
            <button class="btn btn-primary"><i class="fix_margin icon-search"></i>SEARCH NOW</button>
        </form>
    </div>
</div>
<!--     
    <div class="span3 sidebar-right">
    <div id="widgets" class="well">
    <?php responsive_widgets(); // above widgets hook ?>
        
        <?php if (!dynamic_sidebar('left-sidebar')) : ?>
        
            <div class="widget-title"><?php _e('In Archive', 'responsive'); ?></div>
                    <ul>
                        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                    </ul>

            <div class="widget-title"><?php _e('My Account', 'responsive'); ?></div>
                    <ul>
                        <?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li>
                        <?php wp_meta(); ?>
                    </ul>

        <?php endif; //end of right-left ?>

    <?php responsive_widgets_end(); // after widgets hook ?>
    </div>end of #widgets
</div>
</div> -->