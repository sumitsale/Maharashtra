<?php
/* @var $this FortGallryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fort Gallries',
);

$this->menu=array(
	array('label'=>'Create FortGallry', 'url'=>array('create')),
	array('label'=>'Manage FortGallry', 'url'=>array('admin')),
);
?>

<h1>Fort Gallries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
