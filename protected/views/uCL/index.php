	<div id="sidebar">
	<h3 class="klasemen">Klasemen UCL</h3>
		<div id="klasemen">
			<table class="klasemen">	
				<tr>
					<td width="10%">No.</td>
					<td width="70%">Teams</td>
					<td width="10%">Points</td>
					<td width="10%">Play</td>
				</tr>
				<?php
				$dbh=Yii::app()->db;
				$sql = "SELECT * FROM club WHERE leagueId=1";
				$command =  $dbh->createCommand($sql);
				$dataReader=$command->query();
				$i=1;
				while(($row=$dataReader->read())!==false)
				{
				
					$play = null;
					$point = null;
					
					$sqlPoint = "SELECT * FROM clubpoint WHERE clubId = ".$row['clubId'];
					$commandPoint =  $dbh->createCommand($sqlPoint);
					$dataReaderPoint=$commandPoint->query();
					while(($rowPoint=$dataReaderPoint->read())!==false)
					{
					$play = $rowPoint['appearance'];
					$point = $rowPoint['point'];
					}
				?>
				<tr>
					<td width="10%"><?php echo $i ;?></td>
					<td width="70%"><?php echo $row['clubName'] ; ?></td>
					<td width="10%"><?php echo $point ; ?></td>
					<td width="10%"><?php echo $play ; ?></td>
				</tr>
				<?php 
				$i++;
				} 
				?> 
			</table>		
		</div>
	</div>
	
	<div id="group">
	<h1 class="jadwal">Jadwal Pertandingan UCL</h1>
	<?php
	$this->widget('CTabView',array(
    'activeTab'=>'tab3',
    'tabs'=>array(
        'tab1'=>array(
            'title'=>'<<',
            'content'=>'Match Day Sebelumnya Seluruhnya'
        ),
        'tab2'=>array(
            'title'=>'Sebelumnya',
            'content'=>'Match Day Sebelumnya'
        ),
		'tab3'=>array(
            'title'=>'Saat Ini',
            'content'=>'
			
			<table class ="tabelJadwal">
			<tr>
				<td class="group">Group A</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td class="group">Group B</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td class="group">Group C</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			
			<tr>
				<td class="group">Group D</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td class="group">Group E</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td class="group">Group F</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td class="group">Group G</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
			<tr>
				<td class="group">Group H</td>
			</tr>
			<tr>
				<td>DateTime</td>
				<td>Team Match</td>
			</tr>
		</table>
		
		'
        ),
		'tab4'=>array(
            'title'=>'Selanjutnya',
            'content'=>'Match Day Selanjutnya'
        ),
        'tab5'=>array(
            'title'=>'>>',
            'url'=>Yii::app()->createUrl("site/index"),
        )
    ),
    'htmlOptions'=>array(
        'style'=>''
    )
));
?>
	</div>