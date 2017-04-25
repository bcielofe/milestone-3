<?php $__env->startSection('banner'); ?>

<div class="container-fluid banner">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo e(asset('images/asparagus-2169305_1920.jpg')); ?>" alt="library">
      </div>

      <div class="item">
        <img src="res/banner1.jpeg" alt="activity table">
      </div>

      <div class="item">
        <img src="res/banner2.jpg" alt="one-on-one">  
      </div>

      <div class="item">
        <img src="res/banner3.jpg" alt="The Lounge">  
      </div>

      <div class="item">
        <img src="res/banner4.jpg" alt="discussion area">  
      </div>
    </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
    </span>
    <span class="sr-only">
      Previous
    </span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
    </span>
    <span class="sr-only">
      Next
    </span>
  </a>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>