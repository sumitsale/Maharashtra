<?php
/* @var $this FortCategoryController */
/* @var $model FortCategory */

$this->breadcrumbs=array(
	'Fort Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FortCategory', 'url'=>array('index')),
	array('label'=>'Create FortCategory', 'url'=>array('create')),
	array('label'=>'Update FortCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FortCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FortCategory', 'url'=>array('admin')),
);
?>

<h1>View FortCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_name',
		'date_added',
		'date_modified',
	),
)); ?>
