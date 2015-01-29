<?php 
/* @var $this AppController */

$this->pageTitle=Yii::app()->name . ' - Cek Stok'; 
$this->breadcrumbs=array(
	'Cek Stok',
);
?><br><br><br><br><br><br>
<div class="text-center ">
	<img src="<?php echo Yii::app()->request->baseUrl;?>/images/basama.jpg" width="350" height="100" alt="BASAMA"/><br><br>
	<form class="form-search clearfix">
	    <div class="input-append">	    	
		    <input style="text-transform: uppercase" maxlength="7" type="text" class="span3 search-query text-center" placeholder="Masukan Kode Barang">
		    <button type="submit" class="btn btn-primary">Cek Stok</button>
	    </div>	    
    </form>
</div><br><br><br><br><br><br><br><br>
