<?php
class UploadStokSoga extends CFormModel
{
	public $BerkasSoga;

	public function rules()
	{
		return array(
		   array('BerkasSoga','file',
		    'types'=>'xls', //tipe file gambar
		    'maxSize'=>100*1024*1024, // max:10MB
		   ),
		);
	 }
}