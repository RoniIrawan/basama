<?php

/**
 * This is the model class for table "v_stok".
 *
 * The followings are the available columns in table 'v_stok':
 * @property string $kode
 * @property string $warna
 * @property integer $allsize
 * @property integer $s
 * @property integer $m
 * @property integer $l
 * @property integer $xl
 * @property integer $xxl
 * @property integer $no_2
 * @property integer $no_4
 * @property integer $no_6
 * @property integer $no_8
 * @property integer $no_10
 * @property integer $no_12
 * @property integer $no_14
 * @property integer $no_16
 * @property integer $no_18
 * @property integer $no_20
 * @property integer $no_21
 * @property integer $no_22
 * @property integer $no_23
 * @property integer $no_24
 * @property integer $no_25
 * @property integer $no_26
 * @property integer $no_27
 * @property integer $no_28
 * @property integer $no_29
 * @property integer $no_30
 * @property integer $no_31
 * @property integer $no_32
 * @property integer $no_33
 * @property integer $no_34
 * @property integer $no_35
 * @property integer $no_36
 * @property integer $no_37
 * @property integer $no_38
 * @property integer $no_39
 * @property integer $no_40
 * @property integer $no_41
 * @property integer $no_42
 * @property integer $no_43
 * @property integer $no_44
 * @property integer $no_45
 */
class VStok extends CActiveRecord
{
	public $kode;
	public $warna;
	public $allsize;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'v_stok';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('allsize, s, m, l, xl, xxl, no_2, no_4, no_6, no_8, no_10, no_12, no_14, no_16, no_18, no_20, no_21, no_22, no_23, no_24, no_25, no_26, no_27, no_28, no_29, no_30, no_31, no_32, no_33, no_34, no_35, no_36, no_37, no_38, no_39, no_40, no_41, no_42, no_43, no_44, no_45', 'numerical', 'integerOnly'=>true),
			array('kode', 'length', 'max'=>7),
			array('warna', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kode', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode' => 'Kode',
			'warna' => 'Warna',
			'allsize' => 'Allsize',
			's' => 'S',
			'm' => 'M',
			'l' => 'L',
			'xl' => 'Xl',
			'xxl' => 'Xxl',
			'no_2' => 'No 2',
			'no_4' => 'No 4',
			'no_6' => 'No 6',
			'no_8' => 'No 8',
			'no_10' => 'No 10',
			'no_12' => 'No 12',
			'no_14' => 'No 14',
			'no_16' => 'No 16',
			'no_18' => 'No 18',
			'no_20' => 'No 20',
			'no_21' => 'No 21',
			'no_22' => 'No 22',
			'no_23' => 'No 23',
			'no_24' => 'No 24',
			'no_25' => 'No 25',
			'no_26' => 'No 26',
			'no_27' => 'No 27',
			'no_28' => 'No 28',
			'no_29' => 'No 29',
			'no_30' => 'No 30',
			'no_31' => 'No 31',
			'no_32' => 'No 32',
			'no_33' => 'No 33',
			'no_34' => 'No 34',
			'no_35' => 'No 35',
			'no_36' => 'No 36',
			'no_37' => 'No 37',
			'no_38' => 'No 38',
			'no_39' => 'No 39',
			'no_40' => 'No 40',
			'no_41' => 'No 41',
			'no_42' => 'No 42',
			'no_43' => 'No 43',
			'no_44' => 'No 44',
			'no_45' => 'No 45',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('kode',$this->kode,true);		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return VStok the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
