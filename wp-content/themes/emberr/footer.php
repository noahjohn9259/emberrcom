<?php
    /**
     * Footer Template
     *
     *
     * @file           footer.php
     * @package        StrapPress 
     * @author         Brad Williams 
     * @copyright      2011 - 2012 Brag Interactive
     * @license        license.txt
     * @version        Release: 2.2.1
     * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
     * @since          available since Release 1.0
     */
    ?>
</div><!-- end of wrapper-->
<?php responsive_wrapper_end(); // after wrapper hook ?>

<?php responsive_container_end(); // after container hook ?>
<div id="footer" class="clearfix footer">
    <div class="footer_text clearfix">
        <div class="copyright">
            Copyright &copy; <?php echo date('Y'); ?> by <a class="site_link" href="<?php echo home_url(); ?>">Emberr.com</a>
        </div>        
        <ul class="clearfix">
            <li><a style="color: #fff;" href="#">Terms and conditions</a></li>
            <li><a style="color: #fff;" role="button" data-toggle="modal" href="#contact_us_modal">Contact Us</a></li>
            <li><a style="color: #fff;" role="button" data-toggle="modal" href="#my_listings">My Listings</a></li>
            <li><a style="color: #fff;" role="button" data-toggle="modal" href="#profile">Profile</a></li>
        </ul>
    </div>
    <!-- end #footer-wrapper -->
</div>
</div><!-- end #footer -->
<?php wp_footer(); ?>
</body>
</html>
