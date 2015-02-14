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
		// $model=new VStok;		
		// $criteria=new CDbCriteria;
		// $criteria->select='warna,allsize'; 
		// $criteria->condition='kode=:kode';
		// $criteria->params=array(':kode'=>'DWC 262');
		// $model=VStok::model()->find($criteria);		
		// $this->render('CekStok',array('model'=>$model));

		$model = new CariForm;		
		if(isset($_GET['CariForm'])){					
            $model->attributes = $_GET['CariForm'];            
            if($model->validate()){            	
                // Yii::app()->user->setFlash('cari','Data berhasil dikirim.');                
             
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
	           	
	        	$sql="truncate table stokjavaseven";
				$connection=Yii::app()->db;
				$command=$connection->createCommand($sql);
				$rowCount=$command->execute();				

	        	$csvFile=Yii::app()->basePath . '/../upload/javaseven/'.$model->BerkasJava->getName();
				if (($fp = fopen($csvFile, "r")) !== false) {
					while (($line = fgetcsv($fp, 1000, ",")) !== false) {						
						$stok_java = new Stokjavaseven;
						
						$stok_java->kode = $line[0];
						$stok_java->warna = $line[1];
						$stok_java->allsize = $line[2];
						$stok_java->s = $line[3];
						$stok_java->m = $line[4];
						$stok_java->l = $line[5];
						$stok_java->xl = $line[6];
						$stok_java->xxl = $line[7];
						$stok_java->no_2 = $line[8];
						$stok_java->no_4 = $line[9];
						$stok_java->no_6 = $line[10];
						$stok_java->no_8 = $line[11];
						$stok_java->no_10 = $line[12];
						$stok_java->no_12 = $line[13];
						$stok_java->no_14 = $line[14];
						$stok_java->no_16 = $line[15];
						$stok_java->no_18 = $line[16];
						$stok_java->no_20 = $line[17];
						$stok_java->no_21 = $line[18];
						$stok_java->no_22 = $line[19];
						$stok_java->no_23 = $line[20];
						$stok_java->no_24 = $line[21];
						$stok_java->no_25 = $line[22];
						$stok_java->no_26 = $line[23];
						$stok_java->no_27 = $line[24];
						$stok_java->no_28 = $line[25];
						$stok_java->no_29 = $line[26];
						$stok_java->no_30 = $line[27];
						$stok_java->no_31 = $line[28];
						$stok_java->no_32 = $line[29];
						$stok_java->no_33 = $line[30];
						$stok_java->no_34 = $line[31];
						$stok_java->no_35 = $line[32];
						$stok_java->no_36 = $line[33];
						$stok_java->no_37 = $line[34];
						$stok_java->no_38 = $line[35];
						$stok_java->no_39 = $line[36];
						$stok_java->no_40 = $line[37];
						$stok_java->no_41 = $line[38];
						$stok_java->no_42 = $line[39];
						$stok_java->no_43 = $line[40];
						$stok_java->no_44 = $line[41];
						$stok_java->no_45 = $line[42];						

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
	           
	        	$sql="truncate table stokcbrsix";
				$connection=Yii::app()->db;
				$command=$connection->createCommand($sql);
				$rowCount=$command->execute();

	           $csvFile=Yii::app()->basePath . '/../upload/cbrsix/'.$model->BerkasCbr->getName();
				if (($fp = fopen($csvFile, "r")) !== false) {
					while (($line_cbr = fgetcsv($fp, 1000, ",")) !== false) {						
						$stok_cbr = new Stokcbrsix;
						
						$stok_cbr->kode = $line_cbr[0];
						$stok_cbr->warna = $line_cbr[1];
						$stok_cbr->allsize = $line_cbr[2];
						$stok_cbr->s = $line_cbr[3];
						$stok_cbr->m = $line_cbr[4];
						$stok_cbr->l = $line_cbr[5];
						$stok_cbr->xl = $line_cbr[6];
						$stok_cbr->xxl = $line_cbr[7];
						$stok_cbr->no_2 = $line_cbr[8];
						$stok_cbr->no_4 = $line_cbr[9];
						$stok_cbr->no_6 = $line_cbr[10];
						$stok_cbr->no_8 = $line_cbr[11];
						$stok_cbr->no_10 = $line_cbr[12];
						$stok_cbr->no_12 = $line_cbr[13];
						$stok_cbr->no_14 = $line_cbr[14];
						$stok_cbr->no_16 = $line_cbr[15];
						$stok_cbr->no_18 = $line_cbr[16];
						$stok_cbr->no_20 = $line_cbr[17];
						$stok_cbr->no_21 = $line_cbr[18];
						$stok_cbr->no_22 = $line_cbr[19];
						$stok_cbr->no_23 = $line_cbr[20];
						$stok_cbr->no_24 = $line_cbr[21];
						$stok_cbr->no_25 = $line_cbr[22];
						$stok_cbr->no_26 = $line_cbr[23];
						$stok_cbr->no_27 = $line_cbr[24];
						$stok_cbr->no_28 = $line_cbr[25];
						$stok_cbr->no_29 = $line_cbr[26];
						$stok_cbr->no_30 = $line_cbr[27];
						$stok_cbr->no_31 = $line_cbr[28];
						$stok_cbr->no_32 = $line_cbr[29];
						$stok_cbr->no_33 = $line_cbr[30];
						$stok_cbr->no_34 = $line_cbr[31];
						$stok_cbr->no_35 = $line_cbr[32];
						$stok_cbr->no_36 = $line_cbr[33];
						$stok_cbr->no_37 = $line_cbr[34];
						$stok_cbr->no_38 = $line_cbr[35];
						$stok_cbr->no_39 = $line_cbr[36];
						$stok_cbr->no_40 = $line_cbr[37];
						$stok_cbr->no_41 = $line_cbr[38];
						$stok_cbr->no_42 = $line_cbr[39];
						$stok_cbr->no_43 = $line_cbr[40];						
						$stok_cbr->no_44 = $line_cbr[41];
						$stok_cbr->no_45 = $line_cbr[42];

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
	           
	        	$sql="truncate table stokbsmsoga";
				$connection=Yii::app()->db;
				$command=$connection->createCommand($sql);
				$rowCount=$command->execute();

	           $csvFile=Yii::app()->basePath . '/../upload/bsmsoga/'.$model->BerkasSoga->getName();
				if (($fp = fopen($csvFile, "r")) !== false) {
					while (($line_soga = fgetcsv($fp, 1000, ",")) !== false) {						
						$stok_soga = new Stokbsmsoga;
						
						$stok_soga->kode = $line_soga[0];
						$stok_soga->warna = $line_soga[1];
						$stok_soga->allsize = $line_soga[2];
						$stok_soga->s = $line_soga[3];
						$stok_soga->m = $line_soga[4];
						$stok_soga->l = $line_soga[5];
						$stok_soga->xl = $line_soga[6];
						$stok_soga->xxl = $line_soga[7];
						$stok_soga->no_2 = $line_soga[8];
						$stok_soga->no_4 = $line_soga[9];
						$stok_soga->no_6 = $line_soga[10];
						$stok_soga->no_8 = $line_soga[11];
						$stok_soga->no_10 = $line_soga[12];
						$stok_soga->no_12 = $line_soga[13];
						$stok_soga->no_14 = $line_soga[14];
						$stok_soga->no_16 = $line_soga[15];
						$stok_soga->no_18 = $line_soga[16];
						$stok_soga->no_20 = $line_soga[17];
						$stok_soga->no_21 = $line_soga[18];
						$stok_soga->no_22 = $line_soga[19];
						$stok_soga->no_23 = $line_soga[20];
						$stok_soga->no_24 = $line_soga[21];
						$stok_soga->no_25 = $line_soga[22];
						$stok_soga->no_26 = $line_soga[23];
						$stok_soga->no_27 = $line_soga[24];
						$stok_soga->no_28 = $line_soga[25];
						$stok_soga->no_29 = $line_soga[26];
						$stok_soga->no_30 = $line_soga[27];
						$stok_soga->no_31 = $line_soga[28];
						$stok_soga->no_32 = $line_soga[29];
						$stok_soga->no_33 = $line_soga[30];
						$stok_soga->no_34 = $line_soga[31];
						$stok_soga->no_35 = $line_soga[32];
						$stok_soga->no_36 = $line_soga[33];
						$stok_soga->no_37 = $line_soga[34];
						$stok_soga->no_38 = $line_soga[35];
						$stok_soga->no_39 = $line_soga[36];
						$stok_soga->no_40 = $line_soga[37];
						$stok_soga->no_41 = $line_soga[38];
						$stok_soga->no_42 = $line_soga[39];
						$stok_soga->no_43 = $line_soga[40];						
						$stok_soga->no_44 = $line_soga[41];
						$stok_soga->no_45 = $line_soga[42];

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