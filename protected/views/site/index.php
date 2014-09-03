<?php $this->widget('zii.widgets.CMenu', array(
                'items' => $this->menu,
                'encodeLabel' => false,
                'htmlOptions' => array(
                    'class' => 'page-sidebar-menu hidden-phone hidden-tablet' //You can customize this for your application
                )
            ));?>
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
			$this->menu=array(
    array(
            'label'=>'<span class="title"><strong>Project Actions</strong></span>',
            'url'=> '#'),
    array('label'=>'<i class="icon-plus"></i> Create A New Project', 'url'=>array('site/index')),
    array('label'=>'<i class="icon-archive"></i> View Archived Projects', 'url'=>'#'),
);
?>

<div id="menuJadwal">
	<div id="tombolJadwal">
	<?php echo CHtml::link('Jadwal Minggu Lalu',array('site/index')); ?>
	</div>
	
	<div id="tombolJadwal">
	<?php echo CHtml::link('Jadwal Minggu Ini',array('site/index')); ?>
	</div>
	
	<div id="tombolJadwal">
	<?php echo CHtml::link('Jadwal Minggu Depan',array('site/index')); ?>
	</div>
</div>
<br/>

<div id="klasemen">
<table>
		<tr>
			<th>Primier League</th>
			<th>P </th>
			<th>Pts </th>
			
		</tr>
		<tr>
		<td>Manchester</td>
			<td>34 </td>
			<td>67 </td>
		</tr>
		<tr>
		<td>Chelase</td>
			<td>4 </td>
			<td>56 </td>
		</tr>
	</table>
</div>

<div id="contentJadwal">
	<h1 id="judulMenu">
	Judul Menu Aktiv
	</h1>
	<hr/>
	
	<p>Hari Pertandingan I</p>
	<table>
		<tr>
			<th>Jadwal Pertandingan</th>
			<th>Tim A </th>
			<th>Vs </th>
			<th>Tim B </th>
			<th>Hasil </th>
		</tr>
	</table>
	
	<p>Hari Pertandingan II</p>
	<table>
		<tr>
			<td>Jadwal Pertandingan</td>
			<td>Tim A </td>
			<td>Vs </td>
			<td>Tim B </td>
			<td>Hasil </td>
		</tr>
		<tr>
			<td>Jadwal Pertandingan</td>
			<td>Tim A </td>
			<td>Vs </td>
			<td>Tim B </td>
			<td>Hasil </td>
		</tr>
	</table>
	
</div>
