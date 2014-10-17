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
<br/>

<div id="klasemen">
<table class="table">
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
