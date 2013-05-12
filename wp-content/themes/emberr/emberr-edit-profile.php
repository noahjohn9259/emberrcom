<?php
    /**
    * Template Name:  Edit Profile
    * @file           emberr-edit-profile.php
    */
    ?>
<?php get_header('user-logged-in'); ?>
<?php get_sidebar('left-user-logged-in'); ?>
        <!--tab menu -->
        <div class="span9 addlisting_container">
            <h1><?php echo get_the_title(); ?></h1>
            <form class="" name="" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="span12">
                    <ul class="form_fields">
                        <li class="row-fluid">
                            <div class="span6"><label for="">Name</label><input type="text" class="span12" name="name" id="name" /></div>
                            <div class="span6"><label for="">Phone</label><input type="text" class="span12" name="phone" id="phone" /></div>
                        </li>
                        <li class="row-fluid">
                            <div class="span6"><label for="">Email</label><input type="text" class="span12" name="email" id="email" /></div>
                            <div class="span6"><label for="">Website</label><input type="text" class="span12" name="website" id="website" /></div>
                        </li>
                        <li class="row-fluid">
                            <div class="span6"><label for="">Address</label><input type="text" class="span12" name="address_1" id="address_1" /><input type="text" class="span12" name="address_2" id="address_2" /></div>
                            <div class="span6"><label for="">City</label><input type="text" class="span12" name="city" id="city" /></div>
                        </li>
                        <li class="row-fluid">
                            <div class="span6"><label for="">State</label><select class="span12" name="state" id="state">
                                <option value="0"></option>
                                <option value="1">California</option>
                            </select></div>
                            <div class="span6"><label for="">Zip Code</label><input type="text" class="span12" name="zip_code" id="zip_code" /></div>
                        </li>
                        <li class="row-fluid">
                            <div class="span6"><label for="">Password</label><input type="text" class="span12" name="password" id="password" /></div>
                            <div class="span6"><label for="">Repeat Password</label><input type="text" class="span12" name="verify_password" id="verify_password" /></div>
                        </li>
                        <li class="row-fluid">
                            <div class="span12"><label for="">Bio</label><textarea name="bio" id="bio" cols="30" rows="3"></textarea></div>
                        </li>
                        <li class="row-fluid">
                            <div class="span12"><label for="">Upload a profile picture</label><input type="file" name="profile_pic" id="profile_pic" /></div>
                            <div class="row-fluid">
                                <div class="span12"><img class="profile_pic" src="<?php echo get_template_directory_uri().'/includes/images/pic1.jpg'; ?>" alt="" /></div>
                            </div>                            
                        </li>
                        <li class="row-fluid">
                            <div class="row-fluid">
                                <div class="span12 form_footer clearfix">
                                    <input class="btn btn-primary btn-medium pull-right" type="submit" value="Save Settings">              
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>            
            </form>
        </div>
    </div>
</div>
<!-- end of #content -->
<!-- end of .span9 -->
<?php // get_sidebar(); ?>
<?php get_footer(); ?>