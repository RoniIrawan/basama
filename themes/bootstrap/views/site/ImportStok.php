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


<?php if(Yii::app()->user->hasFlash('upload')): ?>
	<script type="text/javascript">$(".alert").alert('close');</script>				 
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Informasi! </strong><?php echo Yii::app()->user->getFlash('upload'); ?>
	</div>
<?php endif;?>

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
				    
					<div class="form">
						<?php $form=$this->beginWidget('CActiveForm', array(
						 'id'=>'upload-form',
						 'enableAjaxValidation'=>true,
						 'clientOptions' => array(
                            'validateOnSubmit' => true,
                         ),
						 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
						)); ?>

					 	<p><?php echo $form->fileField($model,'BerkasJava'); ?></p>
						<p><?php echo CHtml::submitButton('Import Stok', array('class' => 'btn btn-large btn-primary')); ?></p>
					 
					<?php $this->endWidget(); ?>						 
					</div>

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
