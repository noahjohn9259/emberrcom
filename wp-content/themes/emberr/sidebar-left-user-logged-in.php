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
    <div class="row-fluid">
        <div class="span6 sidebar_user_img"><img src="<?php echo get_template_directory_uri().'/includes/css/images/profile-pic.png' ?>" alt="Profile Image" /></div>
        <div class="span6 sidebar_user_desc">
            <h3>John D.</h3>
            <span>Oracle Company</span>
        </div>
    </div>
    <div class="member_info"><span>Member since January 2013</span><i class="pull-right icon-edit"></i></div>
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