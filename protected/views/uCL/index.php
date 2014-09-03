<?php
/* @var $this UCLController */

$this->breadcrumbs=array(
	'U Cl',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'match-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'dueDate',
		'team1Name',
		'team2Name',
		'stadiumName',
	),
)); ?>
