<?php
class MatchDetail extends CFormModel
{
    public $team1Name;
    public $team2Name;
    public $dueDate;
    public $stadiumName;


    public function rules()
    {
        return array(
            array('team1Name, team2Name, dueDate, stadiumName', 'required'),
        );
    }
    
    public function attributeLabels()
    {
		return array(
			'team1Name' => 'Team1',
			'team2Name' => 'Team2',
			'dueDate' => 'Due Date',
			'stadiumName' => 'Stadium',
		);
    }
           
}