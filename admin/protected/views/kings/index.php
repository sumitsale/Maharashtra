<?php
/* @var $this KingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kings',
);

$this->menu=array(
	array('label'=>'Create Kings', 'url'=>array('create')),
	array('label'=>'Manage Kings', 'url'=>array('admin')),
);
?>

<h1>Kings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
