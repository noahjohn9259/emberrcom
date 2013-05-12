<?php
    /**
    * Template Name:  My Listings
    * @file           emberr-my-listings.php
    */
    ?>
<?php get_header('user-logged-in'); ?>
    <?php get_sidebar('left-user-logged-in'); ?>
        <!--tab menu -->
        <div class="span9 clearfix">
            <h1><?php echo get_the_title(); ?></h1>
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
                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                    </div>
                    <div class="tab-pane fade" id="flagged">
                        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                    </div>
                    <div class="tab-pane fade" id="my_favorites">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="span6">TITLE</th>
                                    <th class="span2">PRICE</th>
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