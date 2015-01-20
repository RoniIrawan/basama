<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Cek Stok';
$this->breadcrumbs=array(
	'Cek Stok',
);
?>
<h1>Cek Stok</h1>


<div class="tengah">	
	<img src="<?php echo Yii::app()->request->baseUrl;?>/images/basama.jpg" width="350" height="100" alt="BASAMA" /><br>	
	<?php echo CHtml::textField('Text', '',
 		array('id'=>'tCari', 
       		'class'=>'textox', 
       		'maxlength'=>7,
       		'placeholder'=>'masukan kode barang...')); 
    ?><br><br>
	<?php echo CHtml::link('Cari...',array('/site/page', 'view'=>'cekstok'),array('class'=>'myButtonGreen')); ?>
</div>
