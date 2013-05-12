<?php
    /**
    * Template Name:  Add Listing
    * @file           emberr-add-listing.php
    */
    ?>
<?php get_header('user-logged-in'); ?>
    <?php get_sidebar('left-user-logged-in'); ?>
        <!--tab menu -->
        <div class="span9">
            <h1><?php echo get_the_title(); ?></h1>
            <div class="addlisting_container">
                <form class="" name="" action="">
                    <div class="span12 addlisting_category separator">
                        <div class="span6">
                            <label for="">Category</label>
                            <select class="full" name="category" id="category">
                                <option value="0">- Select Category -</option>
                            </select>
                            <select class="full" name="category" id="category">
                                <option value="0">- Select Category -</option>
                            </select>
                        </div>
                        <div class="span6"> </div>
                    </div>
                    <div class="span12 addlisting_category separator">
                        <div class="span6"> 
                            <label for="">Title</label>
                            <input id="add_title" class="span12 add_text inputpopup" type="text" value="" name="searchword" autocomplete="off" rel="popover" data-placement="right" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt." data-original-title="Lorem Ipsum Dolor Title">
                        </div>
                        <div class="span6"> </div>
                    </div>
                    <div class="span12 addlisting_category separator">
                        <label for="">Description</label>
                        <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
                            <div class="btn-group">
                                <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
                                <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
                                <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
                                <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
                            </div>
                        </div>
                        <div id="editor">
                            Go ahead&hellip;
                        </div>
                    </div>
                    <div class="span12 addlisting_category separator">
                        <div class="span6"> 
                            <label for="">Price</label>
                            <input class="add_text" type="text" value="" name="searchword" autocomplete="off">
                        </div>
                        <div class="span6"> </div>
                    </div>
                    <div class="span12 addlisting_category separator" style="padding-bottom:15px;">
                        <div class="row-fluid upload_file">
                            <div class="span6"> 
                                <label for=""><strong>Upload Image</strong></label>
                                <div class="row-fluid" id="upload_photos_wrapper">
                                    <div class="fileupload fileupload-new clearfix" data-provides="fileupload">
                                        <div class="input-append clearfix">
                                            <div class="uneditable-input one_whole"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span>
                                            </div>
                                            <div class="btn_con"><a class="btn btn-file"><span class="fileupload-new">Select Image</span><span class="fileupload-exists">Change</span><input type="file" name="prop_photos[]" id="prop_photos" /></a><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="span6"> </div>
                        </div>                        
                        <p>Allowed File types: gif, jpeg, jpg, bmp &amp; png <br /><a class="add_more" href="javascript:void(0);" onclick="add_more_photos();"><i class="icon-plus-sign">&nbsp;</i> Add More...</a></p>
                        <script type="text/javascript">
                            function add_more_photos() {
                            photos_container = document.getElementById('upload_photos_wrapper');
                            var parent_div_1 = document.createElement("div");
                            parent_div_1.setAttribute("class", "fileupload fileupload-new clearfix");
                            parent_div_1.setAttribute("data-provides", "fileupload");

                            var parent_div_2 = document.createElement("div");
                            parent_div_2.setAttribute("class", "input-append clearfix");
                            parent_div_1.appendChild(parent_div_2);

                            var parent_div_3 = document.createElement("div");
                            parent_div_3.setAttribute("class", "uneditable-input one_whole");
                            parent_div_2.appendChild(parent_div_3);

                            var icon_file = document.createElement("i");
                            icon_file.setAttribute("class", "icon-file fileupload-exists");
                            parent_div_3.appendChild(icon_file);

                            var fileupload_preview = document.createElement("span");
                            fileupload_preview.setAttribute("class", "fileupload-preview");
                            parent_div_3.appendChild(fileupload_preview);

                            var parent_div_4 = document.createElement("div");
                            parent_div_4.setAttribute("class", "btn_con");
                            parent_div_2.appendChild(parent_div_4);

                            var span_1 = document.createElement("a");
                            span_1.setAttribute("class", "btn btn-file");
                            parent_div_4.appendChild(span_1);

                            var span_2 = document.createElement("span");
                            span_2.setAttribute("class", "fileupload-new");
                            span_2.innerHTML = "Select Image";
                            span_1.appendChild(span_2);

                            var span_3 = document.createElement("span");
                            span_3.setAttribute("class", "fileupload-exists");
                            span_3.innerHTML = "Change";
                            span_1.appendChild(span_3);

                            var input_file = document.createElement("input");
                            input_file.setAttribute("type", "file");
                            input_file.setAttribute("name", "prop_photos[]");
                            input_file.setAttribute("id", "prop_photos");
                            input_file.setAttribute("size", "20");
                            span_1.appendChild(input_file);

                            var a_href = document.createElement("a");
                            a_href.setAttribute("href", "#");
                            a_href.setAttribute("class", "btn fileupload-exists");
                            a_href.setAttribute("data-dismiss", "fileupload");
                            a_href.innerHTML = "Remove";
                            parent_div_4.appendChild(a_href);

                            photos_container.appendChild(parent_div_1);
                        }   
                        </script>
                    </div>
                    <div class="span12 addlisting_category separator"  style="padding-bottom:10px;">
                        <div class="addlisting_location"> 
                            <label for="">Location</label>
                            <input class="add_radio" type="radio" id="showLocationProfileOnly" value="" name="address"><label for="showLocationProfileOnly" class="inline_elem labelpop" rel="popover" data-trigger="hover" data-placement="right" data-content="101 W. Mission Blvd.110-171 Pomona, Ca. 91766" data-original-title="John Doe ">Add address from profile to my listing</label><br />
                            <input class="add_radio" type="radio" value="" id="showLocationZipOnly" name="address"><label for="showLocationZipOnly" class="inline_elem">Only show my ZIP/postal code on my listing</label>
                        </div>
                        <div class="alert alert-info">
                            <a class="close" data-dismiss="alert">&times;</a> 
                            <h5>You haven't added location to your profile</h5>
                            <p>Change a few things up and try submitting again.</p>
                            <form class="" name="" action="">
                                <input class="add_text" type="text" value="" name="searchword" placeholder="Address Line 1 (optional)" autocomplete="off"><br />
                                <input class="add_text" type="text" value="" name="searchword" placeholder="Address Line 2" autocomplete="off"><br />
                                <input class="add_text" type="text" value="" name="searchword" placeholder="City" autocomplete="off"><br />
                                <input class="add_text" type="text" value="" name="searchword" placeholder="Zip/Postal Code" autocomplete="off">
                                <input class="btn btn-primary btn-medium inline_elem" style="" type="submit" name="" value="Save Settings">
                            </form>
                        </div>
                    </div>
                <div class="span12 addlisting_category separator"  style="padding-bottom:20px;">
                    <h5>Auto Remove Listings?</h5>
                    <p>Listings auto-expire 90 days from the date of launch. If you want to auto-expire sooner click yes and select a date from the calendar. Perfect for timed events eg. yard sales, community events, etc...</p>
                    <div class="span6 addlisting_listing">
                        <input class="add_radio" type="radio" value="" id="autoremovelisting_yes" name="autoremovelisting" /><label class="inline_elem" for="autoremovelisting_yes">Yes </label>
                        <div id="auction_date_picker" class="input-append datepicker">
                            <input class="add-on" name="auction_date" id="auction_date" type="text" data-format="MM/dd/yyyy" data-date="2013-04-30" /><span class="add-on"><i data-date-icon="icon-calendar" data-time-icon="icon-time" class="icon-calendar"></i>
                            </span>
                        </div><br />
                        <input class="add_radio" type="radio" value="" id="autoremovelisting_no" name="autoremovelisting" /><label class="inline_elem" for="autoremovelisting_no">No</label>
                    </div>
                    <div class="span6"></div>
                </div>
                <div class="row-fluid">
                    <div class="span12 form_footer clearfix">
                        <input class="btn btn-primary btn-medium pull-right" type="submit" value="Upload Now">              
                    </div>
                </div>
                
                </form>
            </div>
            
        </div>
    </div>
</div>
<!-- end of #content -->
<!-- end of .span9 -->
<?php // get_sidebar(); ?>
<?php get_footer(); ?>