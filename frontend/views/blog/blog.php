  <?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>
<!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Blog
              </h3>
              <p class="subtitle-a">
                My blog
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="<?=yii::$app->request->baseUrl;?>/img/post-1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Travel</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="<?=Url::to(['blog/blogsingle']);?>">See more ideas about Travel</a></h3>
                <p class="card-description">
                  
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Paul Ndung'u</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="<?=yii::$app->request->baseUrl;?>/img/post-2.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="<?=Url::to(['blog/blogsingle']);?>">See more ideas about Travel</a></h3>
                <p class="card-description">
                  
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Paul Ndung'u</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="blog-single.html"><img src="<?=yii::$app->request->baseUrl;?>/img/post-3.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="<?=Url::to(['blog/blogsingle']);?>">See more ideas about Travel</a></h3>
                <p class="card-description">
                  
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="<?=yii::$app->request->baseUrl;?>img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">Paul Ndung'u</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Section -->