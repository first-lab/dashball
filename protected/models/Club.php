<?php

/**
 * This is the model class for table "club".
 *
 * The followings are the available columns in table 'club':
 * @property string $clubId
 * @property string $clubName
 * @property string $clubShortName
 * @property string $coach
 * @property integer $leagueId
 */
class Club extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'club';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clubName, clubShortName, coach, leagueId', 'required'),
			array('leagueId', 'numerical', 'integerOnly'=>true),
			array('clubName, coach', 'length', 'max'=>50),
			array('clubShortName', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('clubId, clubName, clubShortName, coach, leagueId', 'safe', 'on'=>'search'),
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
			'clubId' => 'Club',
			'clubName' => 'Club Name',
			'clubShortName' => 'Club Short Name',
			'coach' => 'Coach',
			'leagueId' => 'League',
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

		$criteria->compare('clubId',$this->clubId,true);
		$criteria->compare('clubName',$this->clubName,true);
		$criteria->compare('clubShortName',$this->clubShortName,true);
		$criteria->compare('coach',$this->coach,true);
		$criteria->compare('leagueId',$this->leagueId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Club the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
