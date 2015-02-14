<?php
class CariForm extends CFormModel {
    public $kode;
    public $allsize;   

    public function rules() {
        return array(
            array('kode', 'required'),
        );
    }

    public function attributeLabels() {
        return array(
            'kode' => 'Kode',
        );
    }

    public static function cariStok(){
        $data = Yii::app()->db->createCommand()
        ->select('allsize')
        ->from('v_stok')        
        ->where('kode=:kode', array(':kode'=>'YIC 437'))
        ->queryRow();
        die($data);
        return $data;
    }
}