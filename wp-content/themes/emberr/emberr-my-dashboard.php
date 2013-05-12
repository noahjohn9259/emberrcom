<?php
    /**
    * Template Name:  My Dashboard
    * @file           emberr-my-dashboard.php
    */
    ?>
<?php get_header('user-logged-in'); ?>
<?php get_sidebar('left-user-logged-in'); ?>
        <!--tab menu -->
        <div class="span9 clearfix">
            <h1><?php echo get_the_title(); ?></h1>
            <div class="bs-docs-example">
                <ul id="myTab" class="nav nav-tabs nav_style_border">
                    <li class="active"><a href="#Message" data-toggle="tab">Message</a></li>
                    <li><a href="#Unread" data-toggle="tab">Unread</a></li>
                    <li><a href="#Saved" data-toggle="tab">Saved</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="Message">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="span2">RECIPIENT</th>
                                    <th class="span8">MESSAGE</th>
                                    <th class="span2 date_align">UPDATED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lorem</td>
                                    <td>Lorem ipsum dolor amet, consectetur adipisicing elit, sed do eiusmod...</td>
                                    <td class="date_align">Jan 28</td>
                                </tr>
                                <tr>
                                    <td>ipsum</td>
                                    <td>Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</td>
                                    <td class="date_align">Jan 27</td>
                                </tr>
                                <tr>
                                    <td>dolor</td>
                                    <td>Fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident...</td>
                                    <td class="date_align">Jan 26</td>
                                </tr>
                                <tr>
                                    <td>Lorem</td>
                                    <td>Lorem ipsum dolor amet, consectetur adipisicing elit, sed do eiusmod...</td>
                                    <td class="date_align">Jan 28</td>
                                </tr>
                                <tr>
                                    <td>ipsum</td>
                                    <td>Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</td>
                                    <td class="date_align">Jan 27</td>
                                </tr>
                                <tr>
                                    <td>dolor</td>
                                    <td>Fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident...</td>
                                    <td class="date_align">Jan 26</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="Unread">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="span2">RECIPIENT</th>
                                    <th class="span8">MESSAGE</th>
                                    <th class="span2 date_align">UPDATED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lorem</td>
                                    <td>Lorem ipsum dolor amet, consectetur adipisicing elit, sed do eiusmod...</td>
                                    <td class="date_align">Jan 28</td>
                                </tr>
                                <tr>
                                    <td>ipsum</td>
                                    <td>Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</td>
                                    <td class="date_align">Jan 27</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="Saved">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="span2">RECIPIENT</th>
                                    <th class="span8">MESSAGE</th>
                                    <th class="span2 date_align">UPDATED</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lorem</td>
                                    <td>Lorem ipsum dolor amet, consectetur adipisicing elit, sed do eiusmod...</td>
                                    <td class="date_align">Jan 28</td>
                                </tr>
                                <tr>
                                    <td>ipsum</td>
                                    <td>Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</td>
                                    <td class="date_align">Jan 27</td>
                                </tr>
                                <tr>
                                    <td>dolor</td>
                                    <td>Fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident...</td>
                                    <td class="date_align">Jan 26</td>
                                </tr>
                                <tr>
                                    <td>Lorem</td>
                                    <td>Lorem ipsum dolor amet, consectetur adipisicing elit, sed do eiusmod...</td>
                                    <td class="date_align">Jan 28</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="row-fluid">
                <div class="span12  pagination-bg">
                    <div class="span6"><span> Listing 1 - 3 of 3 Listings </span></div>
                    <div class="span6">
                        <div class="pagination pagination-small pagination-fix">
                            <ul>
                                <li class="disabled"><a href="#"><i class="icon-double-angle-left">&nbsp;</i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="icon-double-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="span12 member_positioning" style="border:0px solid red;">
                <h1> My Listings (20) </h1>
                <div class="bs-docs-example">
                    <ul id="myTab" class="nav nav-tabs nav_style_border">
                        <li class="active"><a href="#active" data-toggle="tab">Active</a></li>
                        <li><a href="#expired" data-toggle="tab">Expired</a></li>
                        <li><a href="#flagged" data-toggle="tab">Flagged</a></li>
                        <li><a href="#my_favorites" data-toggle="tab"><i class="icon-star color_star"></i>My Favorites(11)</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="active">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="span7">TITLE</th>
                                        <th class="span1">PRICE</th>
                                        <th class="span2">CITY</th>
                                        <th class="span2 Favorites_date">DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic1.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic4.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic3.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="expired">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="span7">TITLE</th>
                                        <th class="span1">PRICE</th>
                                        <th class="span2">CITY</th>
                                        <th class="span2 Favorites_date">DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic3.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="flagged">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="span7">TITLE</th>
                                        <th class="span1">PRICE</th>
                                        <th class="span2">CITY</th>
                                        <th class="span2 Favorites_date">DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic3.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="my_favorites">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="span7">TITLE</th>
                                        <th class="span1">PRICE</th>
                                        <th class="span2">CITY</th>
                                        <th class="span2 Favorites_date">DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic1.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic2.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic4.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic4.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic1.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row-fluid">
                    <div class="span12  pagination-bg">
                        <div class="span6"><span> Listing 1 - 3 of 3 Listings </span></div>
                        <div class="span6">
                            <div class="pagination pagination-small pagination-fix">
                                <ul>
                                    <li class="disabled"><a href="#"><i class="icon-double-angle-left">&nbsp;</i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="icon-double-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--tab menu -->

            <div class="span12 member_positioning" style="border:0px solid red;">
                <h1> My Hires (15) </h1>
                <div class="bs-docs-example">
                    <ul id="myTab" class="nav nav-tabs nav_style_border">
                        <li class="active"><a href="#tab_new" data-toggle="tab">New</a></li>
                        <li><a href="#approved" data-toggle="tab">Approved</a></li>
                        <li><a href="#declined" data-toggle="tab">Declined</a></li>
                        <li><a href="#archived" data-toggle="tab">Archived</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="tab_new">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="span7">TITLE</th>
                                        <th class="span1">PRICE</th>
                                        <th class="span2">CITY</th>
                                        <th class="span2 Favorites_date">DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic2.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic4.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic4.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="approved">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="span7">TITLE</th>
                                        <th class="span1">PRICE</th>
                                        <th class="span2">CITY</th>
                                        <th class="span2 Favorites_date">DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic3.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="declined">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="span7">TITLE</th>
                                        <th class="span1">PRICE</th>
                                        <th class="span2">CITY</th>
                                        <th class="span2 Favorites_date">DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic3.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic1.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="archived">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="span7">TITLE</th>
                                        <th class="span1">PRICE</th>
                                        <th class="span2">CITY</th>
                                        <th class="span2 Favorites_date">DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic3.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic2.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic1.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            This is a test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic4.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                    <tr>
                                        <td class="Favorites_img">
                                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic4.png" />This is another test title listing<br>
                                            <p class="title_note">Community - Classes</p>
                                        </td>
                                        <td>$250.00</td>
                                        <td>Los Angeles</td>
                                        <td class="Favorites_date">01/03/2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row-fluid">
                    <div class="span12  pagination-bg">
                        <div class="span6"><span> Listing 1 - 3 of 3 Listings </span></div>
                        <div class="span6">
                            <div class="pagination pagination-small pagination-fix">
                                <ul>
                                    <li class="disabled"><a href="#"><i class="icon-double-angle-left">&nbsp;</i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="icon-double-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end of main-content -->
    </div>
</div>
<!-- end of #content -->
<!-- end of .span9 -->
<?php // get_sidebar(); ?>
<?php get_footer(); ?>