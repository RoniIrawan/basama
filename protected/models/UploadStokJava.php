<?php
class UploadStokJava extends CFormModel
{
	public $BerkasJava;
	public $kode;
	public $total;

	public function rules()
	{
		return array(
		   array('BerkasJava','file',
		    'types'=>'csv', //tipe file gambar
		    'maxSize'=>100*1024*1024, // max:10MB
		    'allowEmpty'=>false,
		   ),
		);
	}

	public function attributeLabels() 
	{
		return array(
			'BerkasJava'=>'File CSV',
		);
	}
}