<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>
 <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Portfolio</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="<?=Url::to(['/site/index']);?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?=Url::to(['/about/about']);?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?=Url::to(['services/services']);?>">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?=Url::to(['/work/work/']);?>">Work</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?=Url::to(['/blog/blog']);?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?=Url::to(['/contacts/contacts']);?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 