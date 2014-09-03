<?php

/**
 * This is the model class for table "match".
 *
 * The followings are the available columns in table 'match':
 * @property string $matchId
 * @property integer $team1
 * @property integer $team2
 * @property string $dueDate
 * @property integer $stadiumId
 * @property integer $leagueId
 */
class Match extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'match';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('team1, team2, dueDate, stadiumId, leagueId', 'required'),
			array('team1, team2, stadiumId, leagueId', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('matchId, team1, team2, dueDate, stadiumId, leagueId', 'safe', 'on'=>'search'),
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
			'matchId' => 'Match',
			'team1' => 'Team1',
			'team2' => 'Team2',
			'dueDate' => 'Due Date',
			'stadiumId' => 'Stadium',
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

		$criteria->compare('matchId',$this->matchId,true);
		$criteria->compare('team1',$this->team1);
		$criteria->compare('team2',$this->team2);
		$criteria->compare('dueDate',$this->dueDate,true);
		$criteria->compare('stadiumId',$this->stadiumId);
		$criteria->compare('leagueId',$this->leagueId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Match the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
