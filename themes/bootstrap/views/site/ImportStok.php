<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Import Stok';
$this->breadcrumbs=array(
	'Import Stok',
);
?>

<div class="page-header">
	<h1>Silahkan <em class="text-error">import</em> data stok sesuai toko</h1>
</div>

<div class="tabbable tabs-left">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#tab1" data-toggle="tab"><strong>JAVA SEVEN</strong></a></li>
		<li><a href="#tab2" data-toggle="tab"><strong>CBR SIX</strong></a></li>
		<li><a href="#tab3" data-toggle="tab"><strong>BSM SOGA</strong></a></li>
	</ul>
	<div class="tab-content text-center">
		<div class="tab-pane active" id="tab1">
			<div class="well well-large">				
				<img src="<?php echo Yii::app()->request->baseUrl;?>/images/dbjava.png" width="175" height="175" alt="IMPORT STOK JAVA SEVEN" /><br><br>
				<div class="form-group">
				    <p><input type="file" id="exampleInputFile"></p>
				    <p><button class="btn btn-large btn-primary" type="button">Import data stok</button></p>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="tab2">
			<div class="well well-large">				
				<img src="<?php echo Yii::app()->request->baseUrl;?>/images/dbcbr.png" width="175" height="175" alt="IMPORT STOK CBR SIX" /><br><br>
				<div class="form-group">
				    <p><input type="file" id="exampleInputFile"></p>
				    <p><button class="btn btn-large btn-primary" type="button">Import data stok</button></p>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="tab3">
			<div class="well well-large">				
				<img src="<?php echo Yii::app()->request->baseUrl;?>/images/dbsoga.png" width="175" height="175" alt="IMPORT STOK BSM SOGA" /><br><br>
				<div class="form-group">
				    <p><input type="file" id="exampleInputFile"></p>
				    <p><button class="btn btn-large btn-primary" type="button">Import data stok</button></p>
				</div>
			</div>
		</div>
	</div>
</div>