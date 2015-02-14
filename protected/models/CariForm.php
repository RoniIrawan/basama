<?php
class CariForm extends CFormModel {
    public $kode;   

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
}
?>