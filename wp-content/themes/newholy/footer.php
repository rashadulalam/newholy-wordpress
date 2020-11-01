<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newholy
 */

?>


<footer id="footer-area">
    <div class="footer-top py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-xs-12">
            <div class="footer-widget">
              <h3 class="fw-header">Quick Links</h3>
              <ul class="list-unstyled fw-list float-left">
               <li><a href="">DSHE</a></li>
                <li><a href="">BANBEIS</a></li>
                <li><a href="">ACCOUNT</a></li>
                <li><a href="">BD National Portal</a>
                <li><a href="">Ministry of Education</a>
              </ul>
              <ul class="list-unstyled fw-list float-right">
               <li><a href="">DSHE</a></li>
                <li><a href="">BANBEIS</a></li>
                <li><a href="">ACCOUNT</a></li>
                <li><a href="">BD National Portal</a>
                <li><a href="">Ministry of Education</a>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-xs-12">
            <div class="footer-widget">
              <h3 class="fw-header">Contact Information</h3>
              <p><i class='fas fa-phone-alt'></i> Contact No: 01712121212</p>
              <p><i class="fas fa-envelope"></i> Email: info@newholy.com</p>
              <p><i class="fas fa-map-marker"></i> Address: Dhaka Bangladesh.</p>
            </div>
          </div>
          <div class="col-md-3 col-xs-12">
            <div class="footer-widget">
              <h3 class="fw-header">Maintained By</h3>
              <img src="http://placehold.it/200x80" alt="" class="img-fluid">
              <p>Lorem ipsum dolor.</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end .footer-top -->
    <div class="site-copyright">
      <p class="mx-auto text-center">Design & Developed by  IT Lab Solutions Ltd.   Helpline -  +88 018 4248 5222</p>
    </div>
  </footer>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>


  <?php wp_footer(); ?>
</body>
</html>
