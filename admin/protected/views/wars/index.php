<?php
/* @var $this WarsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Wars',
);

$this->menu=array(
	array('label'=>'Create Wars', 'url'=>array('create')),
	array('label'=>'Manage Wars', 'url'=>array('admin')),
);
?>

<h1>Wars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
