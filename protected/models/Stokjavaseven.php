<?php

/**
 * This is the model class for table "stokjavaseven".
 *
 * The followings are the available columns in table 'stokjavaseven':
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
class Stokjavaseven extends CActiveRecord
{
	public $kode;
	public $warna;
	public $allsize;
	public $s;
	public $m;
	public $l;
	public $xl;
	public $xxl;
	public $no_2;
	public $no_4;
	public $no_6;
	public $no_8;
	public $no_10;
	public $no_12;
	public $no_14;
	public $no_16;
	public $no_18;
	public $no_20;
	public $no_21;
	public $no_22;
	public $no_23;
	public $no_24;
	public $no_25;
	public $no_26;
	public $no_27;
	public $no_28;
	public $no_29;
	public $no_30;
	public $no_31;
	public $no_32;
	public $no_33;
	public $no_34;
	public $no_35;
	public $no_36;
	public $no_37;
	public $no_38;
	public $no_39;
	public $no_40;
	public $no_41;
	public $no_42;
	public $no_43;
	public $no_44;
	public $no_45;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stokjavaseven';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode', 'required'),
			array('allsize, s, m, l, xl, xxl, no_2, no_4, no_6, no_8, no_10, no_12, no_14, no_16, no_18, no_20, no_21, no_22, no_23, no_24, no_25, no_26, no_27, no_28, no_29, no_30, no_31, no_32, no_33, no_34, no_35, no_36, no_37, no_38, no_39, no_40, no_41, no_42, no_43, no_44, no_45', 'numerical', 'integerOnly'=>true),
			array('kode', 'length', 'max'=>7),
			array('warna', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kode, warna, allsize, s, m, l, xl, xxl, no_2, no_4, no_6, no_8, no_10, no_12, no_14, no_16, no_18, no_20, no_21, no_22, no_23, no_24, no_25, no_26, no_27, no_28, no_29, no_30, no_31, no_32, no_33, no_34, no_35, no_36, no_37, no_38, no_39, no_40, no_41, no_42, no_43, no_44, no_45', 'safe', 'on'=>'search'),
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
		$criteria->compare('warna',$this->warna,true);
		$criteria->compare('allsize',$this->allsize);
		$criteria->compare('s',$this->s);
		$criteria->compare('m',$this->m);
		$criteria->compare('l',$this->l);
		$criteria->compare('xl',$this->xl);
		$criteria->compare('xxl',$this->xxl);
		$criteria->compare('no_2',$this->no_2);
		$criteria->compare('no_4',$this->no_4);
		$criteria->compare('no_6',$this->no_6);
		$criteria->compare('no_8',$this->no_8);
		$criteria->compare('no_10',$this->no_10);
		$criteria->compare('no_12',$this->no_12);
		$criteria->compare('no_14',$this->no_14);
		$criteria->compare('no_16',$this->no_16);
		$criteria->compare('no_18',$this->no_18);
		$criteria->compare('no_20',$this->no_20);
		$criteria->compare('no_21',$this->no_21);
		$criteria->compare('no_22',$this->no_22);
		$criteria->compare('no_23',$this->no_23);
		$criteria->compare('no_24',$this->no_24);
		$criteria->compare('no_25',$this->no_25);
		$criteria->compare('no_26',$this->no_26);
		$criteria->compare('no_27',$this->no_27);
		$criteria->compare('no_28',$this->no_28);
		$criteria->compare('no_29',$this->no_29);
		$criteria->compare('no_30',$this->no_30);
		$criteria->compare('no_31',$this->no_31);
		$criteria->compare('no_32',$this->no_32);
		$criteria->compare('no_33',$this->no_33);
		$criteria->compare('no_34',$this->no_34);
		$criteria->compare('no_35',$this->no_35);
		$criteria->compare('no_36',$this->no_36);
		$criteria->compare('no_37',$this->no_37);
		$criteria->compare('no_38',$this->no_38);
		$criteria->compare('no_39',$this->no_39);
		$criteria->compare('no_40',$this->no_40);
		$criteria->compare('no_41',$this->no_41);
		$criteria->compare('no_42',$this->no_42);
		$criteria->compare('no_43',$this->no_43);
		$criteria->compare('no_44',$this->no_44);
		$criteria->compare('no_45',$this->no_45);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Stokjavaseven the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
