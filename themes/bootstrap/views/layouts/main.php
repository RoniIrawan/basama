<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
    
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" type="image/x-icon" />
	<?php Yii::app()->bootstrap->register(); ?>	
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Beranda', 'url'=>array('/site'), 'visible'=>Yii::app()->user->isGuest, 'icon'=>'icon-home'),
                array('label'=>'Cek Stok', 'url'=>array('/site/CekStok/'), 'icon'=>'icon-eye-open'),
                array('label'=>'Import Stok', 'visible'=>!Yii::app()->user->isGuest, 'icon'=>'icon-arrow-up', 'items'=>array(
                	array('label'=>'JAVA SEVEN', 'url'=>array('/site/ImportStokJava/'), 'visible'=>!Yii::app()->user->isGuest),
                	array('label'=>'CBR SIX', 'url'=>array('/site/ImportStokCbr/'), 'visible'=>!Yii::app()->user->isGuest),
                	array('label'=>'BSM SOGA', 'url'=>array('/site/ImportStokSoga/'), 'visible'=>!Yii::app()->user->isGuest),
                	)),
                array('label'=>'Tentang Kami', 'url'=>array('/site/TentangKami/'), 'visible'=>Yii::app()->user->isGuest,'icon'=>'icon-info-sign'),
                // array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Masuk', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest, 'icon'=>'icon-user'),
                array('label'=>'Keluar ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'icon'=>'icon-off')
            ),
        ),
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>



	<?php echo $content; ?>

<!-- 	<?php 
		$flashMessages = Yii::app()->user->getFlashes();
		if ($flashMessages) {
			foreach ($flashMessages as $key => $message) { ?>
				<script type="text/javascript">$(".alert").alert('close');</script>
				<div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert">&times;</button>
				    <strong>Peringatan! </strong><?php echo $message; ?>
			    </div>	
			<?php }
		}
	 ?> -->
	 
	<div class="clear"></div>

	<div id="footer">
		<div class="container">		
			<blockquote class="pull-right">
			    <p>Copyright &copy; <?php echo date('Y'); ?> BASAMA GROUP.</p>
			    <small>Developed by RONI. <cite title="Yii Framework"><?php echo Yii::powered(); ?></cite></small>
		    </blockquote>
	    </div>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
