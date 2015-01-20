<?php
/* @var $this AppController */

$this->pageTitle=Yii::app()->name . ' - Tentang Kami';
$this->breadcrumbs=array(
	'Tentang Kami',
);
?>
<legend>
	<p class="lead">Kepada semua mitra <b class="text-info">BASAMA</b> yang kami hormati,</p>
</legend>
<blockquote>
	<p>Web site ini kami sediakan sebagai media untuk menginformasikan ketersediaan/stok produk kami kepada semua pihak yang telah bekerja sama dengan kami.
    	<b>BSM 67 (BASAMA)</b> memiliki komitmen untuk selalu meningkatkan pelayanan dan kepuasan Anda sebagai prioritas utama yang akan terus kami lakukan dari waktu ke waktu.
    	Semoga informasi yang tersedia di dalam web site ini dapat bermanfaat bagi Anda.</p>
</blockquote>    
<p class="text-right lead">Terima kasih.</p><br>

<ul class="thumbnails">
	<li class="span4">
		<a href="#" class="thumbnail">
			<img src="<?php echo Yii::app()->request->baseUrl;?>/images/java2.jpg" width="300" height="200" alt="JAVA SEVEN">
		</a>
	</li>
	<li class="span4">
		<a href="#" class="thumbnail">
			<img src="<?php echo Yii::app()->request->baseUrl;?>/images/cbr2.jpg" width="300" height="200" alt="CBR SIX">
		</a>
	</li>
	<li class="span4">
		<a href="#" class="thumbnail">
			<img src="<?php echo Yii::app()->request->baseUrl;?>/images/soga2.jpg" width="300" height="200" alt="BSM SOGA">
		</a>
	</li>
</ul>