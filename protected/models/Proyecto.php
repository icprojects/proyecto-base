<?php

/**
 * This is the model class for table "pry_proyecto".
 *
 * The followings are the available columns in table 'pry_proyecto':
 * @property integer $i_pry_id
 * @property string $s_pry_nombre
 * @property string $s_pry_code
 * @property string $s_pry_info
 * @property string $s_pry_objetivo
 * @property integer $i_pry_createdby
 * @property string $d_pry_creation
 * @property integer $i_pry_updatedby
 * @property string $d_pry_lastupdate
 *
 * The followings are the available model relations:
 * @property Version[] $versions
 */
class Proyecto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proyecto the static model class
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
		return 'pry_proyecto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('s_pry_nombre, s_pry_code, s_pry_objetivo', 'required'),
			array('i_pry_createdby, i_pry_updatedby', 'numerical', 'integerOnly'=>true),
			array('s_pry_nombre', 'length', 'max'=>150),
			array('s_pry_code', 'length', 'max'=>15),
			array('s_pry_info, s_pry_objetivo, d_pry_lastupdate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('i_pry_id, s_pry_nombre, s_pry_code, s_pry_info, s_pry_objetivo, i_pry_createdby, d_pry_creation, i_pry_updatedby, d_pry_lastupdate', 'safe', 'on'=>'search'),
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
			'versions' => array(self::HAS_MANY, 'Version', 'i_pry_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'i_pry_id' => 'I Pry',
			's_pry_nombre' => 'Proyecto',
			's_pry_code' => 'Sigla',
			's_pry_info' => 'S Pry Info',
			's_pry_objetivo' => 'Objetivo',
			'i_pry_createdby' => 'I Pry Createdby',
			'd_pry_creation' => 'D Pry Creation',
			'i_pry_updatedby' => 'I Pry Updatedby',
			'd_pry_lastupdate' => 'D Pry Lastupdate',
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

		$criteria->compare('i_pry_id',$this->i_pry_id);
		$criteria->compare('s_pry_nombre',$this->s_pry_nombre,true);
		$criteria->compare('s_pry_code',$this->s_pry_code,true);
		$criteria->compare('s_pry_info',$this->s_pry_info,true);
		$criteria->compare('s_pry_objetivo',$this->s_pry_objetivo,true);
		$criteria->compare('i_pry_createdby',$this->i_pry_createdby);
		$criteria->compare('d_pry_creation',$this->d_pry_creation,true);
		$criteria->compare('i_pry_updatedby',$this->i_pry_updatedby);
		$criteria->compare('d_pry_lastupdate',$this->d_pry_lastupdate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
	protected function beforeSave()
	{
		
		
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$this->d_pry_creation=new CDbExpression('NOW()');
				$this->i_pry_createdby=Yii::app()->user->id;
			}
			else{
				$this->d_pry_lastupdate=new CDbExpression('NOW()');
				$this->i_pry_updatedby=Yii::app()->user->id;
			}
			return true;
		}
		else
			return false;
	}
	
}