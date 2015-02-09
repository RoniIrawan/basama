<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Import Stok Cbr';
$this->breadcrumbs=array(
	'Import Stok CBR SIX',
);
?>

<div class="page-header">
	<h1>Silahkan <em class="text-error">import</em> data stok toko CBR SIX</h1>
</div>


<?php if(Yii::app()->user->hasFlash('uploadCbr')): ?>
	<script type="text/javascript">$(".alert").alert('close');</script>				 
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Informasi! </strong><?php echo Yii::app()->user->getFlash('uploadCbr'); ?>
	</div>
<?php endif;?>

<div class="well well-large text-center">				
	<img src="<?php echo Yii::app()->request->baseUrl;?>/images/dbcbr.png" width="175" height="175" alt="IMPORT STOK CBR SIX" /><br><br>
	<div class="form-group">		    
	    
		<div class="form">
			<?php $form=$this->beginWidget('CActiveForm', array(
			 'id'=>'upload-form-cbr',
			 'enableAjaxValidation'=>true,
			 'clientOptions' => array(
                'validateOnSubmit' => true,
             ),
			 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
			)); ?>

		 	<p><?php echo $form->fileField($model,'BerkasCbr'); ?></p>
			<p><?php echo CHtml::submitButton('Import Stok', array('class' => 'btn btn-large btn-primary')); ?></p>
		 
			<?php $this->endWidget(); ?>						 
		</div>

	</div>
</div>