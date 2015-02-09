<?php
/* @var $this AppController */

$this->pageTitle=Yii::app()->name;
?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide/basama.jpg" alt="BSM 67">
      <div class="carousel-caption">
          <h3 class="text-info">BASAMA GROUP</h3>          
      </div>
    </div>
    <div class="item">
      <img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide/shoes_factory.jpg" alt="Handmade Product">
      <div class="carousel-caption">
          <h3 class="text-info"><em>Handmade industry</em></h3>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide/customer.jpg" alt="We Love Customer">
      <div class="carousel-caption">
          <h3 class="text-info">Pelayanan pelanggan</h3>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide/fashion_show.jpg" alt="Updated Product">
      <div class="carousel-caption">
          <h3 class="text-info">Produk terkini</h3>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->

<script>
    $('.carousel').carousel({
        interval: 3000
    })
</script>