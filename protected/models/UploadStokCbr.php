<?php
class UploadStokCbr extends CFormModel
{
	public $BerkasCbr;

	public function rules()
	{
		return array(
		   array('BerkasCbr','file',
		    'types'=>'csv', //tipe file gambar
		    'maxSize'=>100*1024*1024, // max:10MB
		    'allowEmpty'=>false,
		   ),
		);
	 }

	public function attributeLabels() 
	{
		return array(
			'BerkasCbr'=>'File CSV',
		);
	}
}