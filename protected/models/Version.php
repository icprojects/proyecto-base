<?php

/**
 * This is the model class for table "pry_version".
 *
 * The followings are the available columns in table 'pry_version':
 * @property integer $i_pry_ver_id
 * @property string $s_pry_ver_nota
 * @property integer $i_user_id
 * @property integer $b_pry_ver_estado
 * @property string $d_pry_ver_creation
 * @property integer $i_pry_id
 *
 * The followings are the available model relations:
 * @property Proyecto $iPry
 */
class Version extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Version the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pry_version';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('i_pry_ver_id, s_pry_ver_nota, i_user_id, d_pry_ver_creation', 'required'),
			array('i_pry_ver_id, i_user_id, b_pry_ver_estado, i_pry_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('i_pry_ver_id, s_pry_ver_nota, i_user_id, b_pry_ver_estado, d_pry_ver_creation, i_pry_id', 'safe', 'on'=>'search'),
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
			'iPry' => array(self::BELONGS_TO, 'Proyecto', 'i_pry_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'i_pry_ver_id' => 'I Pry Ver',
			's_pry_ver_nota' => 'S Pry Ver Nota',
			'i_user_id' => 'I User',
			'b_pry_ver_estado' => 'B Pry Ver Estado',
			'd_pry_ver_creation' => 'D Pry Ver Creation',
			'i_pry_id' => 'I Pry',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('i_pry_ver_id',$this->i_pry_ver_id);
		$criteria->compare('s_pry_ver_nota',$this->s_pry_ver_nota,true);
		$criteria->compare('i_user_id',$this->i_user_id);
		$criteria->compare('b_pry_ver_estado',$this->b_pry_ver_estado);
		$criteria->compare('d_pry_ver_creation',$this->d_pry_ver_creation,true);
		$criteria->compare('i_pry_id',$this->i_pry_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}