<?php

/**
 * This is the model class for table "matchnews".
 *
 * The followings are the available columns in table 'matchnews':
 * @property string $matchNewsId
 * @property integer $newsStatusId
 * @property integer $actorPlayerId
 * @property string $minute
 * @property integer $matchId
 */
class Matchnews extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'matchnews';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('newsStatusId, actorPlayerId, minute, matchId', 'required'),
			array('newsStatusId, actorPlayerId, matchId', 'numerical', 'integerOnly'=>true),
			array('minute', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('matchNewsId, newsStatusId, actorPlayerId, minute, matchId', 'safe', 'on'=>'search'),
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
			'matchNewsId' => 'Match News',
			'newsStatusId' => 'News Status',
			'actorPlayerId' => 'Actor Player',
			'minute' => 'Minute',
			'matchId' => 'Match',
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

		$criteria->compare('matchNewsId',$this->matchNewsId,true);
		$criteria->compare('newsStatusId',$this->newsStatusId);
		$criteria->compare('actorPlayerId',$this->actorPlayerId);
		$criteria->compare('minute',$this->minute,true);
		$criteria->compare('matchId',$this->matchId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Matchnews the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
