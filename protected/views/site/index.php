<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!-- slider start -->

<script src="<?php echo Yii::app()->request->baseUrl;?>/css/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl;?>/css/js/jquery.bxslider.min.js"></script>
<link href="<?php echo Yii::app()->request->baseUrl;?>/css/jquery.bxslider.css" rel="stylesheet" />


<ul class="bxslider">
  <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide/slide1.jpg" title="SLIDE 1"></li>
  <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide/slide2.jpg" title="SLIDE 2"></li>
  <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide/slide3.jpg" title="SLIDE 3"></li>
  <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide/slide4.jpg" title="SLIDE 4"></li>
  <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide/slide5.jpg" title="SLIDE 5"></li>
  <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide/slide6.jpg" title="SLIDE 6"></li>
  <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide/slide7.jpg" title="SLIDE 7"></li>
  <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide/slide8.jpg" title="SLIDE 8"></li>  
  <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide/slide10.jpg" title="SLIDE 10"></li>
  <li><img src="<?php echo Yii::app()->request->baseUrl;?>/images/slide/slide11.jpg" title="SLIDE 11"></li>
</ul>

<script type="text/javascript">
	$('.bxslider').bxSlider({
	  mode: 'fade',
	  auto: true,
	  pause: '5000'
	});
</script>
<!-- slider end -->

<div class="tengah">
	<?php echo CHtml::link('Cek Stok',array('/site/page', 'view'=>'cekstok'),array('class'=>'myButton')); ?>	
</div>