      <?php
/* @var $this yii\web\View */
use yii\helpers\Url;

?>
 <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">10</p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">5</p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-people"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">55</p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">3</p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
                My Portfolio              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-1.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="<?=yii::$app->request->baseUrl;?>/img/work-1.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">phone environment</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="<?=Url::to(['work/portfoliodetails']);?>"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-2.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="<?=yii::$app->request->baseUrl;?>/img/work-2.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">home office environment</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="<?=Url::to(['work/portfoliodetails']);?>"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-3.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="<?=yii::$app->request->baseUrl;?>/img/work-3.jpg" alt="" class="img-fluid">
                  
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">business environment</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="<?=Url::to(['work/portfoliodetails']);?>"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-4.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="<?=yii::$app->request->baseUrl;?>/img/work-4.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Legal world</h2>
                    <div class="w-more">
                      <span class="w-ctegory">web design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="<?=Url::to(['work/portfoliodetails']);?>"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-5.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="<?=yii::$app->request->baseUrl;?>/img/work-5.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Home decor</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="<?=Url::to(['work/portfoliodetails']);?>"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-6.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="<?=yii::$app->request->baseUrl;?>/img/work-6.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Music studios</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="<?=Url::to(['work/portfoliodetails']);?>"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-mf" class="owl-carousel owl-theme">
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="assets/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">James Mwangi</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Never met such an outstanding web developer always on point congrats!
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="assets/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">paul sotario</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                   A real taste of a web developer. great job paul
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->
