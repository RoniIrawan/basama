<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Masuk';
$this->breadcrumbs=array(
	'Masuk',
);
?>
<div class="page-header">
	<h1>Masuk ke sistem</h1>
</div>

<div class="well well-large">
	<p class="note"><small><em>Tanda <span class="required">*</span> harus diisi.</em></small></p>
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'login-form',
	    'type'=>'vertical',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
		'input'=>'bootstrap.widgets.input.TbInputVertical',
	)); ?>
	<?php echo $form->textFieldRow($model,'username'); ?>
	<?php echo $form->passwordFieldRow($model,'password'); ?>
	<?php echo $form->checkBoxRow($model,'rememberMe'); ?>

	<div class="form-action">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'size'=>'large',
            'type'=>'success',
            'label'=>'Masuk',
        )); ?>
	</div>
	<?php $this->endWidget(); ?>
</div>