<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Import Stok';
$this->breadcrumbs=array(
	'Import Stok',
);
?>
<h1>Import Stok</h1>
<div class="tengah">	
	<br>
	<img src="<?php echo Yii::app()->request->baseUrl;?>/images/db.png" width="225" height="225" alt="IMPORT STOK" /><br><br><br>
	<input type="file" name="excel"><br><br>
	<?php echo CHtml::link('Proses',array('/site/page', 'view'=>'importstok'),array('class'=>'myButton')); ?><br>
</div>