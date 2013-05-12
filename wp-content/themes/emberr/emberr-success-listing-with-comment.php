<?php
    /**
    * Template Name:  Success Listing w/ Comment
    * @file           emberr-success-listing-with-comment.php
    */
    ?>
<?php get_header('user-logged-in'); ?>
        <?php get_sidebar('left-user-logged-in'); ?>
        <!--tab menu -->
        <div class="span9">
            <div class="row-fluid">
                <div class="span12 alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a> 
                    <span>Success! Your listing has been added.</span>  
                </div>
            </div>
            <h1><?php echo get_the_title(); ?></h1>            
            <div class="row-fluid">
                <div class="span12 div_separator">
                    <h2>13" Mac Book Pro in excellent condition</h2>
                </div>
            </div>
            <!-- <div class="row-fluid">
                <div class="row-span div_separator successlisting_content">
                    <div class="span6 user_rating">
                        User Rating:<span>.</span>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star-empty"></i>
                    </div>
                    <div class="span6">
                        <div class="usr_comments clearfix">
                            <p><i class="fix_margin icon-comment"></i>25 User Comments</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row-fluid">
                <div class="span12 successlisting_content success_content div_separator">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <ul class="formatted">
                        <li><i class="icon-ok"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li> <i class="icon-ok"></i>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
                        <li><i class="icon-ok"></i>Ut enim ad minim veniam, quis nostrud exercitation ullamco.</li>
                        <li><i class="icon-ok"></i>Laboris nisi ut aliquip ex ea commodo consequat.</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 successlisting_content succes_images div_separator">
                    <div class="span4">
                        <div class="listing_image">
                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/successlisting_1.jpg" />
                            <a href="<?php echo get_template_directory_uri().'/' ?>includes/css/images/successlisting_1.jpg" alt="" data-fresco-group="shared_options" data-fresco-caption="<?php echo "caption for the image" ?>" class="fresco theHoverBorder"></a>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="listing_image">
                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/successlisting_2.jpg" />
                            <a href="<?php echo get_template_directory_uri().'/' ?>includes/css/images/successlisting_2.jpg" alt="" data-fresco-group="shared_options" data-fresco-caption="<?php echo "caption for the image" ?>" class="fresco theHoverBorder"></a>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="listing_image">
                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/successlisting_3.jpg" />
                            <a href="<?php echo get_template_directory_uri().'/' ?>includes/css/images/successlisting_3.jpg" alt="" data-fresco-group="shared_options" data-fresco-caption="<?php echo "caption for the image" ?>" class="fresco theHoverBorder"></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row-fluid successlisting_content item_listing_details div_separator" style="margin-bottom: 20px;">
                <div class="span5 cat_save_contact">
                    <ul class="formatted">
                        <li><i class="icon-ok"></i>Category: <b>Buy and Sell</b> </li>
                        <li><i class="icon-ok"></i>Sub Category: <b>Computers</b></li>
                        <li><i class="icon-ok"></i>Price: <b>$1100</b></li>
                        <li><i class="icon-ok"></i>Listed: <b>Feb 15, 2013</b></li>
                    </ul>

                    
                </div>
                <div class="span7">
                    <div class="row-fluid">
                        <div class="span4"></div>
                        <div class="span8 form_footer" style="text-align:right;">
                            <button class="btn btn-primary save_button">Save</button>
                            <button class="btn btn-primary contact_button">Contact</button>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12 social_media_action clearfix">
                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style" style="float:right;">
                            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                            <a class="addthis_button_tweet"></a>
                            <a class="addthis_button_pinterest_pinit"></a>
                            <a class="addthis_counter addthis_pill_style"></a>
                            </div>
                            <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51784a5160ca0a47"></script>
                            <!-- AddThis Button END -->
                        </div>
                    </div>                   
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12 successlisting_map" id="map-canvas">
                    <script type="text/javascript">
                        // var include_dir = '<?php echo get_template_directory_uri(); ?>+''';
                        function initialize() {
                            var point = new google.maps.LatLng(50.875311, 0.351563);
                            var myMapOptions = {
                                zoom: 14,
                                scrollwheel: false,
                                center: point,
                                panControl: false,
                                panControlOptions: {
                                    position: google.maps.ControlPosition.TOP_LEFT
                                },
                                zoomControl: true,
                                zoomControlOptions: {
                                    
                                    position: google.maps.ControlPosition.TOP_LEFT
                                },
                                mapTypeId: google.maps.MapTypeId.TERRAIN
                            };
                            var map = new google.maps.Map(document.getElementById("map-canvas"),myMapOptions);
                            var image = new google.maps.MarkerImage(
                            "<?php echo get_template_directory_uri().'/includes/images/marker-1.png'; ?>",
                            new google.maps.Size(26,42),
                            new google.maps.Point(0,0),
                            new google.maps.Point(13,42)
                            );
                            var shadow = new google.maps.MarkerImage(
                            "<?php echo get_template_directory_uri().'/includes/images/shadow.png'; ?>",
                            new google.maps.Size(26,13),
                            new google.maps.Point(0,0),
                            new google.maps.Point(13,7)
                            );
                            var shape = {
                            coord: [25,0,25,1,25,2,25,3,25,4,25,5,25,6,25,7,25,8,25,9,25,10,25,11,25,12,25,13,25,14,25,15,25,16,25,17,25,18,25,19,25,20,25,21,25,22,25,23,25,24,25,25,19,26,19,27,19,28,18,29,18,30,17,31,17,32,17,33,16,34,16,35,16,36,15,37,15,38,14,39,14,40,14,41,11,41,11,40,11,39,10,38,10,37,9,36,9,35,9,34,8,33,8,32,8,31,7,30,7,29,6,28,6,27,6,26,0,25,0,24,0,23,0,22,0,21,0,20,0,19,0,18,0,17,0,16,0,15,0,14,0,13,0,12,0,11,0,10,0,9,0,8,0,7,0,6,0,5,0,4,0,3,0,2,0,1,0,0,25,0],
                            type: 'poly'
                            };
                            /*var marker = new google.maps.Marker({
                            draggable: false,
                            raiseOnDrag: false,
                            icon: image,
                            shadow: shadow,
                            shape: shape,
                            map: map,
                            position: point
                            });
                            var infowindow = new google.maps.InfoWindow();
                            infowindow.setContent('asdasdasd');*/
                            // infowindow.setShadowStyle(0);

                            var bubbleContent = '<div class="info_bubble_wrapper_1"><div class="info_bubble_header clearfix">2 Year Old Female Maltese Dog</div><div class="bubble_content clearfix"><div class="seller_img"><img src="' + "<?php echo get_template_directory_uri().'/includes/css/images/pet1.jpg'; ?>" + '" alt="" class="" /></div><div class="seller_desc"><h2>$500</h2>I am selling my dog because she is a pain in my ass...<a href="#">More Info</a><p class="contact_seller"><a href="#"><i class="icon-plus-sign"></i>Contact Seller</a></p></div></div></div>';

                            var marker1 = new google.maps.Marker({
                                map: map,
                                center: new google.maps.LatLng(50.875311, 0.351563), 
                                position: new google.maps.LatLng(50.875311, 0.351563),
                                icon: image,
                                raiseOnDrag: false,
                                shape: shape,
                                shadow: shadow,
                                draggable: false
                            });

                            infoBubble2 = new InfoBubble({
                                map: map,
                                content: bubbleContent,
                                position: new google.maps.LatLng(50.875311, 0.351563),
                                shadowStyle: 0,
                                padding: 0,
                                backgroundColor: '#FFF',
                                borderRadius: 4,
                                arrowSize: 10,
                                borderWidth: 1,
                                borderColor: '#FFF',
                                disableAutoPan: true,
                                hideCloseButton: false,
                                arrowPosition: 50,
                                backgroundClassName: 'phoney',
                                arrowStyle: 0,
                                minWidth: 280, minHeight: 190
                            });
                            // infoBubble2.open();

                            google.maps.event.addListener(marker1, 'click', function() {
                                // infowindow.open(map, marker);
                                map.panTo(marker1.getPosition());
                                infoBubble2.open(map, marker1);

                            });
                            /*google.maps.event.addListener(marker, 'click', function() {
                                infowindow.open(map, marker);
                            });*/
                        }
                        google.maps.event.addDomListener(window, 'load', initialize);
                    </script>
                </div>
            </div>
            
            <div class="row-fluid seller_details">
                <!-- Contact Detail -->
                <div class="span9 contact_positioning">
                    <h3>Contact Detail </h3>
                    <ul>
                        <li>Name: <b>Seller Name</b></li>
                        <li>Phone Number: <b>123-456-7891</b></li>
                        <li>Website: <a href="#"><b>http://www.sellerdomain.com</b></a></li>
                    </ul>
                    <div class="row-fluid user_rating_wrapper">
                        <div class="user_rating span12 clearfix">
                            <p>User Rating:</p>
                            <ul class="rating_container">
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star-empty"></i></li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="row-fluid">
                        <div class="usr_comments span12">
                            <p><i class="fix_margin icon-comment"></i>25 User Comments</p>
                        </div>
                    </div>
                    
                </div>
                <div class="span3 clearfix" style="float: right">
                    <div class="contact_image">
                        <img src="<?php echo get_template_directory_uri().'/includes/css/images/seller.jpg'; ?>" height="100" width="100">
                        <a class="btn btn-primary hire_button">Hire</a>
                    </div>
                </div>
            </div>
            
            <div class="row-fluid comment_section div_separator">
                <div class="span8 item_comment">
                    <h2>Rate this Service and Leave a Comment</h2>
                    <div class="leave_comment">
                        <form class="" name="" action="" class="row-fluid">
                            <input type="text" value="" class="span4" name="searchword" placeholder="Name" autocomplete="off">
                            <input type="text" value="" class="span4" name="searchword" placeholder="Email" autocomplete="off">
                            <input type="text" value="" class="span4" name="searchword" placeholder="Website URL(if any)" autocomplete="off">
                            <input type="text" value="" class="span4" name="searchword" placeholder="My Rating" autocomplete="off">
                            <textarea rows="5" column="20" class="span12" placeholder="Comment" autocomplete="off"></textarea>
                            <div class="form_footer">
                                <button class="btn btn-primary btn-comment">Post Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="span4"></div>
            </div>
            <div class="row-fluid">
                <div class="span12"><h2>My Other Listings</h2></div>
            </div>
            
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
                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic1.png" />This is another test title listing</br>
                            <p class="title_note">Community - Classes</p>
                        </td>
                        <td>$250.00</td>
                        <td>Los Angeles</td>
                        <td class="Favorites_date">01/03/2013</td>
                    </tr>
                    <tr>
                        <td class="Favorites_img">
                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic2.png" />This is another test title listing</br>
                            <p class="title_note">Community - Classes</p>
                        </td>
                        <td>$250.00</td>
                        <td>Los Angeles</td>
                        <td class="Favorites_date">01/03/2013</td>
                    </tr>
                    <tr>
                        <td class="Favorites_img">
                            <img class="fav_img" src="<?php echo get_template_directory_uri().'/' ?>includes/css/images/favorites_pic3.png" />This is another test title listing</br>
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

            <div class="row-fluid pagination-bg">
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

        </div>
    </div>
</div>
<!-- end of #content -->
<!-- end of .span9 -->
<?php // get_sidebar(); ?>
<?php get_footer(); ?>