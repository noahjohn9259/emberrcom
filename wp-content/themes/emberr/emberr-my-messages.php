<?php
    /**
    * Template Name:  My Messages
    * @file           emberr-my-messages.php
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
                                <tr>
                                    <td>Lorem</td>
                                    <td>Lorem ipsum dolor amet, consectetur adipisicing elit, sed do eiusmod...</td>
                                    <td class="date_align">Jan 28</td>
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