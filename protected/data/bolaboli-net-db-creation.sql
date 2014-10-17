create database bolabolidotnetdb;

	create table coachInfo(
		coachInfoId integer(5),
		coachName varchar(35),
		nationalityId integer(5),
		doB timestamp,
		primary key (coachInfoId)
		)
	create table cupSeason (
		cupSeasonId integer(5),
		cupSeasonName varchar(35),
		cupInfoId integer(5),
		todayCupLevelStatus integer(3),
		winner integer(5),
		runnerUp integer(5),
		primary key (cupSeasonId)
		)
	create table leagueSeason (
		leagueSeasonId integer(5),
		leagueInfoId integer(5),
		leagueSeasonName varchar(35),
		todayWeekNum integer(5),
		winner integer(5),
		runnerUp integer(5),
		primary key (leagueSeasonId)
		)
	create table cupNationalTeamSeason (
		cupLeagueTeamSeasonId integer(5),
		cupSeasonId integer(5),
		nationalityId integer(5),
		cupGroupLevelId integer(5),
		teamSeasonName varchar(35),
		coachSeasonId integer(5),
		teamInfoId integer(5),
		wins integer(3),
		loses integer(3),
		draws integer(3),
		points integer(3),
		goalMinus integer(3),
		goalPositive integer(3),
		totalPlayed integer(3),
		ranking integer(3),
		primary key (cupLeagueTeamSeasonId)
		)
	create table stadium (
		stadiumId integer(5),
		stadiumName varchar(35),
		primary key (stadiumId)
		)
	create table leagueInfo (
		leagueInfoId integer(5),
		leagueInfoName varchar(35),
		country integer(5),
		primary key (leagueInfoId)
		)
	create table cupInfo (
		cupInfoId integer(5),
		cupInfoName varchar(35),
		primary key (cupInfoId)
		)
	create table nationalTeamInfo (
		nationalTeamInfoId integer(5),
		nationalTeamInfoName varchar(35),
		primary key (nationalTeamInfoId)
		)
	create table playerInfo (
		playerInfoId integer(5),
		playerInfoName varchar(35),
		doB timestamp,
		height integer(5),
		internationalCaps integer(5),
		nationalityId integer(5),
		primary key (playerInfoId)
		)
	create table teamInfo (
		teamInfoId integer(5),
		teamInfoName varchar(35),
		yearEstablished varchar(8),
		address varchar(35),
		city varchar(35),
		country integer(5),
		primary key (teamInfoId)
		)
	create table goalkeeperPlayer (
		goalkeeperPlayerId integer(5),
		teamSeasonId integer(5),
		nationalTeamSeasonId integer(5),
		playerInfoId integer(5),
		appearance integer(5),
		positionId integer(3),
		yellowCards integer(3),
		redCards integer(3),
		cleanSheets integer(5),
		saves integer(5),
		primary key (goalkeeperPlayerId)
		)
	create table nonGoalkeeperPlayer (
		nonGoalkeeperPlayerId integer(5),
		teamSeasonId integer(5),
		nationalTeamSeasonId integer(5),
		playerInfoId integer(5),
		appearance integer(5),
		positionId integer(3),
		yellowCards integer(3),
		redCards integer(3),
		completedPassesPercentage integer(5),
		touches integer(5),
		assists integer(5),
		goals integer(5),
		primary key (nonGoalkeeperPlayerId)
		)
	create table nationality (
		nationalityId integer(5),
		nationalityName varchar(35),
		primary key (nationalityId)
		)
	create table position (
		positionId integer(5), 
		positionName varchar(35),
		positionShortName varchar(8),
		positionType varchar(8),
		primary key (positionId)
		)
	create table matchCupHistory (
		matchCupHistoryId integer(5), 
		cupSeasonId integer(5),
		weekNum integer(5),
		dateTimeHeld timestamp,
		homeTeamId integer(5),
		awayTeamId integer(5),
		refereeId integer(5),
		matchStatus integer(3),
		primary key (matchCupHistoryId)
		)
	create table matchLeagueHistory (
		matchLeagueHistoryId integer(5), 
		cupSeasonId integer(5),
		weekNum integer(5),
		dateTimeHeld timestamp,
		homeTeamId integer(5),
		awayTeamId integer(5),
		refereeId integer(5),
		matchStatus integer(3),
		primary key (matchLeagueHistoryId)
		)
	create table referee (
		refereeId integer(5), 
		refereeName varchar(35),
		primary key (refereeId)
		)
	create table matchData (
		matchDataId integer(5), 
		matchTeamId integer(5), 
		actionType integer(5), 
		actor integer(5), 
		timeHappen integer(5), 
		primary key (matchDataId)
		)
	create table matchTeam (
		matchTeamId integer(5), 
		teamSeasonId integer(5), 
		matchTeamSide varchar(8),
		scores integer(3),
		redCards integer(3),
		yellowCards integer(3),
		fouls integer(3),
		offSides integer(3),
		shotOnTarget integer(3), 
		ballPossesionPercentage integer(5), 
		primary key (matchTeamId)
		)
	create table coachSeason (
		coachSeasonId integer(5), 
		coachInfoId integer(5), 
		coachSeasonName varchar(35),
		primary key (coachSeasonId)
		)
	create table teamAwards (
		teamSeasonId integer(5), 
		awardId integer(5), 
		primary key (teamSeasonId)
		)
	create table leagueTeamSeason (
		leagueTeamSeasonId integer(5),
		leagueSeasonId integer(5),
		teamSeasonName varchar(35),
		coachSeasonId integer(5),
		teamInfoId integer(5),
		wins integer(3),
		loses integer(3),
		draws integer(3),
		points integer(3),
		goalMinus integer(3),
		goalPositive integer(3),
		totalPlayed integer(3),
		ranking integer(3),
		primary key (leagueTeamSeasonId)
		)
	create table cupLeagueTeamSeason (
		cupLeagueTeamSeasonId integer(5),
		cupSeasonId integer(5),
		cupGroupLevelId integer(5),
		teamSeasonName varchar(35),
		coachSeasonId integer(5),
		teamInfoId integer(5),
		wins integer(3),
		loses integer(3),
		draws integer(3),
		points integer(3),
		goalMinus integer(3),
		goalPositive integer(3),
		totalPlayed integer(3),
		ranking integer(3),
		primary key (cupLeagueTeamSeasonId)
		)
	create table playerNews (
		playerNewsId integer(5),
		playerSeasonId integer(5),
		newsArticleURL varchar(35),
		newsObjectId integer(5),
		source varchar(35),
		cretorId integer(5),
		primary key (playerNewsId)
		)
	create table leagueNews (
		leagueNewsId integer(5),
		leagueSeasonId integer(5),
		newsArticleURL varchar(35),
		newsObjectId integer(5),
		source varchar(35),
		cretorId integer(5),
		primary key (leagueNewsId)
		)
	create table cupNews (
		cupNewsId integer(5),
		cupSeasonId integer(5),
		newsArticleURL varchar(35),
		newsObjectId integer(5),
		source varchar(35),
		cretorId integer(5),
		primary key (cupNewsId)
		)
	create table coachNews (
		coachNewsId integer(5),
		coachSeasonId integer(5),
		newsArticleURL varchar(35),
		newsObjectId integer(5),
		source varchar(35),
		cretorId integer(5),
		primary key (coachNewsId)
		)
	create table award (
		awardsId integer(5),
		awardsName varchar(35),
		primary key (awardsId)
		)
	create table cupGroup (
		cupGroupLevelId integer(5),
		groupLevelName varchar(35),
		primary key (cupGroupLevelId)
		)
	create table newsContentCreator (
		newsContentCreatorId integer(5),
		username varchar(50),
		password varchar(50),
		lastLogined timestamp,
		primary key (newsContentCreatorId)
		)
	create table registeredUser (
		email varchar(50),
		password varchar(50),
		name  varchar(35),
		lastLogined timestamp,
		authorityLevel varchar(10),
		primary key (email)
		)
	create table favoriteChannelList (
		favoriteListId integer(5),
		objectId integer(5),
		objectType varchar(10),
		userEmail varchar(50),
		primary key (favoriteListId)
		)
