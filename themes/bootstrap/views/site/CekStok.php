<?php 
/* @var $this AppController */

$this->pageTitle=Yii::app()->name . ' - Cek Stok'; 
$this->breadcrumbs=array(
	'Cek Stok',
);
?>
<?php if(Yii::app()->user->hasFlash('cari')): ?>
	<script type="text/javascript">$(".alert").alert('close');</script>				 
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Informasi! </strong><?php echo Yii::app()->user->getFlash('cari'); ?>
	</div>
<?php endif;?>
<br><br><br><br><br><br>
<div class="text-center ">
	<img src="<?php echo Yii::app()->request->baseUrl;?>/images/basama.jpg" width="350" height="100" alt="BASAMA"/><br><br>
	<form class="form-search clearfix">
	    <div class="input-append">
	    	<?php $form=$this->beginWidget('CActiveForm', array(
			    'id'=>'cari-form',
			 	'enableAjaxValidation'=>true,
			 	'clientOptions' => array(
                'validateOnSubmit' => true,
             	),
			 'htmlOptions'=>array('enctype'=>'multipart/form-data'),			
			)); ?>		

			<?php echo $form->textField($model,'kode', array(
				'style'=>'text-transform: uppercase',
				'maxlength'=>'7',
				'class'=>'span3 search-query text-center',
				'placeholder'=>'Masukan Kode Barang'
			)); ?>
			
			<?php echo CHtml::submitButton('Cek Stok', array('class' => 'btn btn-primary')); ?>

		    <?php $this->endWidget(); ?>

	    </div>	    
    </form>
<<<<<<< HEAD
</div><br><br><br><br><br>
<!-- <P><?php foreach($model as $data): ?></P>
<p><?php echo($model->size.$model->qty); ?></p>
<p><?php endforeach; ?></p> -->

<?php echo CHtml::encode($model->size); ?>
=======
</div><br><br><br><br><br>
>>>>>>> 83f8b7e68fe796b1a51cde14a77d921a5c616415
