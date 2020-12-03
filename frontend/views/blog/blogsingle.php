<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>


  <div class="intro intro-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Blog Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Library</a>
            </li>
            <li class="breadcrumb-item active">Data</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Blog Single Section ======= -->
    <section class="blog-wrapper sect-pt4" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="post-box">
              <div class="post-thumb">
                <img src="<?=yii::$app->request->baseUrl;?>/img/post-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="post-meta">
                <h1 class="article-title">Web development</h1>
                <ul>
                  <li>
                    <span class="ion-ios-person"></span>
                    <a href="#">Jason London</a>
                  </li>
                  <li>
                    <span class="ion-pricetag"></span>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <span class="ion-chatbox"></span>
                    <a href="#">14</a>
                  </li>
                </ul>
              </div>
              <div class="article-content">
                <p>
                  I am a well qualified web developer who lives in kenya,, Nairobi currently i reside in Westlands. I enjoy building everything from small business sites to rich interactive web app.If you are a business looking a web platform or an employer looking to hire you can get in touch with me.
                </p>
                <p>
                  Am also a frontend developer with wigglestechnology.My expertise is in the area of responsive design.With every line of code i strive to make the web a beatiful place.
                </p>
                <p>
                  I was also nominated one of the fastest growing web developer under 25
                </p>
                
                <blockquote class="blockquote">
                  <p class="mb-0">we strive to meet your demand through every single code</p>
                </blockquote>
                <p>
                  looking forward to bringing a fresh touch in your web world as well as providing a remarkable experience that is unforgetable. 
                </p>
              </div>
            </div>
            <div class="box-comments">
              <div class="title-box-2">
                <h4 class="title-comments title-left">Comments (34)</h4>
              </div>
              <ul class="list-comments">
                <li>
                  <div class="comment-avatar">
                    <img src="<?=yii::$app->request->baseUrl;?>/img/testimonial-2.jpg" alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author">Oliver Colmenares</h4>
                    <span>18 Sep 2017</span>
                    <p>
                      Remarkable job so legendary

                    </p>
                    <a href="3">Reply</a>
                  </div>
                </li>
                <li>
                  <div class="comment-avatar">
                    <img src="<?=yii::$app->request->baseUrl;?>/img/testimonial-4.jpg" alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author">Carmen Vegas</h4>
                    <span>18 Sep 2017</span>
                    <p>
                      looking forward to working with you again.
                    </p>
                    <a href="3">Reply</a>
                  </div>
                </li>
                <li class="comment-children">
                  <div class="comment-avatar">
                    <img src="<?=yii::$app->request->baseUrl;?>/img/testimonial-2.jpg" alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author">Oliver Colmenares</h4>
                    <span>18 Sep 2017</span>
                    <p>
                      He is an outstanding web developer
                    </p>
                    <a href="3">Reply</a>
                  </div>
                </li>
                <li>
                  <div class="comment-avatar">
                    <img src="<?=yii::$app->request->baseUrl;?>/img/testimonial-2.jpg" alt="">
                  </div>
                  <div class="comment-details">
                    <h4 class="comment-author">Oliver Colmenares</h4>
                    <span>18 Sep 2017</span>
                    <p>
                      always user friendly
                    </p>
                    <a href="3">Reply</a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="form-comments">
              <div class="title-box-2">
                <h3 class="title-left">
                  Leave a Reply
                </h3>
              </div>
              <form class="form-mf">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control input-mf" id="inputName" placeholder="Name *" required>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="email" class="form-control input-mf" id="inputEmail1" placeholder="Email *" required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="url" class="form-control input-mf" id="inputUrl" placeholder="Website">
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea id="textMessage" class="form-control input-mf" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget-sidebar sidebar-search">
              <h5 class="sidebar-title">Search</h5>
              <div class="sidebar-content">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary btn-search" type="button">
                        <span class="ion-android-search"></span>
                      </button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <div class="widget-sidebar">
              <h5 class="sidebar-title">Recent Post</h5>
              <div class="sidebar-content">
                <ul class="list-sidebar">
                  <li>
                    <a href="#">i need a marketing website.</a>
                  </li>
                  <li>
                    <a href="#">Need a rensponsive design</a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="widget-sidebar">
              <h5 class="sidebar-title">Archives</h5>
              <div class="sidebar-content">
                <ul class="list-sidebar">
                  <li>
                    <a href="#">September, 2017.</a>
                  </li>
                  <li>
                    <a href="#">April, 2017.</a>
                  </li>
                  
                  

                </ul>
              </div>
            </div>
            <div class="widget-sidebar widget-tags">
              <h5 class="sidebar-title">Tags</h5>
              <div class="sidebar-content">
                <ul>
                  <li>
                    <a href="#">Web.</a>
                  </li>
                  <li>
                    <a href="#">Design.</a>
                  </li>
                  <li>
                    <a href="#">Travel.</a>
                  </li>
                  <li>
                    <a href="#">Photoshop</a>
                  </li>
                  <li>
                    <a href="#">Corel Draw</a>
                  </li>
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Portfolio</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>