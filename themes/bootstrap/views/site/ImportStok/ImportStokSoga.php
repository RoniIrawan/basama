<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Import Stok Soga';
$this->breadcrumbs=array(
	'Import Stok BSM SOGA',
);
?>

<div class="page-header">
	<h1>Silahkan <em class="text-error">import</em> data stok toko BSM SOGA</h1>
</div>


<?php if(Yii::app()->user->hasFlash('uploadSoga')): ?>
	<script type="text/javascript">$(".alert").alert('close');</script>				 
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Informasi! </strong><?php echo Yii::app()->user->getFlash('uploadSoga'); ?>
	</div>
<?php endif;?>

<div class="well well-large text-center">				
	<img src="<?php echo Yii::app()->request->baseUrl;?>/images/dbsoga.png" width="175" height="175" alt="IMPORT STOK BSM SOGA" /><br><br>
	<div class="form-group">		    
	    
		<div class="form">
			<?php $form=$this->beginWidget('CActiveForm', array(
			 'id'=>'upload-form-soga',
			 'enableAjaxValidation'=>true,
			 'clientOptions' => array(
                'validateOnSubmit' => true,
             ),
			 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
			)); ?>

		 	<p><?php echo $form->fileField($model,'BerkasSoga'); ?></p>
			<p><?php echo CHtml::submitButton('Import Stok', array('class' => 'btn btn-large btn-primary',
				'onSubmit'=>'js:function(){$("#ajaxs").addClass("loading");}')); ?></p>					 
		<?php $this->endWidget(); ?>						 
		</div>

	</div>
</div>

<div id="ajaxs" class="div loading div-loading"></div>