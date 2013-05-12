<?php
    /**
     * Full Content Template
     *
       Template Name:  Full Width Page (no sidebar)
     *
     * @file           full-width-page.php
     * @package        StrapPress 
     * @author         Brad Williams 
     * @copyright      2012 Brag Interactive
     * @license        license.txt
     * @version        Release: 2.2.1
     * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
     * @since          available since Release 1.0
     */
    ?>
<?php get_header(); ?>
<div class="row-fluid wrapper_content">
    <div class="search_map">
        <div id="map_form" class="collapse in">
            <div id="transparent_bg"></div><!-- transparent background -->
            <div id="form-expand" class="row-fluid form-expand">
                <label for="category">CATEGORY</label>
                <select name="dd_cat" id="" class="span12">
                    <option value="0">- Select Option -</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                </select>
                <select name="dd_subcat" id="" class="span12">
                    <option value="0">- Select Option -</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                </select>
                <label for="keyword" class="span12">KEYWORD</label>
                <input type="text" value="" class="span12" name="keyword" placeholder="Enter keyword" autocomplete="off">
                <label class="span12" for="postalcode">CITY OR ZIP/POSTAL CODE</label>
                <input class="span12" type="text" value="" name="postal_code" placeholder="Enter City or Zip/Postal Code" autocomplete="off">
                <button class="btn btn-primary"><i class="fix_margin icon-search"></i>SEARCH NOW</button>
                <p class="demo_location">The following listings within a 20 mile radius from your location</p>
                <p>Click to filter:</p>
            </div>
        </div>
        <div class="maximize" data-toggle="collapse" data-target="#map_form"><i class="icon-hand-up"></i><span class="min_max">Minimize</span></div>  
    </div>
    <!-- <div class="span12 custom_map" id="map-canvas"> -->
    <div id="map-canvas" class="span12 custom_map" data-category="0" data-location="0" data-search="" data-geolocation="false">
        <script type="text/javascript">
            // var include_dir = '<?php echo get_template_directory_uri(); ?>+''';
            /*function close_window() {
                $j('.phoney').css('display', 'none');
            }
            function initialize() {
                var point = new google.maps.LatLng(50.875311, 0.351563);
                var myMapOptions = {
                    zoom: 5,
                    scrollwheel: false,
                    center: point,
                    panControl: true,
                    panControlOptions: {
                        position: google.maps.ControlPosition.TOP_RIGHT
                    },
                    zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.LARGE,
                        position: google.maps.ControlPosition.RIGHT_CENTER
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
                google.maps.event.addListener(marker1, 'click', function() {
                    // infowindow.open(map, marker);
                    map.panTo(marker1.getPosition());
                    infoBubble2.open(map, marker1);

                });
            }
            google.maps.event.addDomListener(window, 'load', initialize);*/
            
        </script>
    </div>
    <div class="switcher">
        <p><a href="#"><i class="icon-dashboard">&nbsp;</i>SWITCH TO TEXT MODE</a></p>
    </div>

    <div id="addListingModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign">&nbsp;</i></button>
            <h3 id="myModalLabel">Add Listing</h3>
        </div>
        <div class="modal-body">
            <table class="form_entry">
                <tr>
                    <td>Category</td>
                    <td><select class="full" name="category" id="category">
                        <option value="0">- Select Category -</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Sub Category</td>
                    <td><select class="full" name="subcategory" id="subcategory">
                        <option value="0">- Select Sub Category -</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input class="full" id="address" name="address" type="text" placeholder="" value="" /></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input class="full" id="city" name="city" type="text" placeholder="" value="" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="full" id="state" name="state" type="text" placeholder="" value="" /></td>
                </tr>
                <tr>
                    <td>Postal/Zip Code</td>
                    <td><input class="full" id="zip_code" name="zip_code" type="text" placeholder="" value="" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Please enter correct postal code as it will be used to display a satellite map.</td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><select class="full" name="country" id="country">
                        <option value="0">- Select Country -</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><input class="full" id="title" name="title" type="text" placeholder="" value="" /></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea class="full" name="description" id="description" cols="30" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td>Upload Photo</td>
                    <td><input class="full" type="file" name="photo" /></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
            <button class="btn btn_default" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn_blue">Add Listing</button>
        </div>
    </div>

    <div id="contact_us_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign">&nbsp;</i></button>
            <h3 id="myModalLabel">Contact - Send Us a Message</h3>
        </div>
        <div class="modal-body">
            <table class="form_entry">
                <tr>
                    <td>Name</td>
                    <td><input class="full" id="name" name="name" type="text" placeholder="" value="" /></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input class="full" id="email" name="email" type="text" placeholder="" value="" /></td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td><textarea class="full" name="message" id="message" cols="30" rows="3"></textarea></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
            <button class="btn btn_default" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn_blue" id="submit">Submit</button>
        </div>
    </div>

    <div id="my_listings" class="modal container hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign">&nbsp;</i></button>
            <h3 id="myModalLabel">My Listings</h3>
        </div>
        <div class="modal-body">
            <div class="search_box">
                <h3>Search Your Listings</h3>
                <ul class="clearfix">
                    <li><select name="general_filter" id="general_filter">
                    <option value="0">Keyword/ID/Street/Postal Code</option>
                </select></li>
                    <li><select name="price" id="price">
                    <option value="0">Select a Price Range</option>
                </select></li>
                    <li><select name="other_filter" id="other_filter">
                    <option value="0">Other Filter</option>
                </select></li>
                    <li><input type="text" name="search" id="search" /></li>
                    <li><button class="btn btn-primary" id="submit">Search</button></li>
                    <li><button class="btn btn-primary" id="submit">Show Map</button></li>
                </ul>
            </div>
            <div class="group_set">
                <table>
                    <thead>
                        <tr>
                            <td class="title_col">Title</td>
                            <td class="price_col">Price</td>
                            <td class="city_col">City</td>
                            <td class="date_col">Date</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="title_col">This is a test title listing<p class="desc">Services - Computer</p></td>
                            <td class="price_col">$0.00</td>
                            <td class="city_col">Los Angeles</td>
                            <td class="date_col">01/03/2013</td>
                        </tr>
                        <tr>
                            <td class="title_col"><img class="alignleft" src="<?php echo get_template_directory_uri().'/includes/images/image1.png'; ?>" alt="" />This is a test title listing<p class="desc">Services - Computer</p></td>
                            <td class="price_col">$0.00</td>
                            <td class="city_col">Los Angeles</td>
                            <td class="date_col">01/03/2013</td>
                        </tr>
                        <tr>
                            <td class="title_col"><img class="alignleft" src="<?php echo get_template_directory_uri().'/includes/images/image1.png'; ?>" alt="" />This is a test title listing<p class="desc">Services - Computer</p></td>
                            <td class="price_col">$0.00</td>
                            <td class="city_col">Los Angeles</td>
                            <td class="date_col">01/03/2013</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn_default" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn_blue" id="submit">Submit</button>
        </div>
    </div>

    <div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign">&nbsp;</i></button>
            <h3 id="myModalLabel">Profile</h3>
        </div>
        <div class="modal-body">
            <table class="form_entry">
                <tr>
                    <td>Name</td>
                    <td><input class="full" id="name" name="name" type="text" placeholder="" value="Israel Collazo" /></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input class="full" id="email" name="email" type="text" placeholder="" value="909-451-3227" /></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input class="full" id="email" name="email" type="text" placeholder="" value="israelcollazo@gmail.com" /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input class="full" id="email" name="email" type="password" placeholder="" value="mypass" /></td>
                </tr>
                <tr>
                    <td>Website</td>
                    <td><input class="full" id="email" name="email" type="text" placeholder="" value="www.synx3.com" /></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea class="full" name="message" id="message" cols="30" rows="3">101 W. Mission Blvd.
110-171
Pomona, Ca. 91766</textarea></td>
                </tr>
                <tr>
                    <td>Your Photo</td>
                    <td><input class="full" type="file" name="item_pic" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><img src="<?php echo get_template_directory_uri().'/includes/images/pic1.jpg'; ?>" alt=""></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
            <button class="btn btn_default" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn_blue" id="submit">Update Profile</button>
        </div>
    </div>
</div>
<?php get_footer(); ?>
