<?php
    /**
    * Template Name:  Profile Details
    * @file           emberr-profile-details.php
    */
    ?>
<?php get_header('user-logged-in'); ?>
<?php get_sidebar('left-user-logged-in'); ?>
        <!--tab menu -->
        <div class="span9 clearfix">
            <h1><?php echo get_the_title(); ?></h1>
            <div class="bs-docs-example">
                <div class="row-fluid div_separator">
                    <div class="span4">
                        <div class="row-fluid">
                            <div class="span6 sidebar_user_img"><img src="<?php echo get_template_directory_uri().'/includes/css/images/profile-pic.png' ?>" alt="Profile Image" /></div>
                            <div class="span6 sidebar_user_desc">
                                <h3>John D.</h3>
                                <span>Oracle Company</span>
                            </div>

                        </div>
                        <p class="general_details">Address: 123 John St., Los Angeles, CA, 90000<br />
                            Phone: 123-456-7890<br />
                            Website: www.domain.com<br /><br />
                            Member since January 2013<br /></p>
                    </div>
                    <div class="span8"></div>
                </div>
                <div class="row-fluid div_separator">
                    <div class="span12">
                        <h2>Biography</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <h2>My Listings (20)</h2>
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
                                        This is a test title listing</br>
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
                                    <td>
                                        This is a test title listing</br>
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
                                    <td>
                                        This is a test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td>
                                        This is a test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td class="Favorites_img">
                                        <img class="fav_img" src="image/favorites_pic4.png" />This is another test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td class="Favorites_img">
                                        <img class="fav_img" src="image/favorites_pic5.png" />This is another test title listing</br>
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
                                        This is a test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td>
                                        This is a test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td>
                                        This is a test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td class="Favorites_img">
                                        <img class="fav_img" src="image/favorites_pic4.png" />This is another test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td class="Favorites_img">
                                        <img class="fav_img" src="image/favorites_pic5.png" />This is another test title listing</br>
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
                                    <td class="Favorites_img">
                                        <img class="fav_img" src="image/favorites_pic1.png" />This is another test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td class="Favorites_img">
                                        <img class="fav_img" src="image/favorites_pic2.png" />This is another test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td class="Favorites_img">
                                        <img class="fav_img" src="image/favorites_pic3.png" />This is another test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td>
                                        This is a test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>

                                <tr>
                                    <td>
                                        This is a test title listing</br>
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
                                        This is a test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td class="Favorites_img">
                                        <img class="fav_img" src="image/favorites_pic1.png" />This is another test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td class="Favorites_img">
                                        <img class="fav_img" src="image/favorites_pic2.png" />This is another test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td class="Favorites_img">
                                        <img class="fav_img" src="image/favorites_pic3.png" />This is another test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td>
                                        This is a test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td>
                                        This is a test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td>
                                        This is a test title listing</br>
                                        <p class="title_note">Community - Classes</p>
                                    </td>
                                    <td>$250.00</td>
                                    <td>Los Angeles</td>
                                    <td class="Favorites_date">01/03/2013</td>
                                </tr>
                                <tr>
                                    <td>
                                        This is a test title listing</br>
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
                                        <img class="fav_img" src="image/favorites_pic5.png" />This is another test title listing</br>
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
            <div class="span12  pagination-bg">
                <div class="span6"><span> Listing 1 - 3 of 3 Listings </span></div>
                <div class="span6">
                    <div class="pagination pagination-small pagination-fix">
                        <ul>
                            <li class="disabled"><a href="#"><i class="icon-double-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="icon-double-angle-right"></i></a></li>
                        </ul>
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