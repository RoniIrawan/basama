<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	// digunakan untuk mengatur action yg boleh di akses
	public function filters()
    {
        return array(
            'accessControl',
        );
    }

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('deny',
				'actions'=>array('ImportStok'),
				'users'=>array('?'),
			),			
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{		
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				// $this->redirect(Yii::app()->user->returnUrl);				
				$this->redirect(array('/site/CekStok'));
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function actionCekstok()
	{	
		$model = new VStok;		
		if(isset($_GET['VStok'])){					
            $model->attributes = $_GET['VStok'];            
            if($model->validate()){            	                
		        $criteria=new CDbCriteria;
				$criteria->select='size,qty'; 
				$criteria->condition='kode=:kode';
				$criteria->params=array(':kode'=>$model->kode);
				$model=VStok::model()->find($criteria);
            }
        }
		$this->render('CekStok', array('model'=>$model));
	}

	public function actionTentangKami()
	{
		$this->render('TentangKami');
	}

	public function actionImportStokJava() {
	    $model=new UploadStokJava;
	    if(isset($_POST['UploadStokJava'])){
	       $model->attributes=$_POST['UploadStokJava'];
	       if($model->validate()){
	        	$model->BerkasJava = CUploadedFile::getInstance($model, 'BerkasJava');	           
	        	$model->BerkasJava->saveAs(Yii::app()->basePath . '/../upload/javaseven/'.$model->BerkasJava->getName());
	           	
	        	$sql="truncate table javastok";
				$connection=Yii::app()->db;
				$command=$connection->createCommand($sql);
				$rowCount=$command->execute();				

	        	$csvFile=Yii::app()->basePath . '/../upload/javaseven/'.$model->BerkasJava->getName();
				if (($fp = fopen($csvFile, "r")) !== false) {
					while (($line = fgetcsv($fp, 1000, ",")) !== false) {						
						$stok_java = new Javastok;
						
						$stok_java->kode = $line[0];
						$stok_java->size = $line[1];
						$stok_java->qty = $line[2];						

						$stok_java->save();
					}
					fclose($fp);					
				}
	        	
	        	Yii::app()->user->setFlash('uploadJava','File '.$model->BerkasJava->getName().' telah di proses.');
	        	$this->refresh();
	       }
	    }
	    $this->render('ImportStok/ImportStokJava',array('model'=>$model));
	}

	public function actionImportStokCbr() {
	    $model=new UploadStokCbr;
	    if(isset($_POST['UploadStokCbr'])){
	       $model->attributes=$_POST['UploadStokCbr'];
	       if($model->validate()){
	           $model->BerkasCbr = CUploadedFile::getInstance($model, 'BerkasCbr');	           
	           $model->BerkasCbr->saveAs(Yii::app()->basePath . '/../upload/cbrsix/'.$model->BerkasCbr->getName());
	           
	        	$sql="truncate table cbrstok";
				$connection=Yii::app()->db;
				$command=$connection->createCommand($sql);
				$rowCount=$command->execute();

	           $csvFile=Yii::app()->basePath . '/../upload/cbrsix/'.$model->BerkasCbr->getName();
				if (($fp = fopen($csvFile, "r")) !== false) {
					while (($line_cbr = fgetcsv($fp, 1000, ",")) !== false) {						
						$stok_cbr = new Cbrstok;
						
						$stok_cbr->kode = $line_cbr[0];
						$stok_cbr->size = $line_cbr[1];
						$stok_cbr->qty = $line_cbr[2];
						
						$stok_cbr->save();
					}
					fclose($fp);					
				}

	           Yii::app()->user->setFlash('uploadCbr','File '.$model->BerkasCbr->getName().' telah di proses.');
	           $this->refresh();
	       }
	    }
	    $this->render('ImportStok/ImportStokCbr',array('model'=>$model));
	}

	public function actionImportStokSoga() {
	    $model=new UploadStokSoga;
	    if(isset($_POST['UploadStokSoga'])){
	       $model->attributes=$_POST['UploadStokSoga'];
	       if($model->validate()){
	           $model->BerkasSoga = CUploadedFile::getInstance($model, 'BerkasSoga');	           
	           $model->BerkasSoga->saveAs(Yii::app()->basePath . '/../upload/bsmsoga/'.$model->BerkasSoga->getName());
	           
	        	$sql="truncate table sogastok";
				$connection=Yii::app()->db;
				$command=$connection->createCommand($sql);
				$rowCount=$command->execute();

	           $csvFile=Yii::app()->basePath . '/../upload/bsmsoga/'.$model->BerkasSoga->getName();
				if (($fp = fopen($csvFile, "r")) !== false) {
					while (($line_soga = fgetcsv($fp, 1000, ",")) !== false) {						
						$stok_soga = new Sogastok;
						
						$stok_soga->kode = $line_soga[0];
						$stok_soga->size = $line_soga[1];
						$stok_soga->qty = $line_soga[2];

						$stok_soga->save();
					}
					fclose($fp);					
				}

	           Yii::app()->user->setFlash('uploadSoga','File '.$model->BerkasSoga->getName().' telah di proses.');
	           $this->refresh();
	       }
	    }
	    $this->render('ImportStok/ImportStokSoga',array('model'=>$model));
	}

}